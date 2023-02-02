@extends('layouts.backend.app')

@section('title')
Home Program | Dashboard
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
                        EDIT PROGRAM                       
                    </h2>                    
                </div>
                <div class="body">                    
                    <form enctype="multipart/form-data" method="POST" action="{{ route('program.update',['program' => $program->id]) }}">
                        @method('PUT')
                        @csrf                              
                             <div class="row clearfix">

                            <div class="form-group {{ $errors->has('cat_id') ? 'has-error' : '' }} ">
                                
                                <div class="col-md-5">
                                   <select name="cat_id"  class="form-control show-tick" data-live-search="true">
                                    <option value="">Select category</option>
                                    @foreach($category as $val)
                                    <option value="{{ $val->id }}">{{ $val->category_name }}</option>
                                    @endforeach
                                   
                                   </select>
                                   @if($errors->has('cat_id'))
                                   <span class="help-block">
                                    <strong>{{ $errors->first('cat_id') }}</strong>
                                   </span>
                                   @endif
                                                           

                            </div>
                        </div>
                    </div>          
                              <div class="row clearfix">
                            <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('title') ? 'focused error' : '' }}">
                                            <label for="category_name">Title</label>
                                            <input type="text"  name="title" value="{{ $program->title <> null ? $program->title : '' }}" class="form-control" placeholder="Title" />
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
                                            <textarea name="description" rows="4" class="form-control no-resize" id="tinymce">{{ $program->description <> null ? $program->description : '' }}</textarea>
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="banner_image">Image <span style="color:red;font-size:10px;">( 1920 X 530 )</span></label>
                                        <input type="file" name="image">
                                        @if($errors->has('image'))
                                        <label id="image-error" class="error">
                                            {{ $errors->first('image') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    @if($program->image <> null)
                                        <img src="{{ asset($program->image) }}" alt="" width="250" height="100">
                                    @endif
                                </div>                                
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <label for="">IsActive</label>
                                    <div class="switch">
                                        <label><input type="checkbox" name="isActive" value="1" {{ $program->isActive == 1 ? 'checked' : '' }}><span class="lever switch-col-blue"></span></label>
                                    </div>
                                </div>
                            </div>

                                          
                        <a href="{{ route('program.index') }}" class="btn btn-danger m-t-15 waves-effect">BACK</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">UPDATE</button>
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
@endpush
