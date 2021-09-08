@extends('layouts.master')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Dashboard</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="table-responsive">

                            {!! $dataTable->table() !!}

                  </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop


@push('scripts')

{!! $dataTable->scripts() !!}
@endpush


