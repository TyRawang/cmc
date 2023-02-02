@extends('layouts.backend.app')

@section('title')
{{ strtoupper($pageDetails->page_title) }} | Dashboard
@endsection

@push('css')

@endpush

@section('content')
<div class="container-fluid">
    <!-- Vertical Layout | With Floating Label -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        EDIT {{ strtoupper($pageDetails->page_title) }}
                    </h2>
                </div>
                <div class="body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('updatePage',$pageDetails->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="page_image">Image</label>
                                    <input type="file" name="page_image">
                                    @if($errors->has('page_image'))
                                    <label id="page_image-error" class="error">
                                        {{ $errors->first('page_image') }}
                                    </label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <img src="{{ asset($pageDetails->page_image) }}" alt="" width="100" height="50">
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line {{ $errors->has('page_title') ? 'focused error' : '' }}">
                                        <label for="page_title">Drive Leader</label>
                                        <input type="text" value="{{ $pageDetails->page_title }}" name="page_title" class="form-control" placeholder="Drive Leader" />
                                    </div>
                                    @if($errors->has('page_title'))
                                    <label id="page_title-error" class="error">
                                        {{ $errors->first('page_title') }}
                                    </label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line {{ $errors->has('page_title') ? 'focused error' : '' }}">
                                        <label for="page_title">Mess</label>
                                        <input type="text" value="{{ $pageDetails->mess }}" name="mess" class="form-control" placeholder="Mess" />
                                    </div>
                                    @if($errors->has('mess'))
                                    <label id="page_title-error" class="error">
                                        {{ $errors->first('mess') }}
                                    </label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line {{ $errors->has('page_description') ? 'focused error' : '' }}">
                                        <label for="banner_text">Story</label>
                                        <textarea name="page_description" rows="4" class="form-control no-resize" id="page_description">{{ $pageDetails->page_description }}</textarea>
                                    </div>
                                    @if($errors->has('page_description'))
                                    <label for="" class="error">
                                        {{ $errors->first('page_description') }}
                                    </label>
                                    @endif
                                </div>
                            </div>
                        </div>
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
