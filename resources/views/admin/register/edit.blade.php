{{-- @extends('layouts.backend.app')

@section('title')
Register details | Dashboard
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
                      REGISTRATION FORM
                    </h2>
                </div>
                <div class="body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('category.update',['category' => $category->id]) }}">
                        @method('PUT')
                        @csrf
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                            <label for="category_name">Name</label>
                                            <input type="text" value="{{ $category->category_name <> null ? $category->category_name : '' }}" name="category_name" class="form-control" placeholder="Category Name" />
                                    </div>
                                </div>
                            </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                            <label for="category_name">EMAIL</label>
                                            <input type="text" value="{{ $category->category_name <> null ? $category->category_name : '' }}" name="category_name" class="form-control" placeholder="Category Name" />
                                    </div>
                                </div>

                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                            <label for="category_name">MOBILE NO</label>
                                            <input type="text" value="{{ $category->category_name <> null ? $category->category_name : '' }}" name="category_name" class="form-control" placeholder="Category Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                            <label for="category_name">DATE OF BIRTH</label>
                                            <input type="text" value="{{ $category->category_name <> null ? $category->category_name : '' }}" name="category_name" class="form-control" placeholder="Category Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                            <label for="category_name">QUALIFICATIONS</label>
                                            <input type="text" value="{{ $category->category_name <> null ? $category->category_name : '' }}" name="category_name" class="form-control" placeholder="Category Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                            <label for="category_name">GENDER</label>
                                            <input type="text" value="{{ $category->category_name <> null ? $category->category_name : '' }}" name="category_name" class="form-control" placeholder="Category Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                            <label for="category_name">RELIGION</label>
                                            <input type="text" value="{{ $category->category_name <> null ? $category->category_name : '' }}" name="category_name" class="form-control" placeholder="Category Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                            <label for="category_name">CATEGORY</label>
                                            <input type="text" value="{{ $category->category_name <> null ? $category->category_name : '' }}" name="category_name" class="form-control" placeholder="Category Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                            <label for="category_name">STATE / UT</label>
                                            <input type="text" value="{{ $category->category_name <> null ? $category->category_name : '' }}" name="category_name" class="form-control" placeholder="Category Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <label for="">IsActive</label>
                                    <div class="switch">
                                        <label><input type="checkbox" name="isActive" value="1" {{ $category->isActive == 1 ? 'checked' : '' }}><span class="lever switch-col-blue"></span></label>
                                    </div>
                                </div>
                            </div>

                        <a href="{{ route('category.index') }}" class="btn btn-danger m-t-15 waves-effect">BACK</a>
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
@endpush --}}
@extends('layouts.backend.app')

@section('title')
{{ config('app.name')." - User details" }}
@endsection

@push('css')

@endpush

