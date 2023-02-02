<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use File;
use Excel;
use Image;

use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_category  = Category::Orderby('order_by_cat','ASC')->where('p_id','0')->get();
        $child_cat  = Category::Orderby('order_by_cat','ASC')->where('p_id','!=','0')->get();
        return view('admin.category.index', compact('home_category','child_cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $category = Category::latest()->get();
        $category  = Category::Orderby('order_by_cat','ASC')->where('p_id','0')->get();
        $subcategory  = Category::Orderby('order_by_cat','ASC')->where('p_id','!=','0')->get();
       
        return view('admin.category.create', compact('category','subcategory'));

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
          'category_name' =>'required',
		  'image' =>'image|mimes:jpeg,png,jpg,gif,svg',
		  'homeimage' =>'image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $status = $request->status;
        $storeCategory = new Category;
        $storeCategory->category_name = $request->category_name;
		$storeCategory->subcatname = $request->subcatname;
        $storeCategory->meta_tag_title = $request->meta_tag_title;
        $storeCategory->meta_tag_description = $request->meta_tag_description;
		$storeCategory->description = $request->description;
		$storeCategory->shortdescription = $request->shortdescription;
        $storeCategory->meta_tag_keyword = $request->meta_tag_keyword;
        $storeCategory->order_by_cat = $request->order_by_cat;
        $storeCategory->p_id = $request->p_id;
        $title = str_slug($request->category_name, '-');
        $storeCategory->slug = $title;
        if($request->has('isActive')) {
            $storeCategory->isActive = true;
        } else {
            $storeCategory->isActive = false;
        }
		
		
		 if ($request->file('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $Image = rand(11111,99999).'_'.time().'.'.$extension;
            $imageRealPath  =   $file->getRealPath();
            $thumbName      =   'thumb_'. $Image;
            $img = Image::make($imageRealPath); // use this if you want facade style code
            $thumb_width = 282;
            list($width,$height) = getimagesize($imageRealPath);
            $thumb_height = ($thumb_width/$width) * $height;
            $img->resize($thumb_width,$thumb_height);
            $img->save('Category' . '/'. $thumbName);
            $file->move('Category/', $Image);
            $storeCategory->image ="/Category/".$thumbName;
          }
		
		       if ($request->hasFile('homeimage')) {
                $vimageName = time().'.'.$request->banner->getClientOriginalExtension();
                $request->banner->move(public_path('Category'), $vimageName);
                $path = "Category/".$vimageName;
                $storeCategory->homeimage = $path;
        }
		
		
		
		
		
		
		
		
     
        if($storeCategory->save()) {
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('category.index');
        } else {
            Toastr::error('Error in Insertion!','Error');

        }


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
    public function edit(Category $category)
    {

         $maincategory  = Category::Orderby('order_by_cat','ASC')->where('p_id','0')->get();
        $subcategory  = Category::Orderby('order_by_cat','ASC')->where('p_id','!=','0')->get();



       
        return view('admin.category.edit',compact('category','maincategory','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //dd($request->all());
        $request->validate([
		    'image' =>'image|mimes:jpeg,png,jpg,gif,svg',
			'homeimage' =>'image|mimes:jpeg,png,jpg,gif,svg',
            'category_name' => 'required'
        ]);

        $category->category_name = $request->category_name;
		 $category->subcatname = $request->subcatname;
        $category->meta_tag_title = $request->meta_tag_title;
        $category->meta_tag_description = $request->meta_tag_description;
		 $category->meta_tag_description = $request->meta_tag_description;
        $category->description = $request->description;
		$category->shortdescription = $request->shortdescription;
        $category->p_id = $request->p_id;
        $category->order_by_cat = $request->order_by_cat;
        $title = str_slug($request->category_name, '-');
        $category->slug = $title;
        if ($request->has('isActive')) {
            $category->isActive = true;
        } else {
            $category->isActive = false;
        }
		
		
		
		
		
		
		

            if ($request->file('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $Image = rand(11111,99999).'_'.time().'.'.$extension;
            $imageRealPath  =   $file->getRealPath();
            $thumbName      =   'thumb_'. $Image;
            $img = Image::make($imageRealPath); // use this if you want facade style code
            $thumb_width = 282;
            list($width,$height) = getimagesize($imageRealPath);
            $thumb_height = ($thumb_width/$width) * $height;
            $img->resize($thumb_width,$thumb_height);
            $img->save('Category' . '/'. $thumbName);
            $file->move('Category/', $Image);
            $category->image ="/Category/".$thumbName;
          }
		        if ($request->hasFile('homeimage')) {
                $vimageName = time().'.'.$request->banner->getClientOriginalExtension();
                $request->banner->move(public_path('Category'), $vimageName);
                $path = "Category/".$vimageName;
                $storeCategory->homeimage = $path;
        }
		

        if ($category->save()) {
            Toastr::success('Record updated Successfully!','Success');
            return redirect()->route('category.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('category.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $deleteid = Category::find($id)->delete();
       Toastr::success('Record deleted Successfully!','Success');
       return redirect()->route('category.index');

    }

    public function uploadCategory(Request $request)
    {
        return view('admin.category.uploadcategory');
    }
   
    //Upload CSV
    public function uploadFile(Request $request){
		
		
        $this->validate($request, array(
            'file'      => 'required'
           ));
           if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
             $path = $request->file->getRealPath();
             $data = Excel::load($path, function($reader) {
             })->get();
    
             //echo "<pre>";print_r($data);die;
           // dd($data);
             if(!empty($data) && $data->count()){
              foreach ($data as $key => $value) {
                $checkcount = Category::where('id',$value->id)->count();
                if($checkcount) {
                    $bookstore =  Category::where('id',$value->id)->first();
                } else {
                    $bookstore = new Category;
                }
                $bookstore->id = $value->id;
               $bookstore->category_name = $value->category_name;
			   $bookstore->subcatname = $value->subcatname;
               $bookstore->slug = $value->title;
			    $bookstore->top = $value->top;
               $bookstore->slug = str_slug($value->category_name);
               $bookstore->p_id = $value->p_id;
			   $bookstore->image = $value->image;
			   $bookstore->homeimage = $value->homeimage;
               $bookstore->description = $value->description;
               $bookstore->meta_tag_title = $value->meta_tag_title;
               $bookstore->seo_keyword = $value->seo_keyword;
               $bookstore->meta_tag_description = $value->meta_tag_description;
               $bookstore->meta_tag_keyword = $value->meta_tag_keyword;
               $bookstore->isActive = 1;
               $bookstore->order_by_cat = $value->order_by_cat;
               $bookstore->save();
              }
    
            Toastr::success('XLSHEET UPLOADED Successfully!','Success');
            return redirect()->route('upload-category');
             }
            }else {
             Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
             return back();
            }
           }
      }
      public function downloadExcelCategory($type)
      {
          $data = Category::get()->toArray();
  
          return Excel::create('Categoy', function($excel) use ($data) {
              $excel->sheet('mySheet', function($sheet) use ($data)
              {
                  $sheet->fromArray($data);
              });
          })->download($type);
      }
	  
	  
	  
	  public function deleteCategoryimage(Request $request)
    {
        $id = $request->id;
        $category = Category::where('id',$id)->first();
        $category->image ='';		
        $category->save();
        Toastr::success('Image deleted Successfully!','Success');
        return redirect()->route('category.edit',['id'=>$id]);
    }
	  
	  public function deleteCategoryhomeimage(Request $request)
    {
        $id = $request->id;
        $category = Category::where('id',$id)->first();
        $category->homeimage ='';		
        $category->save();
        Toastr::success('Image deleted Successfully!','Success');
        return redirect()->route('category.edit',['id'=>$id]);
    }
	  
	  
	  
	  
}
