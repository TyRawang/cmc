@extends('layouts.backend.app')
@section('title')
ADD BOOK | Dashboard
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
                        ADD BOOK
                    </h2>
                </div>
                <div class="body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('books.store') }}">
                        @csrf
                        
                           <div class="row clearfix">
                            <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }} ">
                                <div class="col-md-10">
                                <select name="category_id[]"   class="form-control show-tick" data-live-search="true" multiple>
                                    <option value="">Select category</option>
                                    @foreach($category as $val)
                                    <option value="{{ $val->id }}">{{ $val->category_name }}</option>
                                    @foreach($subcategory as $child)
                                    @if($val->id==$child->p_id)
                                    <option value="{{ $child->id }}">&nbsp&nbsp-->{{ $child->category_name }}</option>
                                    @endif
                                    @endforeach
                                    @endforeach
                                </select>
                                @if($errors->has('category_id'))
                                <label for="" class="error">
                                    {{ $errors->first('category_id') }}
                                </label>
                                @endif
                            </div>
                        </div>
                    </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('title') ? 'focused error' : '' }}">
                                            <label for="title">Title</label>
                                            <input type="text" value=""   name="title" class="form-control" placeholder="Enter Title" />
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
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('isbn') ? 'focused error' : '' }}">
                                            <label for="isbn">Book ISBN</label>
                                            <input type="text" value=""   name="isbn" class="form-control" placeholder="Book ISBN" />
                                        </div>
                                        @if($errors->has('isbn'))
                                        <label for="" class="error">
                                            {{ $errors->first('isbn') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('author_name') ? 'focused error' : '' }}">
                                            <label for="author_name">Author</label>
                                            <input type="text" value=""   name="author_name" class="form-control" placeholder="Author name" />
                                        </div>
                                        @if($errors->has('author_name'))
                                        <label for="" class="error">
                                            {{ $errors->first('author_name') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label for="bookurl">Book Url</label>
                                            <input type="text" value="" name="book_url" class="form-control" placeholder="Enter Book Url" />
                                        </div>
                                        @if($errors->has('book_url'))
                                        <label for="" class="error">
                                            {{ $errors->first('book_url') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('price') ? 'focused error' : '' }}">
                                            <label for="price">Price</label>
                                            <input type="text" value=""   name="price" class="form-control" placeholder="Price" />
                                        </div>
                                        @if($errors->has('price'))
                                        <label for="" class="error">
                                            {{ $errors->first('price') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('publish_year') ? 'focused error' : '' }}">
                                            <label for="publish_year">Publish Year</label>
                                            <input type="text" value=""   name="publish_year" class="form-control" placeholder="Publish Year" />
                                        </div>
                                        @if($errors->has('publish_year'))
                                        <label for="" class="error">
                                            {{ $errors->first('publish_year') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('publisher') ? 'focused error' : '' }}">
                                            <label for="publisher">Publisher</label>
                                            <input type="text" value="" required  name="publisher" class="form-control" placeholder="Publisher" />
                                        </div>
                                        @if($errors->has('publisher'))
                                        <label for="" class="error">
                                            {{ $errors->first('publisher') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('language') ? 'focused error' : '' }}">
                                            <label for="language">Language</label>
                                            <input type="text" value=""   name="language" class="form-control" placeholder="Language" />
                                        </div>
                                        @if($errors->has('language'))
                                        <label for="" class="error">
                                            {{ $errors->first('language') }}
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
                                            <textarea name="description"   rows="4" class="form-control no-resize" id="tinymce"></textarea>
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
                                        <div class="form-line {{ $errors->has('meta_tag_title') ? 'focused error' : '' }}">
                                            <label for="publish_year">Meta Tag Title</label>
                                            <input type="text" value="" name="meta_tag_title" class="form-control" placeholder="Meta Tag Title" />
                                        </div>
                                        @if($errors->has('meta_tag_title'))
                                        <label for="" class="error">
                                            {{ $errors->first('meta_tag_title') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('meta_tag_description') ? 'focused error' : '' }}">
                                            <label for="meta_tag_description">Meta Tag Description</label>
                                            <input type="text" value="" name="meta_tag_description" class="form-control" placeholder="Meta Tag Description" />
                                        </div>
                                        @if($errors->has('meta_tag_description'))
                                        <label for="" class="error">
                                            {{ $errors->first('meta_tag_description') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('meta_tag_keyword') ? 'focused error' : '' }}">
                                            <label for="meta_tag_keyword">Meta Tag Keyword</label>
                                            <input type="text" value="" name="meta_tag_keyword" class="form-control" placeholder="Meta Tag Keyword" />
                                        </div>
                                        @if($errors->has('meta_tag_keyword'))
                                        <label for="" class="error">
                                            {{ $errors->first('meta_tag_keyword') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="pdf">PDF Uload</label>
                                        <input type="file" name="pdf" >
                                        @if($errors->has('pdf'))
                                        <label id="pdf-error" class="error">
                                            {{ $errors->first('pdf') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="book cover">Book Cover</label>
                                        <input type="file" name="book_cover" >
                                        @if($errors->has('book_cover'))
                                        <label id="book_cover-error" class="error">
                                            {{ $errors->first('book_cover') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                    <div class="form-group {{ $errors->has('related_book') ? 'has-error' : '' }} ">
                                        <div class="col-md-10">
                                        <label for="book cover">Related Products</label>
                                        <select name="related_book[]" class="form-control show-tick" data-live-search="true" multiple>
                                            <option value="">Select Book Releted</option>
                                            @foreach($bookrelated as $val)
                                            <option value="{{ $val->id }}">{{ $val->title }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('related_book'))
                                        <label for="" class="error">
                                            {{ $errors->first('related_book') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                            <div class="form-group {{ $errors->has('paid') ? 'has-error' : '' }} ">
                                <div class="col-md-5">
                                  <label for="book cover">Book Type</label>
                                   <select name="paid" class="form-control show-tick" data-live-search="true">
                                    <option value="">Select Booktype</option>
                                    <option value="1">Paid</option>
                                    <option value="0">Free</option>
                                </select>
                                   @if($errors->has('paid'))
                                   <label for="" class="error">
                                       {{ $errors->first('paid') }}
                                   </label>
                                   @endif
                            </div>
                        </div>
                        </div>

                        <div class="row clearfix">
                                <div class="col-sm-3">
                                    <label for="">Featured</label>
                                    <div class="switch">
                                        <label><input type="checkbox" name="featured" value="1" ><span class="lever switch-col-blue"></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <label for="">Latest</label>
                                    <div class="switch">
                                        <label><input type="checkbox" name="latest" value="1" ><span class="lever switch-col-blue"></span></label>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <label for="">IsActive</label>
                                    <div class="switch">
                                        <label><input type="checkbox" name="isActive" value="1" checked="checked"><span class="lever switch-col-blue"></span></label>
                                    </div>
                                </div>
                            </div>

                        <a href="{{ route('books.index') }}" class="btn btn-danger m-t-15 waves-effect">BACK</a>
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

<script>
   $(document).ready(function(){
    var selected = new Array();

	$('input[type=checkbox]').click(function(){
        // if is checked
		if($(this).is(':checked')){
         // check all children
              $(this).parent().find('li input[type=checkbox]').prop('checked', true);


			// check all parents
              $(this).parent().prev().prop('checked', true);

		   } else {

			// uncheck all children
			$(this).parent().find('li input[type=checkbox]').prop('checked', false);

        }

	})
    });
</script>

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
