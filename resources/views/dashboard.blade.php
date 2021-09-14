@extends('layouts.master')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard - All Transactions</h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Dashboard All Tranasaction</li>
      </ol>
    </div>


    <!-- Main content -->
    <div class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <div class="row ">
                  <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-darkblue">
                    <div class="col-12">
                    <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
                      <div class="info-box-content">
                        <h6 class="info-box-text text-white">New Orders</h6>
                        <h1 class="text-white">1,150</h1>
                        <span class="progress-description text-white"> 70% Increase in 30 Days </span> </div>
                      </div>
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green text-white">
                    <div class="col-12">
                    <span class="info-box-icon bg-transparent"><i class="ti-face-smile"></i></span>
                      <div class="info-box-content">
                        <h6 class="info-box-text text-white">New Users</h6>
                        <h1 class="text-white">565</h1>
                        <span class="progress-description text-white"> 45% Increase in 30 Days </span> </div>
                      </div>
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-aqua">
                    <div class="col-12">
                    <span class="info-box-icon bg-transparent"><i class="ti-bar-chart"></i></span>
                      <div class="info-box-content">
                        <h6 class="info-box-text text-white">Online Revenue</h6>
                        <h1 class="text-white">$5,450</h1>
                        <span class="progress-description text-white"> 50% Increase in 30 Days </span> </div>
                      </div>
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                  <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange">
                    <div class="col-12">
                    <span class="info-box-icon bg-transparent"><i class="ti-money"></i></span>
                      <div class="info-box-content">
                        <h6 class="info-box-text text-white">Total Profit</h6>
                        <h1 class="text-white">$8,188</h1>
                        <span class="progress-description text-white"> 35% Increase in 30 Days </span> </div>
                      </div>
                    </div>
                    <!-- /.info-box -->
                  </div>
                  <!-- /.col -->
                </div>
                <div class="box-body">
                <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID #</th>
                        <th>Opended by</th>
                        <th>Cust.Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Assign to</th>
                        <th>Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1001</td>
                        <td><img src="dist/img/img1.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Alexander</a></td>
                        <td>alexander@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Pierce Sr.</td>
                        <td>03-10-2017</td>
                      </tr>
                      <tr>
                        <td>1010</td>
                        <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">John Deo</a></td>
                        <td>johndeo@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alexander</td>
                        <td>02-10-2017</td>
                      </tr>
                      <tr>
                        <td>1015</td>
                        <td><img src="dist/img/img3.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Alexa Rose</a></td>
                        <td>alexarose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>01-10-2017</td>
                      </tr>
                      <tr>
                        <td>1120</td>
                        <td><img src="dist/img/img4.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Sr. Alex Dc</a></td>
                        <td>sralex@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alex Sr.deo</td>
                        <td>29-09-2017</td>
                      </tr>
                      <tr>
                        <td>1125</td>
                        <td><img src="dist/img/img5.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">John Cena</a></td>
                        <td>johncena@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>John Deo</td>
                        <td>28-09-2017</td>
                      </tr>
                      <tr>
                        <td>1128</td>
                        <td><img src="dist/img/img1.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Randy Orton</a></td>
                        <td>randyorton@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>27-09-2017</td>
                      </tr>
                      <tr>
                        <td>1130</td>
                        <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Dev. Batista</a></td>
                        <td>batistadev@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alexander</td>
                        <td>25-09-2017</td>
                      </tr>
                      <tr>
                        <td>1132</td>
                        <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Michael Rose</a></td>
                        <td>michaelrose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>John Cena</td>
                        <td>24-09-2017</td>
                      </tr>
                      <tr>
                        <td>1135</td>
                        <td><img src="dist/img/img4.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Tamina Bexa</a></td>
                        <td>tamina@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>John Cena</td>
                        <td>22-09-2017</td>
                      </tr>
                      <tr>
                        <td>1138</td>
                        <td><img src="dist/img/img3.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">McRosy Sr.</a></td>
                        <td>mcrosy@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-default">Pending</span></td>
                        <td>Tamina Bexa</td>
                        <td>20-09-2017</td>
                      </tr>
                      <tr>
                        <td>1140</td>
                        <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Alexander</a></td>
                        <td>alexander@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Pierce Sr.</td>
                        <td>03-10-2017</td>
                      </tr>
                      <tr>
                        <td>1142</td>
                        <td><img src="dist/img/img1.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">John Deo</a></td>
                        <td>johndeo@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-primary">Pending</span></td>
                        <td>Alexander</td>
                        <td>02-10-2017</td>
                      </tr>
                      <tr>
                        <td>1145</td>
                        <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Alexa Rose</a></td>
                        <td>alexarose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>01-10-2017</td>
                      </tr>
                      <tr>
                        <td>1146</td>
                        <td><img src="dist/img/img4.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Sr. Alex Dc</a></td>
                        <td>sralex@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>29-09-2017</td>
                      </tr>
                      <tr>
                        <td>1148</td>
                        <td><img src="dist/img/img3.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">John Cena</a></td>
                        <td>johncena@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>John Deo</td>
                        <td>28-09-2017</td>
                      </tr>
                      <tr>
                        <td>1150</td>
                        <td><img src="dist/img/img5.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Randy Orton</a></td>
                        <td>randyorton@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>27-09-2017</td>
                      </tr>
                      <tr>
                        <td>1152</td>
                        <td><img src="dist/img/img4.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Michael Rose</a></td>
                        <td>michaelrose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alexander</td>
                        <td>25-09-2017</td>
                      </tr>
                      <tr>
                        <td>1154</td>
                        <td><img src="dist/img/img3.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Dev. Batista</a></td>
                        <td>batistadev@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>John Cena</td>
                        <td>24-09-2017</td>
                      </tr>
                      <tr>
                        <td>1155</td>
                        <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Tamina Bexa</a></td>
                        <td>tamina@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>John Cena</td>
                        <td>22-09-2017</td>
                      </tr>
                      <tr>
                        <td>1157</td>
                        <td><img src="dist/img/img1.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Alexander</a></td>
                        <td>alexander@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-default">Pending</span></td>
                        <td>Tamina Bexa</td>
                        <td>20-09-2017</td>
                      </tr>
                      <tr>
                        <td>1160</td>
                        <td><img src="dist/img/img1.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">McRosy Sr.</a></td>
                        <td>mcrosy@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Pierce Sr.</td>
                        <td>03-10-2017</td>
                      </tr>
                      <tr>
                        <td>1162</td>
                        <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">John Deo</a></td>
                        <td>johndeo@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alexander</td>
                        <td>02-10-2017</td>
                      </tr>
                      <tr>
                        <td>1165</td>
                        <td><img src="dist/img/img3.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Alexa Rose</a></td>
                        <td>alexarose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>01-10-2017</td>
                      </tr>
                      <tr>
                        <td>1167</td>
                        <td><img src="dist/img/img4.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">John Cena</a></td>
                        <td>johncena@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alex Sr.deo</td>
                        <td>29-09-2017</td>
                      </tr>
                      <tr>
                        <td>1168</td>
                        <td><img src="dist/img/img5.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Sr. Alex Dc</a></td>
                        <td>sralex@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>John Deo</td>
                        <td>28-09-2017</td>
                      </tr>
                      <tr>
                        <td>1170</td>
                        <td><img src="dist/img/img1.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Randy Orton</a></td>
                        <td>randyorton@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>27-09-2017</td>
                      </tr>
                      <tr>
                        <td>1172</td>
                        <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Dev. Batista</a></td>
                        <td>batistadev@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alexander</td>
                        <td>25-09-2017</td>
                      </tr>
                      <tr>
                        <td>1173</td>
                        <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Michael Rose</a></td>
                        <td>michaelrose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>John Cena</td>
                        <td>24-09-2017</td>
                      </tr>
                      <tr>
                        <td>1176</td>
                        <td><img src="dist/img/img4.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">McRosy Sr.</a></td>
                        <td>mcrosy@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>John Cena</td>
                        <td>22-09-2017</td>
                      </tr>
                      <tr>
                        <td>1178</td>
                        <td><img src="dist/img/img3.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Tamina Bexa</a></td>
                        <td>tamina@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-default">Pending</span></td>
                        <td>Tamina Bexa</td>
                        <td>20-09-2017</td>
                      </tr>
                      <tr>
                        <td>1179</td>
                        <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">John Deo</a></td>
                        <td>johndeo@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Pierce Sr.</td>
                        <td>03-10-2017</td>
                      </tr>
                      <tr>
                        <td>1181</td>
                        <td><img src="dist/img/img1.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Alexander</a></td>
                        <td>alexander@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-primary">Pending</span></td>
                        <td>Alexander</td>
                        <td>02-10-2017</td>
                      </tr>
                      <tr>
                        <td>1182</td>
                        <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Sr. Alex Dc</a></td>
                        <td>sralex@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>01-10-2017</td>
                      </tr>
                      <tr>
                        <td>1184</td>
                        <td><img src="dist/img/img4.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Alexa Rose</a></td>
                        <td>alexarose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>29-09-2017</td>
                      </tr>
                      <tr>
                        <td>1186</td>
                        <td><img src="dist/img/img3.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Randy Orton</a></td>
                        <td>randyorton@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>John Deo</td>
                        <td>28-09-2017</td>
                      </tr>
                      <tr>
                        <td>1188</td>
                        <td><img src="dist/img/img5.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">John Cena</a></td>
                        <td>johncena@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>Alex Sr.deo</td>
                        <td>27-09-2017</td>
                      </tr>
                      <tr>
                        <td>1190</td>
                        <td><img src="dist/img/img4.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Michael Rose</a></td>
                        <td>michaelrose@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>Alexander</td>
                        <td>25-09-2017</td>
                      </tr>
                      <tr>
                        <td>1192</td>
                        <td><img src="dist/img/img3.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Dev. Batista</a></td>
                        <td>batistadev@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td>John Cena</td>
                        <td>24-09-2017</td>
                      </tr>
                      <tr>
                        <td>1194</td>
                        <td><img src="dist/img/img2.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">McRosy Sr.</a></td>
                        <td>mcrosy@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-warning">New</span></td>
                        <td>John Cena</td>
                        <td>22-09-2017</td>
                      </tr>
                      <tr>
                        <td>1195</td>
                        <td><img src="dist/img/img1.jpg" class="img-circle img-w-30" alt="User Image"> <a href="#">Tamina Bexa</a></td>
                        <td>tamina@gmail.com</td>
                        <td>Sed cursus dapibus diam</td>
                        <td><span class="label label-default">Pending</span></td>
                        <td>Tamina Bexa</td>
                        <td>20-09-2017</td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID #</th>
                        <th>Opended by</th>
                        <th>Cust.Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Assign to</th>
                        <th>Date</th>
                      </tr>
                    </tfoot>
                  </table>
                  </div>
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
  <!-- /.content-wrapper -->

@stop


