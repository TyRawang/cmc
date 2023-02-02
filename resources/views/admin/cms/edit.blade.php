@extends('layouts.backend.app')
@section('title')
EDIT CMS | Dashboard
@endsection
@push('css')
<link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
@section('content')
<div class="container-fluid">
    <!-- Vertical Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        EDIT CMS
                    </h2>
                </div>
                <div class="body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('cms.update',['cms' => $updatedata->id]) }}">
                        @method('PUT')
                        @csrf
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('title') ? 'focused error' : '' }}">
                                            <label for="title">Title</label>
                                        <input type="text" value="{{ $updatedata->title }}"   name="title" class="form-control" placeholder="Enter Title" />
                                        </div>
                                        @if($errors->has('title'))
                                        <label for="" class="error">
                                            {{ $errors->first('title') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                       <div {{ $errors->has('description') ? 'focused error' : '' }}">
                                            <label for="banner_text">Description</label>
                                            <textarea name="description" rows="4" class="form-control no-resize" id="tinymce">{{ $updatedata->description }}</textarea>
                                        </div>
                                        @if($errors->has('description'))
                                        <label for="" class="error">
                                            {{ $errors->first('description') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('meta_title') ? 'focused error' : '' }}">
                                            <label for="title">Meta Title</label>
                                            <input type="text" value="{{ $updatedata->meta_title }}"  name="meta_title" class="form-control" placeholder="Enter Meta Title" />
                                        </div>
                                        @if($errors->has('meta_title'))
                                        <label for="" class="error">
                                            {{ $errors->first('meta_title') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('meta_description') ? 'focused error' : '' }}">
                                            <label for="title">Meta Description</label>
                                            <input type="text" value="{{ $updatedata->meta_description }}" name="meta_description" placeholder="Enter Meta description" class="form-control" />
                                        </div>
                                        @if($errors->has('meta_title'))
                                        <label for="" class="error">
                                            {{ $errors->first('meta_title') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('meta_keyword') ? 'focused error' : '' }}">
                                            <label for="title">Meta Keyword</label>
                                            <input type="text" value="{{ $updatedata->meta_keyword  }}"  name="meta_keyword" class="form-control" placeholder="Enter Meta Keyword" />
                                        </div>
                                        @if($errors->has('meta_keyword'))
                                        <label for="" class="error">
                                            {{ $errors->first('meta_keyword') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pdf">Image</label>
                                        <input type="file" name="image" >
                                        @if($errors->has('image'))
                                        <label id="pdf-error" class="error">
                                            {{ $errors->first('image') }}
                                        </label>
                                        @endif
                                         @if($updatedata->image)
                                        <img src="{{ asset($updatedata->image) }}" alt="" width="100" height="50">
                                        <a href="{{ route('delete-cmsimage',['cmsdelete' => $updatedata->id]) }}" class="btn btn-danger btn-xs"  Onclick="return ConfirmDelete();"><span class="glyphicon glyphicon-remove"></span></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="book cover">Banner</label>
                                        <input type="file" name="banner" >
                                        @if($errors->has('banner'))
                                        <label id="book_cover-error" class="error">
                                            {{ $errors->first('banner') }}
                                        </label>
                                        @endif
                                         @if($updatedata->banner)
                                        <img src="{{ asset($updatedata->banner) }}" alt="" width="100" height="50">
                                        <a href="{{ route('delete-cms-banner-image',['bannerdelete' => $updatedata->id]) }}" class="btn btn-danger btn-xs"  Onclick="return ConfirmDelete();"><span class="glyphicon glyphicon-remove"></span></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <label for="">IsActive</label>
                                    <div class="switch">
                                        <label><input type="checkbox" name="isActive" value="1" {{ $updatedata->isActive == 1 ? 'checked' : '' }}><span class="lever switch-col-blue"></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <label for="">Display on header</label>
                                    <div class="switch">
                                        <label><input type="checkbox" name="display_on_header" value="1" {{ $updatedata->display_on_header == 1 ? 'checked' : '' }}><span class="lever switch-col-blue"></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <label for="">Display on footer</label>
                                    <div class="switch">
                                        <label><input type="checkbox" name="display_on_footer" value="1" {{ $updatedata->display_on_footer == 1 ? 'checked' : '' }}><span class="lever switch-col-blue"></span></label>
                                    </div>
                                </div>
                            </div>
                        <a href="{{ route('cms.index') }}" class="btn btn-danger m-t-15 waves-effect">BACK</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Vertical Layout | With Floating Label -->
</div>
@endsection
@push('js')
<script src="{{ asset('assets/backend/plugins/tinymce/tinymce.js') }}"></script>
<script>
    $(function () {
    //TinyMCE
    tinymce.init({
        selector: "textarea#tinymce",
        theme: "modern",
        height: 150,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
        toolbar2: 'forecolor backcolor',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = "{{ asset('assets/backend/plugins/tinymce') }}";
});
</script>
<script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script>
@endpush