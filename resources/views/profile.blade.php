@extends('layouts.master')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Profile page</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Profile page</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-4">
          <div class="user-profile-box m-b-3">
            <div class="box-profile text-white"> <img class="profile-user-img img-responsive img-circle m-b-2" src="{{asset('img/img1.jpg')}}" alt="User profile picture">
              <h3 class="profile-username text-center">{{ Auth::user()->full_name}}</h3>
           </div>
          </div>
         </div>
        <div class="col-lg-8">
          <div class="info-box">
            <div class="card tab-style1">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Personal Info</a> </li>
                <li class="nav-item"> <a class="nav-link " data-toggle="tab" href="#changePassword" role="tab">Reset Password</a> </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">


              <div class="tab-pane" id="changePassword" role="tabpanel">
                  <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'route'=>['users.changePassword'], 'id'=>'del_user', 'class' =>'form-horizontal form-material']) !!}
                    <div class="form-group">
                        <label class="col-md-12">Old Password</label>
                        <div class="col-md-12">
                          <input  class="form-control form-control-line" type="password" name="oldPassword">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-12">New Password</label>
                        <div class="col-md-12">
                          <input  class="form-control form-control-line" type="password" name="password">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-12">
                          <button class="btn btn-success">Reset Password</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <!--second tab-->
                <div class="tab-pane active" id="settings" role="tabpanel">
                  <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'route'=>['users.updateProfile'], 'id'=>'del_user', 'class' =>'form-horizontal form-material']) !!}

                    <input placeholder="id" class="form-control form-control-line" name="id" type="hidden" value="{{Auth::user()->id}}" >

                      <div class="form-group">
                        <label class="col-md-12">Full Name</label>
                        <div class="col-md-12">
                          <input placeholder="full name" class="form-control form-control-line" name="full_name" type="text" value="{{Auth::user()->full_name}}" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                          <input placeholder="email address" class="form-control form-control-line" name="email" id="email" type="email" value="{{Auth::user()->email}}" readonly="" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Role</label>
                        <div class="col-md-12">
                          <input placeholder="Role" name="role" class="form-control form-control-line" value="{{Auth::user()->role_id == 1 ? 'Super Administrator':'Administrator'}}" id="role" type="text" readonly="">
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="col-sm-12">
                          <button type="submit" class="btn btn-success">Update Profile</button>
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
      <!-- Main row -->
    </div>
    <!-- /.content -->
  </div>



































@stop
