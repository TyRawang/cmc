<?php
namespace App\Http\Controllers;
use Email;
use App\User;
use validate;
use App\Category;
use App\ContatUs;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\paymentstatus;
use App\Mail\ContactEnquiry;
use App\AboutUs;
use Mail;
use DB;
use App\HomeSlider;
use App\HomeClients;
use App\HomeFaqss;
use App\HomeNews;
use App\RelatedBook;
use App\Helpers\MailFunctions;
// use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('paymentstatus');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $banner = HomeSlider::where('isActive',1)->get();
		$category = Category::where('isActive',1)->get();
        $featured = Book::where('featured',1)->where('isActive',1)->get();
        $latest = Book::where('latest',1)->where('isActive',1)->get();
        $latest_news = HomeNews::where('isActive',1)->orderBy('created_at', 'DESC')->take(4)->get();
        $home_testimonial = HomeClients::where('isActive',1)->orderBy('created_at', 'DESC')->take(6)->get();

        return view('fronts.index',compact('banner','featured','latest','category', 'latest_news', 'home_testimonial'));
    }
	
	   public function aboutus()
    {      
      
        $featured = Book::where('featured',1)->where('isActive',1)->get();
        $latest = Book::where('latest',1)->where('isActive',1)->get();  	   
	    return view('fronts.aboutus',compact('featured','latest'));
    }
	
	
	    public function contactus()
    {
       
        return view('fronts.contactus');
    }
	
    public function Testimonials()
    {
       
	    $testimonials = HomeClients::where('isActive',1)->get();
	   return view('fronts.testimonials',compact('testimonials'));
	   
        
    }
	
	
		    public function Faqs()
    {
       
	     $faqs = HomeFaqss::where('isActive',1)->Orderby('cattype','ASC')->get();
	   return view('fronts.faqs',compact('faqs'));
       
    
       
    }
	
	
   public function Blogs()
    {
       
	    $news = HomeNews::where('isActive',1)->get();
	   return view('fronts.blogs',compact('news'));
	}
     public function BlogDetail(Request $request)
    {
         $slug = $request->slug;

        $newsdetail = HomeNews::where('isActive',1)->where('slug',$slug)->first();
       
       return view('fronts.blog-detail',compact('newsdetail'));
    }
	
	
	
	    public function Associatespartners()
    {
       
	    $associatespartners = HomeClients::where('isActive',1)->get();
	   
	   return view('fronts.associatespartners',compact('associatespartners'));
	   
        
    }
	
	
	
	
	
	
	
	
		    public function Solutions()
    {
       
        return view('fronts.solutions');
    }
	
	
	
	
		    public function Freequote()
    {
       
        return view('fronts.freequote');
    }

    public function WeightCalculator()
    {
        return view('fronts.weight-calculator');
    }
	
	
	
	

    public function listCategory(Request $request)
    {
        $slug = $request->slug;
        $subslug = $request->slug2;
        $book =array();
        $categoryname = array();
        if($subslug) {
         $categoryid = Category::where('slug',$subslug)->where('isActive',1)->first();
        } else {
         $categoryid = Category::where('slug',$slug)->where('isActive',1)->first();
        }
         $catid =  $categoryid->id;
         $categoryname = $categoryid->category_name;
    		 $subcatname = $categoryid->subcatname;
    		 $image = $categoryid->image;
         $description = $categoryid->description;
    		 $shortdescription = $categoryid->shortdescription;
         $parent_category = ($categoryid->parent) ?$categoryid->parent->category_name :  false;
    		 $id = $categoryid->id;
		 
         if($subslug) {
          $book = Book::where('cat_child',$catid)->where('isActive',1)->paginate(10);      
         } else {
          $book = Book::where('category_id',$catid)->where('isActive',1)->paginate(10);
         }
		
		    $categories = Category::where('p_id',$catid)->Orderby('order_by_cat','ASC')->where('p_id','!=',NULL)->get();
		 
        
         return view('fronts.list',compact('book','categoryname','subcatname','description','shortdescription','image','catid','categories', 'parent_category'));
    }
    public function details(Request $request)
    {
          $slug = $request->slug1;
          $book = Book::where('product_slug',$slug)->where('isActive',1)->first();
          $id = $book->id;
         $reltativebook = RelatedBook::where('book_id',$id)->get();
          if($reltativebook!='') {
            $relid = array();
            $similarbook = array();
            foreach($reltativebook as $val) {
                $relid[] = $val->related_book_id;
            }
           $similarbook = Book::whereIn('id',$relid)->where('id','<>',$id)->where('isActive',1)->get();
           } 
        //  $categoryname = $categoryid->category_name;
        // $book = Book::whereIn('category_id',$categoryid)->where('isActive',1)->get();
        return view('fronts.details',compact('book','similarbook'));
    }

     public function searchResult(Request $request)
     {
        $search = $request->search; 
        $featured = Book::where('title', 'LIKE', '%'. $search. '%')->orwhere('author_name', 'LIKE', '%'. $search. '%')->orwhere('isbn', 'LIKE', '%'. $search. '%')->get();
        return view('fronts.search',compact('featured'));
      }

      function sitemap(Request $request){
        $input = $request->all();
        return view('fronts.site_map');

      }
      // function services(Request $request){
      //   $input = $request->all();
      //   return view('fronts.services');
      // }

      // function moving_services(Request $request){
      //   $input = $request->all();
      //   return view('fronts.moving-services');
      // } 

      // function packing_services(Request $request){
      //   $input = $request->all();
      //   return view('fronts.packing-services');
      // }

      // function storage_services(Request $request){
      //   $input = $request->all();
      //   return view('fronts.storage-services');
      // }


    function contact_save(Request $request){
        $input  = $request->all();
        // $obj = new Inquiry();
        // $response = $obj->addNew($input);

        $json = [];
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        );

        $newnames = array();
        $messages = array();
        $v = \Validator::make($input, $rules, $messages);
        $v->setAttributeNames($newnames);
        if ($v->passes()) {
            $this->sendmail($input);
            $this->sendmailadmin($input);
            $message = "Saved successfully";
            return redirect()->back()->with('success_message', $message);
        } else {
            return redirect()->back()->withErrors($v)->withInput();
        }
        
        
    }

    function free_quote_send(Request $request){
        $input  = $request->all();
        $json = [];
        $rules = array(
            'move_date' => 'required',
            'property_type' => 'required',
            'propery_size' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'storage' => 'required',
            'transport' => 'required',
            
        );

        $newnames = array();
        $messages = array();
        $v = \Validator::make($input, $rules, $messages);
        $v->setAttributeNames($newnames);
        if ($v->passes()) {
            $this->sendmail($input);
            $this->sendfreequotemailadmin($input);
            // $this->sendmailadmin($input);

            $message = "Saved successfully";
            return redirect()->back()->with('quote_success_message', $message);
        } else {
            return redirect()->back()->withErrors($v)->withInput();
        }
        return json_encode($json);
    }

    public function sendmail($input){
        $input = \Request::all();
        $mailObj = new MailFunctions();
        $mailObj->auto = true;
        $mailObj->subject = sprintf("Contact us");
        $mailObj->toEmail = $input['email'];
        $html = $mailObj->sendmail("emails.thanks_mail_for_contactus", ['title' => "Contact us", 'input' => $input]);
    }


    public function sendmailadmin($input) {
        $input = \Request::all();
        $mailObj = new MailFunctions();
        $mailObj->auto = true;
        $mailObj->subject = sprintf("Contact us");
        $mailObj->toEmail = "info@cargomoverscanada.com";
        $html = $mailObj->sendmail("emails.contactus_for_admin", ['title' => "Contact us", 'input' => $input]);
    
    }

    public function sendfreequotemailadmin($input) {
        $input = \Request::all();
        $mailObj = new MailFunctions();
        $mailObj->auto = true;  
        $mailObj->subject = sprintf("Get Free Quote");
        $mailObj->toEmail = "info@cargomoverscanada.com";
        $html = $mailObj->sendmail("emails.get_free_quote_for_admin", ['title' => "Get Free Quote", 'input' => $input]);
    }
}
