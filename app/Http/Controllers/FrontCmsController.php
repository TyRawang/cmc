<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cms;

class FrontCmsController extends Controller
{
    public function aboutUs(Request $request)
    {
        $slug = $request->slug;
        $aboutus = Cms::where('slug',$slug)->first(); 
        return view('fronts.about-us',compact('aboutus'));
    }

    public function privacyPolicy(Request $request)
    {
        $slug = $request->slug;
        $getslug = Cms::where('slug',$slug)->first();
        return view('fronts.privacy-policy',compact('getslug'));
    }

    public function termsCondition(Request $request)
    {
        $slug = $request->slug;
        $getsterms = Cms::where('slug',$slug)->first();
        return view('fronts.terms-and-condition',compact('getsterms'));
    }
}
