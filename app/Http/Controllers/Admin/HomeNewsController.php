<?php

namespace App\Http\Controllers\Admin;

use App\HomeNews;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;


class HomeNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_newss = HomeNews::latest()->get();
        return view('admin.home_news.index', compact('home_newss'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_news.create');
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
          'slider_image' => 'required|mimes:jpg,jpeg,png',
            'title' => 'required|min:5',
			'slug' =>'required',
            'description' =>'required'
        ]);

        $hslider = new HomeNews;
        if ($request->hasFile('slider_image')) {
            $vimageName = time().'.'.$request->slider_image->getClientOriginalExtension();
            $request->slider_image->move(public_path('HomeNews'), $vimageName);
            $path = "HomeNews/".$vimageName;
        }
        $hslider->slider_image = $path;
        $hslider->title = $request->title;
		$hslider->slug = $request->slug;
		$hslider->shortdescription = $request->shortdescription;
        $hslider->description = $request->description;
        if ($request->has('isActive')) {
            $hslider->isActive = true;
        } else {
            $hslider->isActive = false;
        }


        if ($hslider->save()) {
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('home-news.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('home-news.index');
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
    public function edit(HomeNews $home_news)
    {
        return view('admin.home_news.edit', compact('home_news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeNews $home_news)
    {
        //dd($request->all());
        $request->validate([
           'slider_image' => 'mimes:jpg,jpeg,png',
            'title' => 'required|min:2',
			 'description' =>'required',
            'description' =>'required'
        ]);



        if ($request->hasFile('slider_image')) {
            $vimageName = time().'.'.$request->slider_image->getClientOriginalExtension();
            $request->slider_image->move(public_path('HomeNews'), $vimageName);
            $path = "HomeNews/".$vimageName;
        } else {
            $path = $home_news->slider_image;
        }

        $home_news->slider_image = $path;
        $home_news->head_line = $request->head_line;
        $home_news->title = $request->title;
        $home_news->slug = $request->slug;
		 $home_news->shortdescription = $request->shortdescription;
        $home_news->description = $request->description;

        if ($request->has('isActive')) {
            $home_news->isActive = true;
        } else {
            $home_news->isActive = false;
        }


        if ($home_news->save()) {
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('home-news.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('home-news.index');
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
         $delimage = HomeNews::find($id)->delete();
         Toastr::success('Record deleted Successfully!','Success');
         return redirect()->route('home-news.index');
    }

    public function deleteImage($id) {
        $updateData = HomeNews::where('id',$id)->first();
        $updateData->slider_image ='';
        $updateData->save();
        Toastr::success('Image deleted Successfully!','Success');
        return redirect()->route('home-news.edit',['id'=>$id]);
    
    }
}
