@extends('layouts.backend.app')

@section('title')
 Institute | Dashboard
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
                        EDIT INSTITUTE                      
                    </h2>                    
                </div>
                <div class="body">                    
                    <form enctype="multipart/form-data" method="POST" action="{{ route('institute.update',['institute' => $institute->id]) }}">
                        @method('PUT')
                        @csrf                              
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('institute_name') ? 'focused error' : '' }}">
                                            <label for="institute_name">Title</label>
                                            <input type="text" value="{{ $institute->institute_name <> null ? $institute->institute_name : '' }}" name="title" class="form-control" placeholder="Title " />
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
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('name') ? 'focused error' : '' }}">
                                            <label for="title"> Name</label>
                                            <input type="text" value="{{ $institute->name }}" name="name" class="form-control" placeholder="Enter Name" />
                                        </div>
                                        @if($errors->has('name'))
                                        <label for="" class="error">
                                            {{ $errors->first('name') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('email') ? 'focused error' : '' }}">
                                            <label for="email">Email</label>
                                            <input type="text" value="{{ $institute->email }}" name="email" class="form-control" placeholder="Enter Email" />
                                        </div>
                                        @if($errors->has('email'))
                                        <label for="" class="error">
                                            {{ $errors->first('email') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('address') ? 'focused error' : '' }}">
                                            <label for="address">Address</label>
                                            <input type="text" value="{{ $institute->address }}" name="address" class="form-control" placeholder="Enter Address" />
                                        </div>
                                        @if($errors->has('address'))
                                        <label for="" class="error">
                                            {{ $errors->first('address') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('contact_number') ? 'focused error' : '' }}">
                                            <label for="contact_number">Contact Number</label>
                                            <input type="text" value="{{ $institute->contact_number }}" name="contact_number" class="form-control" placeholder="Enter Contact Number" />
                                        </div>
                                        @if($errors->has('contact_number'))
                                        <label for="" class="error">
                                            {{ $errors->first('contact_number') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line {{ $errors->has('num_of_allow_user') ? 'focused error' : '' }}">
                                            <label for="email">Number of user allow</label>
                                            <input type="num_of_allow_user" value="{{ $institute->num_of_allow_user }}" name="num_of_allow_user" class="form-control" placeholder="Enter number of user allow" />
                                        </div>
                                        @if($errors->has('num_of_allow_user'))
                                        <label for="" class="error">
                                            {{ $errors->first('num_of_allow_user') }}
                                        </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <label for="">IsActive</label>
                                    <div class="switch">
                                    <label><input type="checkbox" name="isActive" value="1" {{ $institute->isActive == 1 ? 'checked' : '' }}><span class="lever switch-col-blue"></span></label>
                                    </div>
                                </div>
                            </div>
                          
                        <a href="{{ route('institute.index') }}" class="btn btn-danger m-t-15 waves-effect">BACK</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                    </form>
                </div>
            </div>
    <!-- Vertical Layout | With Floating Label -->
    
</div>
@endsection

@push('js')
@endpush
