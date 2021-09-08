@extends('layouts.master')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Users</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="table-responsive">
<table id="users" class="table table-bordered table-striped" data-name="cool-table" style ="width: 100%;">
  <thead>
    <tr>
      <th>ID #</th>
      <th>Full Name</th>
      <th>Email Address</th>
      <th>Role</th>
      <th>Action</th>

    </tr>
  </thead>

</table>


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


<script>

$(function() {
    $('#users').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('get.users') !!}',
        columns: [

            { data: 'id', name: 'id' },
            { data: 'full_name', name: 'full_name'},
            { data: 'email', name: 'email'},
            { data: 'role_id', name: 'role_id' },
            {data: 'action', name: 'action', orderable: false, searchable: false}

        ]
    });
});
</script>
@endpush

