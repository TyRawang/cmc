@extends('layouts.backend.app')

@section('title')
Subject Manager | Dashboard
@endsection

@push('css')
<!-- JQuery DataTable Css -->
<link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid">
    <div class="block-header">
         <a class="btn bg-blue waves-effect" href="{{ route('category.create') }}">
            <i class="material-icons">add</i>
         <span>Add New Subject</span>
     </a>
     
     </div>
    
    <!-- Exportable Table -->
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                    Subject Manager
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped js-basic-example table-hover dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Order by</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Order byOrder by</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if($home_category)
                                 
                                @foreach($home_category as $key => $value)
                              
                                <tr class="text-left">
                                    <td>{{ $key+1 }}</td>
                                   <td>
                                        @if (null <> $value->category_name)
                                         {{ substr(strip_tags($value->category_name),0,60) }}
                                        @else
                                        --
                                        @endif
                                    </td>
                                    <td>
                                        @if (null <> $value->order_by_cat)
                                        {{ substr(strip_tags($value->order_by_cat),0,60) }}
                                        @else
                                        --
                                        @endif
                                    </td>
                                    <td>
                                        @if ($value->isActive == true)
                                            <span class="badge bg-teal">Active</span>
                                        @else
                                            <span class="badge bg-pink">InActive</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($value->created_at)->format('F jS Y') }}</td>
                                    <td>
                                        <a href="{{ route('category.edit',['home_category' => $value->id]) }}" class="btn btn-success btn-xs waves-effect"><i class="material-icons">edit</i></a>
                                        <form id="form1" method="POST" style="display: inline-block;" action="{{ route('category.destroy',['id' => $value->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button Onclick="return ConfirmDelete();" type="submit" class="btn btn-danger btn-xs";><span class="glyphicon glyphicon-remove"></span></button>
                                      </form>   
                                    </td>
                                </tr>
                                @foreach($child_cat as $row)
                                 @if($value->id==$row->p_id)
                                <tr class="text-left">
                                <td>{{ $key+1 }}</td>
                                   <td>
                                     @if (null <> $row->category_name)
                                      ->  {{ substr(strip_tags($row->category_name),0,60) }}
                                        @else
                                        --
                                        @endif
                                    </td>
                                    <td>
                                        @if (null <> $row->order_by_cat)
                                        {{ substr(strip_tags($row->order_by_cat),0,60) }}
                                        @else
                                        --
                                        @endif
                                    </td>
                                    <td>
                                        @if ($row->isActive == true)
                                            <span class="badge bg-teal">Active</span>
                                        @else
                                            <span class="badge bg-pink">InActive</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($value->created_at)->format('F jS Y') }}</td>
                                    <td>

                                        <a href="{{ route('category.edit',['home_category' => $row->id]) }}" class="btn btn-success btn-xs waves-effect"><i class="material-icons">edit</i></a>
                                        <form id="form1" method="POST" style="display:block;" action="{{ route('category.destroy',['id' => $row->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button Onclick="return ConfirmDelete();" type="submit" class="btn btn-danger btn-xs";><span class="glyphicon glyphicon-remove"></span></button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach 
                              
                                @endforeach
                                @endif

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
<!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/tables/jquery-datatable.js') }}"></script>
@endpush
