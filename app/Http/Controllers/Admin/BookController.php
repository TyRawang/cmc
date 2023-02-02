<?php
namespace App\Http\Controllers\Admin;
use DB;
use File;
use Excel;
use Image;
use App\Book;
use App\Category;
use App\RelatedBook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$job = Job::latest()->get();
        $book = Book::with('category')->latest()->get();

        return view('admin.books.index', compact('book'));
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
	
        $bookrelated = Book::where('isActive',1)->get();
        return view('admin.books.create', compact('category','subcategory','bookrelated'));

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
          'title' =>'required',
          'category_id' =>'required',
          'isbn' =>'required',
          'author_name' =>'required',
          'price' =>'required',
          'publish_year' =>'required',
          'publisher' =>'required',
          'description' =>'required',
          'pdf' =>"required|mimes:pdf",
          'language' =>'required',
          'paid' =>'required',
          'book_cover' =>'required|mimes:jpeg,png,bmp,gif,svg',
        ]);
        $store_data = new Book;
         $catid = $request->category_id;


         $impcatid = implode(',',$catid);
         
         $parentcat  = $categoryid = Category::select('p_id')->where('id',$impcatid)->first();

        $impparentid=$parentcat->p_id;



               
        $store_data->category_id =$impparentid;
        $store_data->cat_child =$impcatid;
        $store_data->title =$request->title;
        $slugtitle = $request->title;
        $store_data->product_slug = str_slug($slugtitle,'-');
        $store_data->paid = $request->paid;
        $store_data->isbn = $request->isbn;
        $store_data->author_name = $request->author_name;
        $store_data->book_url = $request->book_url;
        $store_data->description = $request->description;
        $store_data->price = $request->price;
        $store_data->publish_year = $request->publish_year;
        $store_data->publisher = $request->publisher;
        $store_data->meta_tag_title = $request->meta_tag_title;
        $store_data->meta_tag_description = $request->meta_tag_description;
        $store_data->meta_tag_keyword = $request->meta_tag_keyword;
        $store_data->language = $request->language;

        if ($request->file('book_cover')) {
            $file = $request->book_cover;
            $extension = $file->getClientOriginalExtension();
            $Image = rand(11111,99999).'_'.time().'.'.$extension;
            $imageRealPath  =   $file->getRealPath();
            $thumbName      =   'thumb_'. $Image;
            $img = Image::make($imageRealPath); // use this if you want facade style code
            $thumb_width = 282;
            list($width,$height) = getimagesize($imageRealPath);
            $thumb_height = ($thumb_width/$width) * $height;
            $img->resize($thumb_width,$thumb_height);

            $img->save('catalog' . '/'. $thumbName);
            $file->move('catalog', $Image);
            $store_data->book_cover ="catalog".$thumbName;
          }
         if ($request->hasFile('pdf')) {
            $vimageName = time().'.'.$request->pdf->getClientOriginalExtension();
            $request->pdf->move(public_path('pdf'), $vimageName);
            $pdfpath = "pdf/".$vimageName;
            $store_data->pdf =$pdfpath;
        }

        if($request->has('isActive')) {
            $store_data->isActive = true;
        } else {
            $store_data->isActive = false;
        }
        if($request->has('latest')) {
            $store_data->latest = true;
        } else {
            $store_data->latest = false;
        }
        if($request->has('featured')) {
            $store_data->featured = true;
        } else {
            $store_data->featured = false;
        }
         if ($store_data->save()) {

            if ($request->has('related_book') && $request->input('related_book') <> null) {
                foreach ($request->related_book as $rel_book) {
                   // $rel_book_det = Book::find($rel_book);
                    $craf = [
                        'related_book_id' => $rel_book,
                        'related_book_slug' =>'test',
                    ];
                    $store_data->relatedBooks()->create($craf);
               }
            }


            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('books.index');
        } else {
            Toastr::error('Error in insertion!','Error');
            return redirect()->route('books.index');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
         if($book->category_id) {

            $arrayexp = explode(',',$book->category_id);

         } else {
            $arrayexp = array();
         }

         $books = Book::where('id','<>',$book->id)->latest()->get();
         $rnArr = [];
         foreach($book->relatedBooks as $rlorgs) {
             array_push($rnArr,$rlorgs->related_book_id);
         }
        $category  = Category::Orderby('order_by_cat','ASC')->where('p_id',0)->get();
        $subcategory = Category::Orderby('order_by_cat','ASC')->where('p_id','!=',0)->get();
			
        return view('admin.books.edit',compact('book','category','subcategory','arrayexp','books','rnArr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' =>'required',
            'category_id' =>'required',
            'isbn' =>'required',
            'author_name' =>'required',
            'price' =>'required',
            'publish_year' =>'required',
            'publisher' =>'required',
            'description' =>'required',
            'pdf' =>"mimes:pdf",
            'language' =>'required',
            'book_cover' =>'mimes:jpeg,png,bmp,gif,svg'
           ]);

          $subcat = $request->category_id;
		  
		   $caid  = $category  = Category::where('id',$subcat)->first();
		    
		   $catid = $caid->p_id;
		  
		      
		   
         if($catid !='' && $subcat!='') {
            $mergearray1 = array_merge($catid,$subcat);
            $mergearray = implode(',',$mergearray1);
        } else {

           $mergearray = implode(',',$catid);
         }
          $book->title = $request->title;
          $slugtitle = $request->title;
          $book->product_slug = str_slug($slugtitle,'-');
          $book->category_id = $mergearray;
          $book->isbn = $request->isbn;
          $book->author_name = $request->author_name;
          $book->book_url = $request->book_url;
          $book->description = $request->description;
          $book->price = $request->price;
          $book->publish_year = $request->publish_year;
          $book->publisher = $request->publisher;
          $book->paid = $request->paid;
          $book->meta_tag_title = $request->meta_tag_title;
          $book->meta_tag_description = $request->meta_tag_description;
          $book->meta_tag_keyword = $request->meta_tag_keyword;
          $book->language = $request->language;
          if ($request->file('book_cover')) {
              $file = $request->book_cover;
              $extension = $file->getClientOriginalExtension();
              $Image = rand(11111,99999).'_'.time().'.'.$extension;
              $imageRealPath  =   $file->getRealPath();
              $thumbName      =   'thumb_'. $Image;
              $img = Image::make($imageRealPath); // use this if you want facade style code
              $thumb_width = 282;
              list($width,$height) = getimagesize($imageRealPath);
              $thumb_height = ($thumb_width/$width) * $height;
              $img->resize($thumb_width,$thumb_height);

              $img->save('catalog/books'. '/'. $thumbName);
              $file->move('catalog/books/', $Image);
              $book->book_cover ="/catalog/books/".$thumbName;
            }
           if ($request->hasFile('pdf')) {
              $vimageName = time().'.'.$request->pdf->getClientOriginalExtension();
              $request->pdf->move(public_path('pdf'), $vimageName);
              $pdfpath = "pdf/".$vimageName;
              $book->pdf =$pdfpath;
          }

          if($request->has('isActive')) {
              $book->isActive = true;
          } else {
              $book->isActive = false;
          }
          if($request->has('latest')) {
            $book->latest = true;
        } else {
            $book->latest = false;
        }
        if($request->has('featured')) {
            $book->featured = true;
        } else {
            $book->featured = false;
        }
          if($book->save()) {
            if ($request->has('related_book') && $request->input('related_book') <> null) {
                $book->relatedBooks()->delete();
                foreach($request->related_book as $rel_orgs) {
                    $rel_orgs_det = Book::find($rel_orgs);
                    $craf = [
                        'related_book_id' => $rel_orgs,
                        'related_book_slug' => 'test',
                    ];
                    $book->relatedBooks()->create($craf);
                }
            }
              Toastr::success('Record created Successfully!','Success');
              return redirect()->route('books.index');
          } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('books.index');
          }
      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Book::find($id)->delete();
        Toastr::success('Record deleted Successfully!','Success');
        return redirect()->route('books.index');
    }

    public function deletePdf(Request $request)
    {
        $id = $request->id;
        $updateData = Book::where('id',$id)->first();
        $updateData->pdf ='';
        $updateData->save();
        Toastr::success('Pdf deleted Successfully!','Success');
        return redirect()->route('books.edit',['id'=>$id]);
    }

    public function deleteBookcover(Request $request)
    {
        $id = $request->id;
        $updateData = Book::where('id',$id)->first();
        $updateData->book_cover ='';
        $updateData->save();
        Toastr::success('Image deleted Successfully!','Success');
        return redirect()->route('books.edit',['id'=>$id]);
    }

    public function uploadProductCategory(Request $request)
    
    {
        return view('admin.books.uploadcategory');
    }


    //Upload CSV
    //  public function productUploadFile(Request $request) {
    //     $file = $request->file('file');
    //     $filename = $file->getClientOriginalName();
    //     $extension = $file->getClientOriginalExtension();
    //     $tempPath = $file->getRealPath();
    //     $fileSize = $file->getSize();
    //     $mimeType = $file->getMimeType();
    //     // Valid File Extensions
    //     $valid_extension = array("csv");
    //     // 2MB in Bytes
    //     $maxFileSize = 2097152;
    //     // Check file extension
    //     if(in_array(strtolower($extension),$valid_extension)){
    //       // Check file size
    //       if($fileSize <= $maxFileSize){
    //         // File upload location
    //         $location = 'uploads';
    //         // Upload file
    //         $file->move($location,$filename);
    //         // Import CSV to Database
    //         $filepath = public_path($location."/".$filename);
    //         // Reading file
    //         $file = fopen($filepath,"r");
    //         $importData_arr = array();
    //         $i = 0;

    //         while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
    //            $num = count($filedata );

    //            // Skip first row (Remove below comment if you want to skip the first row)
    //            /*if($i == 0){
    //               $i++;
    //               continue;
    //            }*/
    //            for ($c=0; $c < $num; $c++) {
    //               $importData_arr[$i][] = $filedata [$c];
    //            }
    //            $i++;
    //         }
    //         fclose($file);
    //         // Insert to MySQL database
    //         foreach($importData_arr as $importData){

    //           $dd[] = $importData;
    //            $categorystore = new Book;
    //         //    if(!empty($importData[1])) {
    //         //    $categorystore->title = trim($importData[1]);
    //         //    }
    //         //    if(!empty($importData[2])) {
    //         //    $categorystore->category_id = $importData[2];
    //         //    }
    //         //    if(!empty($importData[3])) {
    //         //    $categorystore->sku = $importData[3];
    //         //    }
    //         //    if(!empty($importData[5])) {
    //         //    $categorystore->latest = $importData[5];
    //         //    }
    //         //    if(!empty($importData[6])) {
    //         //    $categorystore->featured = $importData[6];
    //         //    }
    //         //    if(!empty($importData[10])) {
    //         //    $categorystore->isbn = $importData[10];
    //         //    }
    //         //    if(!empty($importData[14])) {
    //         //    $categorystore->publish_year = $importData[14];
    //         //    }
    //         //    if(!empty($importData[18])) {
    //         //    $categorystore->author_name = $importData[18];
    //         //    }
    //         //    if(!empty($importData[1])) {
    //         //    $categorystore->product_slug = str_slug($importData[1]);
    //         //    }
    //         //    if(!empty($importData[40])) {
    //         //    $categorystore->description =  $importData[40];
    //         //    }
    //         //    if(!empty($importData[26])) {
    //         //    $categorystore->price =  $importData[26];
    //         //    }
    //         //    if(!empty($importData[24])) {
    //         //    $categorystore->book_cover =  $importData[24];
    //         //    }
    //         //    if(!empty($importData[9])) {
    //         //    $categorystore->book_url =  $importData[9];
    //         //    }
    //         //    if(!empty($importData[15])) {
    //         //    $categorystore->pdf =  $importData[15];
    //         //    }
    //         //    if(!empty($importData[16])) {
    //         //     $categorystore->aboutauthors =  $importData[16];
    //         //     }
    //         //    if(!empty($importData[17])) {
    //         //   $categorystore->toc =  $importData[17];
    //         //    }
    //         //    if(!empty($importData[39])) {
    //         //   $categorystore->seo_keyword =  $importData[39];
    //         //    }
    //         //    if(!empty($importData[41])) {
    //         //   $categorystore->meta_tag_title =  $importData[41];
    //         //    }
    //         //    if(!empty($importData[42])) {
    //         //   $categorystore->meta_tag_description =  $importData[42];
    //         //    }
    //         //    if(!empty($importData[43])) {
    //         //     $categorystore->meta_tag_keyword =  $importData[43];
    //         //    }
    //         //    $categorystore->save();
    //         }
    //         echo "<pre>";print_r($dd);die;

    //         echo "uploaded successfuly";
    //       }else{
    //           echo "Something went wrong";
    //       }

    //     }else{
    //       echo "sdfsd";
    //     }



    //   // Redirect to index
    //  // return redirect()->action('PagesController@index');
    // }

    //XLupload
    public function productUploadFile(Request $request) {
        
       
        $this->validate($request, array(
        'file'      => 'required'
       ));

       if($request->hasFile('file')){
        $extension = File::extension($request->file->getClientOriginalName());
        if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {

         $path = $request->file->getRealPath();
         $data = Excel::load($path, function($reader) {
         })->get();

         //echo "<pre>";print_r($data[0]);die;
        //dd($data);
         if(!empty($data) && $data->count()){

          foreach ($data as $key => $value) {
              //dd($value->author_name);
              
            $checkcount = Book::where('isbn',$value->isbn)->count();
            
            
            
            if($checkcount) {
                $bookstore =  Book::where('isbn',$value->isbn)->first();
            } else {
                $bookstore = new Book;
            }
            
             

           $bookstore->category_id = $value->category_id;
           $bookstore->cat_child = $value->cat_child;
           $bookstore->title = $value->title;
           $bookstore->product_slug = str_slug($value->product_slug);          
           $bookstore->isbn = $value->isbn;   
           $bookstore->author_name = $value->author_name;
           $bookstore->description = $value->description;
           $bookstore->aboutauthors = $value->aboutauthors;
           $bookstore->price = $value->price;
           $bookstore->pdf = $value->pdf;
           $bookstore->book_cover = $value->book_cover;
           $bookstore->publish_year = $value->publish_year;
           $bookstore->publisher = $value->publisher;
           $bookstore->language = $value->language;
           $bookstore->paid = 0;
           $bookstore->latest = $value->latest;
           $bookstore->featured = $value->featured;
           $bookstore->book_url = $value->book_url;
           $bookstore->sku = $value->sku;
           $bookstore->toc = $value->toc;
           $bookstore->seo_keyword = $value->seo_keyword;
           $bookstore->isActive = 1;
           $bookstore->meta_tag_title = $value->meta_tag_title;
           $bookstore->meta_tag_description = $value->meta_tag_description;
           $bookstore->meta_tag_keyword = $value->meta_tag_keyword;
           $bookstore->save();
          }


          Toastr::success('XLSHEET UPLOADED Successfully!','Success');
        return redirect()->route('upload-csv');
         }
        }else {
         Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
         return back();
        }
       }
    }

    public function downloadExcel($type)
    {
        $data = Book::get()->toArray();

        return Excel::create('books', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

}
