@extends('layouts.master')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Create New User </li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="row">
                    <div class="col-12">



                    <div class="row m-t-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-blue">
              <h5 class="m-b-0">New User</h5>
            </div>
            <div class="card-body">
              <!-- <form action="#" class="form-horizontal form-bordered"> -->
              {!! Form::open(['method'=>'GET', 'route'=>'users.store', 'class'=>'form-horizontal form-bordered']) !!}
                <div class="form-body">
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">First Name</label>
                    <div class="col-md-9">
                    {{ Form::text('full_name',null,['class'=>'form-control',  'required'=>'required','id'=>'fName' ]) }}

                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Email</label>
                    <div class="col-md-9">
                      {{ Form::text('email',null,['class'=>'form-control', 'required'=>'required','id'=>'email' ]) }}
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Role</label>
                    <div class="col-md-9">
                    {{ Form::select('role_id',[''=>'Select role'] + $roles,null,['class'=>'form-control custom-select', 'id'=>'role' ]) }}
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Password</label>
                    <div class="col-md-9">
                    {{ Form::password('password',['class'=>'form-control', 'required'=>'required','id'=>'password' ]) }}
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Confirm Password</label>
                    <div class="col-md-9">
                    {{ Form::password('password_confirmation',['class'=>'form-control', 'required'=>'required','id'=>'password' ]) }}
                    </div>
                  </div>

                <div class="form-actions">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="offset-sm-3 col-md-9">
                          <button type="submit" class="btn btn-success"> Submit</button>
                          <button type="button" class="btn btn-inverse">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {!! Form::close() !!}
            </div>
          </div>
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


