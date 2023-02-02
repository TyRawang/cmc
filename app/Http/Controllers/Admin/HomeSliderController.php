<?php

namespace App\Http\Controllers\Admin;

use App\HomeSlider;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_sliders = HomeSlider::latest()->get();
        return view('admin.home_slider.index', compact('home_sliders'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_slider.create');
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
            'description' =>'required'
        ]);

        $hslider = new HomeSlider;
        if ($request->hasFile('slider_image')) {
            $vimageName = time().'.'.$request->slider_image->getClientOriginalExtension();
            $request->slider_image->move(public_path('HomeSlider'), $vimageName);
            $path = "HomeSlider/".$vimageName;
        }
        $hslider->slider_image = $path;
        $hslider->title = $request->title;
        $hslider->description = $request->description;
        if ($request->has('isActive')) {
            $hslider->isActive = true;
        } else {
            $hslider->isActive = false;
        }


        if ($hslider->save()) {
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('home-slider.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('home-slider.index');
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
    public function edit(HomeSlider $home_slider)
    {
        return view('admin.home_slider.edit', compact('home_slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeSlider $home_slider)
    {
        //dd($request->all());
        $request->validate([
            'slider_image' => 'mimes:jpg,jpeg,png',
            'title' => 'required|min:2',
            'description' =>'required'
        ]);



        if ($request->hasFile('slider_image')) {
            $vimageName = time().'.'.$request->slider_image->getClientOriginalExtension();
            $request->slider_image->move(public_path('HomeSlider'), $vimageName);
            $path = "HomeSlider/".$vimageName;
        } else {
            $path = $home_slider->slider_image;
        }

        $home_slider->slider_image = $path;
        $home_slider->head_line = $request->head_line;
        $home_slider->title = $request->title;
        $home_slider->description = $request->description;

        if ($request->has('isActive')) {
            $home_slider->isActive = true;
        } else {
            $home_slider->isActive = false;
        }


        if ($home_slider->save()) {
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('home-slider.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('home-slider.index');
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
         $delimage = HomeSlider::find($id)->delete();
         Toastr::success('Record deleted Successfully!','Success');
         return redirect()->route('home-slider.index');
    }

    public function deleteImage($id) {
        $updateData = HomeSlider::where('id',$id)->first();
        $updateData->slider_image ='';
        $updateData->save();
        Toastr::success('Image deleted Successfully!','Success');
        return redirect()->route('home-slider.edit',['id'=>$id]);
    
    }
}
