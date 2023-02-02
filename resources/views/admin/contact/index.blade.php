@extends('layouts.backend.app')
@section('title')
Contact enquiry | Dashboard
@endsection

@push('css')
<!-- JQuery DataTable Css -->
<link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid">
   {{--  <div class="block-header">
         <a class="btn bg-blue waves-effect" href="{{ route('testimonial.create') }}">
            <i class="material-icons">add</i>
         <span>Add New Testimonial</span>
     </a>
     </div>  --}}
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Contact Enquiry
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped js-basic-example table-hover dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nme</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Desription</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                   <th>#</th>
                                    <th>Nme</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Desription</th>
                                    <th>Created At</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach($contact as $key => $value)
                                <tr class="text-left">
                                    <td>{{ $key+1 }}</td>
                                    <td>
                                        @if (null <> $value->name)
                                        {{ $value->name }}
                                        @else
                                        --
                                        @endif
                                    </td>

                                     <td>
                                        @if (null <> $value->mobile)
                                        {{ $value->mobile}}
                                        @else
                                        --
                                        @endif
                                    </td>
                                     <td>
                                        @if (null <> $value->email)
                                       <a href="mailto:{{ $value->email }}"> {{ $value->email}} </a>
                                        @else
                                        --
                                        @endif
                                    </td>
                                    <td>
                                        @if (null <> $value->description)
                                        {{ $value->description}}
                                        @else
                                        --
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($value->created_at)->format('F jS Y') }}</td>
                                    <td>

                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->
</div>
@endsection

@push('js')
<!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/tables/jquery-datatable.js') }}"></script>
@endpush
