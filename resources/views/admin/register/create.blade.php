@extends('layouts.backend.app')

@section('title')
Category | Dashboard
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
                        ADD CATEGORY
                    </h2>
                </div>
                <div class="body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('category.store') }}">
                        @csrf
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('category_name') ? 'focused error' : '' }}">
                                            <label for="category_name">Category Name</label>
                                            <input type="text" value="" name="category_name" class="form-control" placeholder="Category Name" />
                                        </div>
                                        @if($errors->has('slider_text'))
                                        <label for="" class="error">
                                            {{ $errors->first('category_name') }}
                                        </label>
                                        @endif
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

                        <a href="{{ route('category.index') }}" class="btn btn-danger m-t-15 waves-effect">BACK</a>
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
@endpush
