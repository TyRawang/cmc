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
                <form enctype="multipart/form-data" method="POST" action="{{ route('books.update',['book' => $book->id]) }}">
                        @method('PUT')
                        @csrf
                <div class="row clearfix">
                        <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }} ">
                            <div class="col-md-5">
                            <select name="category_id[]"   class="form-control show-tick" data-live-search="true" multiple>
                                <option value="">Select category</option>
                                @foreach($category as $val)
                                <option {{ in_array($val->id,$arrayexp) ? 'selected' : '' }}  value="{{ $val->id }}"> {{ $val->category_name }}</option>
                                @foreach($subcategory as $child)
                                @if($val->id==$child->p_id)
                                <option {{ in_array($child->id,$arrayexp) ? 'selected' : '' }} value="{{ $child->id }}">&nbsp&nbsp-->{{ $child->category_name }}</option>
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
                                            <input type="text" name="title" value="{{ $book->title }}" class="form-control" placeholder="Enter Title" />
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
                                            <input type="text" value="{{ $book->isbn }}" required name="isbn" class="form-control" placeholder="Book ISBN" />
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
                                            <input type="text" value="{{ $book->author_name }}" required  name="author_name" class="form-control" placeholder="Author name" />
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
                                            <input type="text" value="{{ $book->book_url }}" name="book_url" class="form-control" placeholder="Enter Book Url" />
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('price') ? 'focused error' : '' }}">
                                            <label for="price">Price</label>
                                            <input type="text" value="{{ $book->price }}" required name="price" class="form-control" placeholder="Price" />
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('publish_year') ? 'focused error' : '' }}">
                                            <label for="publish_year">Publish Year</label>
                                            <input type="text" value="{{ $book->publish_year }}" required name="publish_year" class="form-control" placeholder="Publish Year" />
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
                                            <input type="text" value="{{ $book->publisher }}" required  name="publisher" class="form-control" placeholder="Publisher" />
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
                                            <input type="text" value="{{ $book->language }}" required  name="language" class="form-control" placeholder="Language" />
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
                                            <textarea name="description"  rows="4" class="form-control no-resize" id="tinymce">{{ $book->description }}</textarea>
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
                                            <input type="text" value="{{ $book->meta_tag_title }}" name="meta_tag_title" class="form-control" placeholder="Meta Tag Title" />
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
                                            <input type="text" value="{{ $book->meta_tag_description }}" name="meta_tag_description" class="form-control" placeholder="Meta Tag Description" />
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
                                            <input type="text" value="{{ $book->meta_tag_keyword }}" name="meta_tag_keyword" class="form-control" placeholder="Meta Tag Keyword" />
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
                                        <label for="pdf">PDF Upload</label>
                                        <input type="file" name="pdf">
                                         @if($errors->has('pdf'))
                                        <label id="pdf-error" class="error">
                                            {{ $errors->first('pdf') }}
                                        </label>
                                        @endif
                                      @if($book->pdf!='')  
                                    <a href="{{ asset($book->pdf) }}" target="_blank"> <img src="{{ asset('image/pdf.png') }}" alt="" width="50" height="50"></a>
                                    <a href="{{ route('delete-pdf',['pdfdelete' => $book->id]) }}" class="btn btn-danger btn-xs"  Onclick="return ConfirmDelete();"><span class="glyphicon glyphicon-remove"></span></a>
                                    @endif  
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="book cover">Book Cover</label>

                                        <input type="file" name="book_cover">
                                        @if($errors->has('book_cover'))
                                        <label id="book_cover-error" class="error">
                                            {{ $errors->first('book_cover') }}
                                        </label>

                                        @endif
                                        @if($book->book_cover!='')
                                        <img src="{{ asset($book->book_cover) }}" alt="" width="100" height="50">
                                        <a href="{{ route('delete-bookcover',['deleteimage' => $book->id]) }}" class="btn btn-danger btn-xs"  Onclick="return ConfirmDelete();"><span class="glyphicon glyphicon-remove"></span></a>
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
                                        @foreach($books as $val)
                                        <option  {{ in_array($val->id,$rnArr) ? 'selected' : '' }} value="{{ $val->id }}">{{ $val->title }}</option>
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
                                    <option value="1" {{ $book->paid == 1 ? 'selected="selected"' : '' }}>Paid</option>
                                    <option value="0" {{ $book->paid == 0 ? 'selected="selected"' : '' }}>Free</option>
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
                                        <label><input type="checkbox" name="featured" value="1" {{ $book->featured == 1 ? 'checked' : '' }} ><span class="lever switch-col-blue"></span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <label for="">Latest</label>
                                    <div class="switch">
                                        <label><input type="checkbox" name="latest" value="1" {{ $book->latest == 1 ? 'checked' : '' }} ><span class="lever switch-col-blue"></span></label>
                                    </div>
                                </div>
                            </div>

                                <div class="row clearfix">
                                <div class="col-sm-3">
                                    <label for="">IsActive</label>
                                    <div class="switch">
                                    <label><input type="checkbox" name="isActive" value="1" {{ $book->isActive == 1 ? 'checked' : '' }}><span class="lever switch-col-blue"></span></label>
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
