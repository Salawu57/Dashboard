<!DOCTYPE html>



<html>
<head>

    <!-- Title -->
    <title>i.Sec Dashboard</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <!-- Styles -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'> -->
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


</head>
<body>

<section class="loginContainer">

    <div class="inner">

        <div class="providusLogo">

            <img src="{{'img/fi.png' }}" />

        </div>
        <div class="loginwrap">

            <div class="row">

                <div class="col-md-9 left">
                    <div class="topTxt">LogIn</div>
                    <div class="downTxt">Enter your username and password </div>

                </div>

                <div class="col-md-3">

                    <div class="imgBox">


                        <img src="{{'img/iseclogo.gif'}}" />

                    </div>

                </div>

            </div>


            <div class="frmCont">

                <form id="login-form"  method="POST" action="{{ route('login') }}" >

                {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input type="text" class="form-control" id="email" name="email" placeholder="email" required ="required">

                         @if ($errors->has('email'))
                            <span class="help-block showError">
                            <strong>{{ $errors->first('email') }}</strong>
                             </span>
                          @endif
</div>

<div class="form-group">

<input type="password" class="form-control" id="password" name="password" placeholder="password" required ="required">

    @if ($errors->has('password'))
    <span class="help-block showError">
    <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif
</div>
<div>
<!-- <a href="dashboard.html" type="submit" class="btn btn-primary btn-block" id="">Sign In</a>  -->
<button type="submit" class="btn btn-primary btn-block" id="login" name="login">Sign In</button>

</div>
</form>

</div>
</div>

</div>
</div>
</section>

<!-- Javascripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>




</body>


</html>
