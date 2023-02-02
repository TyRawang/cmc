<?php

namespace App\Http\Controllers\Admin;

use App\HomeClients;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class HomeClientsController extends Controller
{	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_clientss = HomeClients::latest()->get();
        return view('admin.home_clients.index', compact('home_clientss'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home_clients.create');
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

        $hslider = new HomeClients;
        if ($request->hasFile('slider_image')) {
            $vimageName = time().'.'.$request->slider_image->getClientOriginalExtension();
            $request->slider_image->move(public_path('HomeClients'), $vimageName);
            $path = "HomeClients/".$vimageName;
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
            return redirect()->route('home-clients.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('home-clients.index');
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
    public function edit(Request $request,$id)
    {
		$home_clients = HomeClients::where('id',$id)->first();
        return view('admin.home_clients.edit', compact('home_clients'));
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
		
		
        //dd($request->all());
        $request->validate([
            'slider_image' => 'mimes:jpg,jpeg,png',
            'title' => 'required|min:2',
            'description' =>'required'
        ]);

         $home_clients = HomeClients::where('id',$id)->first();

        if ($request->hasFile('slider_image')) {
            $vimageName = time().'.'.$request->slider_image->getClientOriginalExtension();
            $request->slider_image->move(public_path('HomeClients'), $vimageName);
            $path = "HomeClients/".$vimageName;
        } else {
            $path = $home_clients->slider_image;
        }

        $home_clients->slider_image = $path;
        $home_clients->head_line = $request->head_line;
        $home_clients->title = $request->title;
        $home_clients->description = $request->description;

        if ($request->has('isActive')) {
            $home_clients->isActive = true;
        } else {
            $home_clients->isActive = false;
        }


        if ($home_clients->save()) {
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('home-clients.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('home-clients.index');
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
         $delimage = HomeClients::find($id)->delete();
         Toastr::success('Record deleted Successfully!','Success');
         return redirect()->route('home-clients.index');
    }

    public function deleteImage($id) {
        $updateData = HomeClients::where('id',$id)->first();
        $updateData->slider_image ='';
        $updateData->save();
        Toastr::success('Image deleted Successfully!','Success');
        return redirect()->route('home-clients.edit',['id'=>$id]);
    
    }
}
