<?php

namespace App\Http\Controllers\Admin;

use App\contatUs;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = contatUs::latest()->get();
        return view('admin.contact.index', compact('contact'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'image' => 'required|mimes:jpg,jpeg,png',
            'title' => 'required|min:5',
            'description' =>'required'
        ]);

        $hslider = new Testimonial;

        if ($request->hasFile('image')) {
            $vimageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('HomeSlider'), $vimageName);
            $path = "HomeSlider/".$vimageName;
        }

        $hslider->image = $path;
        $hslider->title = $request->title;
        $hslider->description = $request->description;

        if ($request->has('isActive')) {
            $hslider->isActive = true;
        } else {
            $hslider->isActive = false;
        }


        if ($hslider->save()) {
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('testimonial.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('testimonial.index');
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
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //dd($request->all());
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png',
            'title' => 'required|min:5',
            'description' =>'required'
        ]);



        if ($request->hasFile('image')) {
            $vimageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('HomeSlider'), $vimageName);
            $path = "HomeSlider/".$vimageName;
        } else {
            $path = $testimonial->image;
        }

        $testimonial->image = $path;
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;

        if ($request->has('isActive')) {
            $testimonial->isActive = true;
        } else {
            $testimonial->isActive = false;
        }


        if ($testimonial->save()) {
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('testimonial.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('testimonial.index');
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
