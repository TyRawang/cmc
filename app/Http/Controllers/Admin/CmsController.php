<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Institute;
use App\Cms;
use Brian2694\Toastr\Facades\Toastr;
use Image;
class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = Cms::latest()->get();
        return view('admin.cms.index',compact('title'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cms.create');
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
            'image' =>'image|mimes:jpeg,png,jpg,gif,svg',
            'banner' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'meta_title' =>'required|min:2',
            'meta_description' =>'required|min:2',
          ]);
          $storeCms = new Cms;
          $storeCms->title = $request->title;
          $storeCms->description = $request->description;
          $storeCms->meta_title = $request->meta_title;
          $storeCms->meta_description = $request->meta_description;
          $storeCms->meta_keyword = $request->meta_keyword;
          $title = str_slug($request->title, '-');
          $storeCms->slug = $title;
          if($request->has('isActive')) {
              $storeCms->isActive = true;
          } else {
              $storeCms->isActive = false;
          }
          if($request->has('display_on_header')) {
            $storeCms->display_on_header = true;
        } else {
            $storeCms->display_on_header = false;
        }
        if($request->has('display_on_footer')) {
            $storeCms->display_on_footer = true;
        } else {
            $storeCms->display_on_footer = false;
        }
          if ($request->file('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $Image = rand(11111,99999).'_'.time().'.'.$extension;
            $imageRealPath  =   $file->getRealPath();
            $thumbName      =   'thumb_'. $Image;
            $img = Image::make($imageRealPath); // use this if you want facade style code
            $thumb_width = 282;
            list($width,$height) = getimagesize($imageRealPath);
            $thumb_height = ($thumb_width/$width) * $height;
            $img->resize($thumb_width,$thumb_height);
            $img->save('cms' . '/'. $thumbName);
            $file->move('cms/', $Image);
            $storeCms->image ="/cms/".$thumbName;
          }
          if ($request->hasFile('banner')) {
                $vimageName = time().'.'.$request->banner->getClientOriginalExtension();
                $request->banner->move(public_path('cmsbanner'), $vimageName);
                $path = "cmsbanner/".$vimageName;
                $storeCms->banner = $path;
        }
          if($storeCms->save()) {
              Toastr::success('Record created Successfully!','Success');
              return redirect()->route('cms.index');
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
    public function edit($id)
    {
        $updatedata = Cms::find($id);
         return view('admin.cms.edit',compact('updatedata'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' =>'required|min:2',
            'description' =>'required|min:2',
            'image' =>'image|mimes:jpeg,png,jpg,gif,svg',
            'banner' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'meta_title' =>'required|min:2',
            'meta_description' =>'required|min:2',
          ]);
          $storeCms = Cms::find($id);
          $storeCms->title = $request->title;
          $storeCms->description = $request->description;
          $storeCms->meta_title = $request->meta_title;
          $storeCms->meta_description = $request->meta_description;
          $title = str_slug($request->title, '-');
          $storeCms->slug = $title;
          if($request->has('isActive')) {
              $storeCms->isActive = true;
          } else {
              $storeCms->isActive = false;
          }
           if($request->has('display_on_header')) {
            $storeCms->display_on_header = true;
            } else {
                $storeCms->display_on_header = false;
            }
            if($request->has('display_on_footer')) {
                $storeCms->display_on_footer = true;
                } else {
                    $storeCms->display_on_footer = false;
                }
          if ($request->file('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $Image = rand(11111,99999).'_'.time().'.'.$extension;
            $imageRealPath  =   $file->getRealPath();
            $thumbName      =   'thumb_'. $Image;
            $img = Image::make($imageRealPath); // use this if you want facade style code
            $thumb_width = 282;
            list($width,$height) = getimagesize($imageRealPath);
            $thumb_height = ($thumb_width/$width) * $height;
            $img->resize($thumb_width,$thumb_height);
            $img->save('cms' . '/'. $thumbName);
            $file->move('cms/', $Image);
            $storeCms->image ="/cms/".$thumbName;
          }
          if ($request->hasFile('banner')) {
                $vimageName = time().'.'.$request->banner->getClientOriginalExtension();
                $request->banner->move(public_path('cmsbanner'), $vimageName);
                $path = "cmsbanner/".$vimageName;
                $storeCms->banner = $path;
        }
          if($storeCms->save()) {
              Toastr::success('Record updated Successfully!','Success');
              return redirect()->route('cms.index');
          } else {
              Toastr::error('Error in Insertion!','Error');
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
        $deleteid = Cms::find($id)->delete();
        Toastr::success('Record deleted Successfully!','Success');
        return redirect()->route('cms.index');
    }

    public function deleteCmsimage(Request $request)
    {
        $id = $request->id;
        $updateData = Cms::where('id',$id)->first();
        $updateData->image ='';
        $updateData->save();
        Toastr::success('Image deleted Successfully!','Success');
        return redirect()->route('cms.edit',['id'=>$id]);
    }

    public function deleteCmsBanner(Request $request)
    {
        $id = $request->id;
        $updateData = Cms::where('id',$id)->first();
        $updateData->banner ='';
        $updateData->save();
        Toastr::success('Image deleted Successfully!','Success');
        return redirect()->route('cms.edit',['id'=>$id]);
    }
}