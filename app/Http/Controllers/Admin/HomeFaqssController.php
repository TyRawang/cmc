<?php

namespace App\Http\Controllers\Admin;

use App\HomeFaqss;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;


class HomeFaqssController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_faqsss = HomeFaqss::latest()->get();
        return view('admin.home_faqss.index', compact('home_faqsss'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_faqss.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            //'slider_image' => 'required|mimes:jpg,jpeg,png',
            'title' => 'required|min:5',
            'description' =>'required'
        ]);

        $hslider = new HomeFaqss;
        if ($request->hasFile('slider_image')) {
            $vimageName = time().'.'.$request->slider_image->getClientOriginalExtension();
            $request->slider_image->move(public_path('HomeFaqss'), $vimageName);
            $path = "HomeFaqss/".$vimageName;
        }
       // $hslider->slider_image = $path;
        $hslider->title = $request->title;
        $hslider->description = $request->description;
        if ($request->has('isActive')) {
            $hslider->isActive = true;
        } else {
            $hslider->isActive = false;
        }


        if ($hslider->save()) {
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('home-faqss.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('home-faqss.index');
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
    public function edit(HomeFaqss $home_faqss)
    {
        return view('admin.home_faqss.edit', compact('home_faqss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeFaqss $home_faqss)
    {
        //dd($request->all());
        $request->validate([
            //'slider_image' => 'mimes:jpg,jpeg,png',
            'title' => 'required|min:2',
            'description' =>'required'
        ]);



        if ($request->hasFile('slider_image')) {
            $vimageName = time().'.'.$request->slider_image->getClientOriginalExtension();
            $request->slider_image->move(public_path('HomeFaqss'), $vimageName);
            $path = "HomeFaqss/".$vimageName;
        } else {
            $path = $home_faqss->slider_image;
        }

       // $home_faqss->slider_image = $path;
        $home_faqss->head_line = $request->head_line;
		$home_faqss->cattype = $request->cattype;
        $home_faqss->title = $request->title;
        $home_faqss->description = $request->description;

        if ($request->has('isActive')) {
            $home_faqss->isActive = true;
        } else {
            $home_faqss->isActive = false;
        }


        if ($home_faqss->save()) {
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('home-faqss.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('home-faqss.index');
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
         $delimage = HomeFaqss::find($id)->delete();
         Toastr::success('Record deleted Successfully!','Success');
         return redirect()->route('home-faqss.index');
    }

    public function deleteImage($id) {
        $updateData = HomeFaqss::where('id',$id)->first();
        $updateData->slider_image ='';
        $updateData->save();
        Toastr::success('Image deleted Successfully!','Success');
        return redirect()->route('home-faqss.edit',['id'=>$id]);
    
    }
}
