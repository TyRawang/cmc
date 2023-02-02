@extends('layouts.backend.app')

@section('title')
Book list | Dashboard
@endsection

@push('css')
<!-- JQuery DataTable Css -->
<link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid">
    <div class="block-header">
         <a class="btn bg-blue waves-effect" href="{{ route('books.create') }}">
            <i class="material-icons">add</i>
         <span>Add New Books</span>
     </a>
    
     </div>

    
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        BOOKS
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped js-basic-example table-hover dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>

                                    <th>Book ISBN</th>
                                    <th>Author Name</th>
                                    <th>Status</th>
                                   
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>#</th>
                                    <th>Title</th>

                                    <th>Book ISBN</th>
                                    <th>Author Name</th>
                                    <th>Status</th>
                                    
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach($book as $key => $value)
                                <tr class="text-left">
                                    <td>{{ $key+1 }}</td>
                                   <td>
                                        @if (null <> $value->title)
                                        {{ $value->title }}
                                        @else
                                        --
                                        @endif
                                    </td>

                                    <td>
                                        @if (null <> $value->isbn)
                                        {{ $value->isbn }}
                                        @else
                                        --
                                        @endif
                                     </td>
                                     <td>
                                        @if (null <> $value->author_name)
                                        {{ $value->author_name }}
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
                                   
                                    <td>

                                        <a href="{{ route('books.edit',['book' => $value->id]) }}" class="btn btn-success btn-xs waves-effect"><i class="material-icons">edit</i></a>
                                       <form id="form1" method="POST" style="display: inline-block;" action="{{ route('books.destroy',['id' => $value->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button Onclick="return ConfirmDelete();" type="submit" class="btn btn-danger btn-xs";><span class="glyphicon glyphicon-remove"></span></button>
                                      </form>
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
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/tables/jquery-datatable.js') }}"></script>
@endpush
