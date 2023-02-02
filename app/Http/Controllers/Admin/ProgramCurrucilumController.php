<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Program;
use App\Category;
use Brian2694\Toastr\Facades\Toastr;

class ProgramCurrucilumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $program = Program::latest()->get();
        return view('admin.program&curriculam.index', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category = Category::latest()->get(); 
        return view('admin.program&curriculam.create',compact('category'));
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
            'image' => 'required|mimes:jpg,jpeg,png',
            'cat_id' => 'required',
            'title' => 'required|min:2',
            'description' =>'required',
        ]);
         $hslider = new Program;
        if ($request->hasFile('image')) {
            $vimageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('HomeSlider'), $vimageName);
            $path = "HomeSlider/".$vimageName;
        }

            $hslider->image = $path;
            $hslider->cat_id = $request->cat_id;
            $hslider->title = $request->title;
            $hslider->description = $request->description;

        if ($request->has('isActive')) {
            $hslider->isActive = true;
        } else {
            $hslider->isActive = false;
        }
        if ($hslider->save()) {
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('program.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('program.index');
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
     public function edit(Program $program)
    {
        $category = Category::latest()->get();

        return view('admin.program&curriculam.edit', compact('program','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Program $program)
    {
        //dd($request->all());
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png',
            'cat_id' => 'required',
            'title' => 'required|min:5',
            'description' =>'required'
        ]);



        if ($request->hasFile('image')) {
            $vimageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('HomeSlider'), $vimageName);
            $path = "HomeSlider/".$vimageName;
        } else {
            $path = $program->image;
        }

        $program->image = $path;
        $program->cat_id = $request->cat_id;
        $program->title = $request->title;
        $program->description = $request->description;

        if ($request->has('isActive')) {
            $program->isActive = true;
        } else {
            $program->isActive = false;
        }


        if ($program->save()) {
            Toastr::success('Record updated Successfully!','Success',['positionClass'=> 'toast-top-center']);
            return redirect()->route('program.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('program.index');
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
