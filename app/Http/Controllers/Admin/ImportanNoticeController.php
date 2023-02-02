<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ImportantNotice;
use Brian2694\Toastr\Facades\Toastr;
class ImportanNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $importantnotice = ImportantNotice::latest()->get();
        return view('admin.importantnotice.index', compact('importantnotice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.importantnotice.create');

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
          'title' =>'required|min:2',
          'description' =>'required|min:2',
        ]);
        $status = $request->status;
        $storeImportant = new ImportantNotice;
        $storeImportant->title = $request->title;
        $storeImportant->description = $request->description;
        $title = str_slug($request->title, '-');
        $storeImportant->slug = $title;
        if($request->has('isActive')) {
            $storeImportant->isActive = true;
        } else {
            $storeImportant->isActive = false;
        }
        if($storeImportant->save()) {
            Toastr::success('Record created Successfully!','Success');
            return redirect()->route('important-notice.index');
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
    public function edit(ImportantNotice $important_notice)
    {
        return view('admin.importantnotice.edit',compact('important_notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImportantNotice $important_notice)
    {

        $request->validate([
            'title' => 'required|min:2',
            'description' => 'required|min:2'
        ]);

        $important_notice->title = $request->title;
        $important_notice->description = $request->description;
        $title = str_slug($request->title, '-');
        $important_notice->slug = $title;
        if ($request->has('isActive')) {
            $important_notice->isActive = true;
        } else {
            $important_notice->isActive = false;
        }


        if ($important_notice->save()) {
            Toastr::success('Record updated Successfully!','Success');
            return redirect()->route('important-notice.index');
        } else {
            Toastr::error('Error in Insertion!','Error');
            return redirect()->route('important-notice.index');
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
