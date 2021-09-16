<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>bill.easy Dashboard</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0 -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">



<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css
" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">


<link rel="stylesheet" href="{{ asset('css/et-line-font.css')}}">
<link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
<link rel="stylesheet" href="{{ asset('css/simple-line-icons.css')}}">
<link href="{{asset('css/toastr.min.css')}}" class="theme-color" rel="stylesheet" type="text/css"/>
<script src="{{ asset('js/jquery.min.js') }}"></script>




</head>
<body class="sidebar-mini sidebar-collapse">
<div class="wrapper boxed-wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo blue-bg">
  </a>
    <!-- Header Navbar -->
    <nav class="navbar blue-bg navbar-static-top">

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="{{ asset('img/img1.jpg') }}" class="user-image" alt="User Image"> <span class="hidden-xs"> {{ Auth::user()->full_name }}</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="{{ asset('img/img1.jpg') }}" class="img-responsive img-circle" alt="User"></div>
                <p class="text-left"> {{ Auth::user()->full_name}} <small> {{ Auth::user()->email }}</small> </p>
              </li>
              <li><a href="#"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>


                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

             </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">


      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">

        <li class="treeview"> <a href="#"> <i class="icon-home"></i> <span>Transactions</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
            <li><a href="{{ route('home') }}"><i class="fa fa-angle-right"></i>All Transactions</a></li>
            <li><a href="{{ route('successful') }}"><i class="fa fa-angle-right"></i> Successful </a></li>
            <li><a href="{{ route('failed') }}"><i class="fa fa-angle-right"></i> Failed </a></li>
          </ul>
        </li>
        <!-- <li class="treeview"> <a href="{{ route('home') }}"> <i class="icon-search"></i> <span>Search</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          <ul class="treeview-menu">

            <li><a href="{{ route('search.record') }}"><i class="fa fa-angle-right"></i> Search transaction</a></li>



          </ul>
        </li> -->
        <li class="treeview"> <a href="{{ route('home') }}"> <i class="icon-people"></i> <span>Users</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">

            <!-- <li><a href="{{route('users.index')}}"><i class="fa fa-angle-right"></i>All Users</a></li>
            <li><a href="{{route('users.create')}}"><i class="fa fa-angle-right"></i>Create New User</a></li> -->

            <li><a href="{{route('users.profile')}}"><i class="fa fa-angle-right"></i>Profile</a></li>

          </ul>
        </li>




      </ul>
    </div>
    <!-- /.sidebar -->
  </aside>

  @include('layouts.alert')
  @yield('content')


  <footer class="main-footer">

    Copyright © 2021 i.Sec. All rights reserved.</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>

<script src="{{asset('vendor/datatables/buttons.server-side.js')}}"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.1/b-2.0.0/b-html5-2.0.0/datatables.min.js"></script>





<script src="{{ asset('js/popper.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>

<!-- v4.0.0-alpha.6 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<!-- template -->
<script src="{{ asset('js/adminkit.js') }}"></script>

<script src="{{asset('js/toastr.min.js')}}"></script>

<script>

$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })

</script>






@stack('scripts')



</html>

















