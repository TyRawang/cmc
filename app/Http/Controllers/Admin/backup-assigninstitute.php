<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Institute;
use App\Category;
use App\User;
use App\Book;
use Hash;
use File;
use Excel;
use App\Mail\InstituteMail;
use Illuminate\Support\Facades\Session;
use Brian2694\Toastr\Facades\Toastr;
use Mail;
use DB;
class AssignInstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = User::where('isActive',1)->where('role_id','=',2)->get();
        return view('admin.assigninstitute.index', compact('title'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category  = Category::Orderby('order_by_cat','ASC')->where('p_id',0)->get();
        $subcategory = Category::Orderby('order_by_cat','ASC')->where('p_id','!=',0)->get();
        $Institute = Institute::where('isActive',1)->get();
        return view('Admin.assigninstitute.create',compact('category','subcategory','Institute'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'institute_id' =>'required',
          'name' =>'required',
          'email' =>'required|email|unique:users,email',
          'password' =>'required|min:6',
          'num_of_allow_user' =>'required',
        ]);
        $inst = Institute::find($request->institute_id);
        if($request->has('isActive')) {
            $storeinst = true;
        } else {
            $storeinst = false;
        }
        $craf = [
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'num_of_allow_user' => $request->num_of_allow_user,
            'isActive'=>$storeinst
        ];
        $inst->user()->create($craf);
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('assign-institute.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $data = User::find($id);
        $category  = Category::Orderby('order_by_cat','ASC')->where('p_id',0)->get();
        $subcategory = Category::Orderby('order_by_cat','ASC')->where('p_id','!=',0)->get();

         $editid = Institute::select('category_id','book_id')->where('user_id',$id)->get();
         $editcatid=[];
         $editbookid=[];

            foreach($editid as $val) {
                $editcatid[] = $val->category_id;
                $editbookid[] = $val->book_id;
            }

           $uniquecatid= array_unique($editcatid);
            $uniquebookid= array_unique($editbookid);

            $implodecatid= implode(',', $uniquecatid);
             $implodebokid= implode(',', $uniquebookid);

        $Institute = Institute::where('user_id',$id)->get();
        $staticip = Institute::where('user_id',$id)->first();
        $relid = array();
        $bookid = array();
        if($Institute) {
            foreach($Institute as $val) {
                $relid[] = $val->category_id;
                $bookid[] = $val->book_id;
            }
            $impcatid = implode(',',$relid);
          
            $implodebookid = implode(',',$bookid);
        }
        return view('admin.assigninstitute.edit',compact('data','category','subcategory','Institute','relid','staticip','bookid','implodebookid','impcatid','implodecatid','implodebokid'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {  
         //print_r($request->category_id);die;
              $request->validate([
            'category_id' => 'required',
        ]);


      
       // $email = $request->email;
      
        
         $inst = Institute::find($id);

         $staticid = $request->ip_address;
          if($staticid) {
              $stid = implode(',',$staticid); 
          }


         Institute::where('user_id',$id)->delete();
            foreach($request->book as $val) {
            foreach($request->category_id as $key=>$value) {  
            
           
            if($inst!='') {
                $institute = Institute::find($id);
               } else {
                  $institute = new Institute;  
               }
            $institute->category_id = $value;
            $institute->static_ipaddress = $stid;
            $institute->book_id = $val;
          
            $institute->user_id = $id;
            if ($request->has('isActive')) {
                $institute->isActive = true;
            } else {
                $institute->isActive = false;
            }
            $institute->save();
         }
        }
        $content = [
            'name' =>$request->name,
            'email' => $request->email,
          ];
          
            //Mail::to('himanshu.kumar@edtech.in')->send(new InstituteMail($content));
            Toastr::success('Record updated Successfully!','Success');
            return redirect()->route('assign-institute.index');
       
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inst =  Institute::where('user_id',$id)->delete();
        if($inst) {
        Toastr::success('Record deleted Successfully!','Success');
        } else {
            Toastr::success('User not assign any book!','Success');
        }
        return redirect()->route('assign-institute.index');
    }

     public function getBook(Request $request)
     {
        $catid = $request->categoryid;

      

         $expid = explode(',',$catid);
         $bid = $request->bid;

         $bookid = explode(',',$bid);

        foreach($expid as $val) {
        $category  = Category::where('id',$val)->first();
        $collectdata1[$category->category_name] = \DB::table("books")
           ->select('title','id')
           ->whereRaw("find_in_set($val,category_id)")
           ->get(['id', 'title'])->toArray();

       }
                

        if($collectdata1) {
        return response()->json($collectdata1);
        } else {
            $collectdata1 = '';
        }
         
     }
     public function addgetbook(Request $request)
     {
  
        $catid = $request->categoryid;
        
       
 foreach($catid as $val) {
        $category  = Category::where('id',$val)->first();
        $collectdata[$category->category_name] = \DB::table("books")
           ->select('title','id')
           ->whereRaw("find_in_set($val,category_id)")
           ->get(['id', 'title'])->toArray();

       }

//dd($collectdata);
      
        if($collectdata) {
         return response()->json($collectdata);
       
        } else {
            $collectdata = '';
        }
         
     }
     
     public function UploadIsbn(Request $request)
     {
        $institutecategory = User::where('role_id',2)->get();
       
        return view('admin.assigninstitute.uploadisbn',compact('institutecategory'));
     }

     public function storeInstitutebook(Request $request)
     {
        $this->validate($request, array(
            'file'      => 'required',
            'institute_id'      => 'required'
           ));
           
           if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
    
             $path = $request->file->getRealPath();
             $data = Excel::load($path, function($reader) {
             })->get();
    
           // dd($data);
             if(!empty($data) && $data->count()){
    
              foreach ($data as $key => $value) {
                $user_id = $request->institute_id;
               // $checkcount = Book::where('isbn',$value->book_isbn)->count();
              //  if($checkcount) {
                    $bookstore =  Book::where('isbn',$value->book_isbn)->first();
                    $category_id = $bookstore->category_id;
                    $book_id = $bookstore->id;
                    $stoteinsbookcount = Institute::where('book_id',$book_id)->count();
                    if($stoteinsbookcount > 0) {
                    $stoteinsbook = Institute::where('book_id',$book_id)->first();    
                   } else {
                    $stoteinsbook = new Institute;
                   }
                   
                    $bookstore =  Book::where('isbn',$value->book_isbn)->first();
                    $category_id = $bookstore->category_id;
                    $book_id = $bookstore->id;
                    $stoteinsbook->user_id = $user_id;
                    $stoteinsbook->category_id = $category_id;
                    $stoteinsbook->book_id =$book_id;
                    $stoteinsbook->isActive =1;
                    $stoteinsbook->save();
              }
              Toastr::success('XLSHEET UPLOADED Successfully!','Success');
              return redirect()->route('upload-isbn');
             }
            }else {
             Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
             return back();
            }
           }
     }
}