<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\User;
use App\Payment;
use App\ConfirmPayment;
use App\UserSearchJob;
use DB;
use Brian2694\Toastr\Facades\Toastr;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $register = User::where('role_id', NULL)->latest()->get();
        return view('admin.register.index', compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $category = Category::latest()->get();
        $categories = Category::where('isActive',1)->get();

        return view('admin.category.create', compact('categories'));

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
          'category_name' =>'required|min:2'
        ]);
        $status = $request->status;
        $storeCategory = new Category;
        $storeCategory->category_name = $request->category_name;
        $storeCategory->p_id = $request->p_id;
        $title = str_slug($request->category_name, '-');
        $storeCategory->slug = $title;
        if($request->has('isActive')) {
            $storeCategory->isActive = true;
        } else {
            $storeCategory->isActive = false;
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
    public function edit(Category $category,$id)
    {
         $registerdata = User::find($id);
         $payment = ConfirmPayment::where('user_id',$id)->first();
         $amountid = $payment->amount;
         $paydata = Payment::find($amountid);
         $searchjob = DB::table('user_search_jobs')->where('user_id',$id)->first();
         return view('admin.register.edit',compact('registerdata','paydata','searchjob'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $register)
    {

        if ($request->has('isActive')) {
            $register->isActive = true;
        } else {
            $register->isActive = false;
        }
        if ($register->save()) {
            Toastr::success('Record updated Successfully!','Success');
            return redirect()->route('register.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('register.index');
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
        //
    }
}
