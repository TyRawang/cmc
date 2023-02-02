<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function editPage($page_id)
    {
    	$pageDetails = Page::where('id', $page_id)->first();
    	return view('admin.pages.edit', compact('pageDetails'));
    }

    public function updatePage(Request $request, $page_id)
    {
    	$request->validate([
    		'page_image' => 'mimes:jpg,jpeg,png',
            'page_title' => 'required|min:3',
            'mess' => 'required|min:3',
    		'page_description' => 'required|min:10'
    	]);

    	$page_detail = Page::find($page_id);
        $page_detail->page_title = $request->page_title;
        $page_detail->mess = $request->mess;
    	$page_detail->page_description = $request->page_description;

    	if ($request->hasFile('page_image')) {
            $vimageName = time().'.'.$request->page_image->getClientOriginalExtension();
            $request->page_image->move(public_path('PageImage'), $vimageName);
            $path = "PageImage/".$vimageName;
        } else {
            $path = "PageImage/default_banner.jpg";
        }

        $page_detail->page_image = $path;

        if ($page_detail->save()) {
        	Toastr::success('Record updated Successfully!','Success');
        	return redirect()->route('editPage',$page_id);
        } else {
        	Toastr::success('Error in Updation!','Error');
        	return redirect()->route('editPage',$page_id);
        }
    }
}