@section('content')
<div class="container-fluid">
    <div class="row clearfix">

    </div>
        <div class="row clearfix">
        <div class="col-xs-12 col-sm-12">
            <div class="card">
                <div class="body">
                    <div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#profile_settings" aria-controls="settings" role="tab"
                                    data-toggle="tab" aria-expanded="false">Register form {{ session('ctab') <> null ? session('ctab') : '' }}</a></li>
                            <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab"
                                    data-toggle="tab">Payment</a></li>
                            <li role="presentation"><a href="#form-info" aria-controls="settings" role="tab"
                                        data-toggle="tab">Form info(Final submit)</a></li>

                        </ul>

                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade active in" id="profile_settings">
                                <form enctype="multipart/form-data" method="POST" action="{{ route('register.update',['register' => $registerdata->id]) }}">
                                    @method('PUT')
                                @csrf
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <div class="form-line focused">
                                            <input type="text" class="form-control" readonly value="{{ $registerdata->name <> null ? $registerdata->name : '' }}" id="name" name="name" >

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <div class="form-line focused">
                                                <input type="email" class="form-control" readonly  id="email" value = "{{ $registerdata->email <> null ? $registerdata->email : '' }}" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">MOBILE NO</label>
                                        <div class="col-sm-10">
                                            <div class="form-line focused">
                                                <input type="email" class="form-control" readonly  value="{{ $registerdata->mobile <> null ? $registerdata->mobile : '' }}" id="email" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">DATE OF BIRTH</label>
                                        <div class="col-sm-10">
                                            <div class="form-line focused">
                                                <input type="email" class="form-control" readonly  id="email" name="email" value="{{ $registerdata->dob <> null ? $registerdata->dob : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">QUALIFICATIONS</label>
                                        <div class="col-sm-10">
                                            <div class="form-line focused">
                                                <input type="email" class="form-control" readonly  id="email" name="email" value="{{ $registerdata->qualification <> null ? $registerdata->qualification : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">GENDER</label>
                                        <div class="col-sm-10">
                                            <div class="form-line focused">
                                                <input type="email" class="form-control" readonly  id="email" name="email" value="{{ $registerdata->gender <> null ? $registerdata->gender : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">RELIGION</label>
                                        <div class="col-sm-10">
                                            <div class="form-line focused">
                                                <input type="email" class="form-control" readonly  id="email" name="email" value="{{ $registerdata->religion <> null ? $registerdata->religion : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">CATEGORY</label>
                                        <div class="col-sm-10">
                                            <div class="form-line focused">
                                                <input type="email" class="form-control" readonly  id="email" name="email" value="{{ $registerdata->category <> null ? $registerdata->category : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-2 control-label">STATE / UT</label>
                                        <div class="col-sm-10">
                                            <div class="form-line focused">
                                                <input type="email" class="form-control" readonly  id="email" name="email" value="{{ $registerdata->state <> null ? $registerdata->state : '' }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-sm-3">
                                            <label for="">IsActive</label>
                                            <div class="switch">
                                                <label><input type="checkbox" name="isActive" value="1" {{ $registerdata->isActive == 1 ? 'checked' : '' }}><span class="lever switch-col-blue"></span></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary waves-effect">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                <form class="form-horizontal" method="POST" action="">
                                    @csrf
                                    <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">{{ $paydata->title <> null ? $paydata->title : '' }}</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="price" name="price" value="RS {{ $paydata->price <> null ? $paydata->price : '' }}"
                                                    placeholder="User pay">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="form-info">
                                <form class="form-horizontal" method="POST" action="">
                                    @csrf
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">Education qualification according to which you are searching job?</label>
                                        <div class="col-sm-3">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="password" name="password"
                                                    placeholder="User pay" value="{{ $searchjob->education <> null ? $searchjob->education : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">In which state you are searching a Job ?</label>
                                        <div class="col-sm-3">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="password" name="password"
                                                    placeholder="User pay" value="{{ $searchjob->search_state_job <> null ? $searchjob->search_state_job : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">Are you searching job in all Indian states ?</label>
                                        <div class="col-sm-3">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="password" name="password"
                                                    placeholder="User pay" value="{{ $searchjob->search_all_state_job <> null ? $searchjob->search_all_state_job : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">Are you searching nearby coaching centers?</label>
                                        <div class="col-sm-3">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="password" name="password"
                                                    placeholder="User pay">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">In which city you want to search coaching center?</label>
                                        <div class="col-sm-3">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="password" name="password"
                                                    placeholder="User pay" value="{{ $searchjob->coaching_center <> null ? $searchjob->coaching_center : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">State(Coaching center)</label>
                                        <div class="col-sm-3">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="password" name="password"
                                                    placeholder="User pay" value="{{ $searchjob->state_wise <> null ? $searchjob->state_wise : '' }}">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">City(Coaching center)</label>
                                        <div class="col-sm-3">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="password" name="password"
                                                    placeholder="User pay" value="{{ $searchjob->district_wise <> null ? $searchjob->district_wise : '' }}">

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets/backend/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    $(function () {
        CKEDITOR.replace('ckeditor1',{height:200});
        CKEDITOR.replace('ckeditor2',{height:200});
    });
</script>
@endpush
