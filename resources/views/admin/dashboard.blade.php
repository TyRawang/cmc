@extends('layouts.backend.app')

@section('title')
Dashboard
@endsection

@push('css')

@endpush

@section('content')
<div class="container-fluid">
  <div class="blockheader">
    <h2>DASHBOARD</h2>
  </div>
  <div class="countmoduele">
    <ul class="clearfix row">
      <li class="col-md-3 col-sm-6"><a><span class="bg-12s"><i class="fa fa-home"></i></span> <b>234</b> Test </a></li>
     
    </ul>
  </div>
</div>
@endsection

@push('js') 
<script src="{{ asset('assets/backend/plugins/jquery-countto/jquery.countTo.js') }}"></script> 
<script src="{{ asset('assets/backend/js/pages/widgets/infobox/infobox-1.js') }}"></script> 
@endpush 