@extends('layouts.master')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard -  Failed Transactions</h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Failed</li>
      </ol>
    </div>


     <!-- Main content -->
     <div class="content">

<div class="row">
<div class="col-md-10">
<div class="row">
<div class="col-md-2">
 {!! Form::open(['method'=>'POST', 'route'=>'export.failedTranExport']) !!}
 <fieldset class="form-group">
  <label>Filter By</label>
<!-- <input class="form-control form-control-serch" id="trackid" type="text"> -->
    <select class="form-control  custom-select selectText" id="filterBy">
        <option value="msisdn">MSISDN</option>
        <option value="trackingid">Tracking ID</option>
    </select>
  </fieldset>
  </div>

  <div class="col-md-2 trackid" id="trackCont">
      <fieldset class="form-group">
          <label>Tracking ID</label>
          <input class="form-control form-control-serch" type="text" id="trackid" name="trackid" >
        </fieldset>
      </div>

      <div class="col-md-2 phoneCont" id="phoneCont">
      <fieldset class="form-group">
          <label>MSISDN</label>
          <input class="form-control form-control-serch" type="text" id="phone" name="phone" >
        </fieldset>
      </div>


  <div class="col-md-2" id="time">
      <fieldset class="form-group">
          <label>From Date</label>
          <input class="form-control date form-control-serch" type="text" id="start_date" name="start_date" >
        </fieldset>
      </div>

      <div class="col-md-2" id="time2">
      <fieldset class="form-group">
          <label>To Date</label>
          <input class="form-control form-control-serch  date"  type="text" id="end_date" name="end_date">
        </fieldset>
      </div>

      <div class="col-md-2">
      <fieldset class="form-group">
          <button type="button" class="form-control btn btn-primary search-btn" id="searchBtn" >Search Record</button>


        </fieldset>
      </div>

      <div class="col-md-2">
      <fieldset class="form-group">
          <button type="button" class="form-control btn btn-warning search-btn" id="resetBtn" >Reset</button>


        </fieldset>
      </div>

</div>
</div>
<div class="col-md-2">
<div class="pull-right">
          <button type="submit"  class="btn btn-info search-btn "><i class="fa fa-file-excel-o"></i> Excel</button>
          <!-- <button type="submit" class="btn btn-info search-btn "><i class="fa fa-file-text"></i> CSV</button> -->
 </div>
</form>
</div>
</div>
  <div class="row">
<div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <div class="table-responsive">
<table id="trans" class="table table-bordered table-striped" data-name="cool-table" style ="width: 100%;">
<thead>


<tr>
  <th>Tracking ID</th>
  <th>MSISDN</th>
  <th>Amount</th>
  <th>Status</th>
  <th>Transaction Date</th>
  <th>Vend Date</th>

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
<script type="text/javascript">
$('.date').datepicker({
   format: 'yyyy-mm-dd'
 });



 $('#filterBy').on('change', function() {

  if(this.value == "trackingid"){

    $("#trackCont").css("display", "block");
     $("#phoneCont").css("display", "none");
     $("#time").css("display", "none");
     $("#time2").css("display", "none");

  }else if(this.value == "msisdn"){
    $("#trackCont").css("display", "none");
     $("#phoneCont").css("display", "block");
     $("#time").css("display", "block");
     $("#time2").css("display", "block");

  }

 });

 $('#trans').DataTable({
     processing: true,
     serverSide: true,
     pageLength: 25,
     searching: false,
     order: [4, 'desc'],
     language: {

          "emptyTable": "No Record found"
     },
     ajax: {
      url: "{{ url('failedTrans') }}",
      type: 'GET',
      data: function (d) {
      d.start_date = $('#start_date').val();
      d.end_date = $('#end_date').val();
      d.trackid = $('#trackid').val();
      d.phone = $('#phone').val();
      }
     },
     columns: [
        {
 data:'trackingID',
 name:'trackingID'
},
{
 data:'msisdn',
 name:'msisdn'
},
{
 data:'amount',
 name:'amount'
},
{
 data:'status',
 name:'status'
},
{
 data:'transactionDate',
 name:'transactionDate'
},
{
 data:'vendDate',
 name:'vendDate'
}
           ]
  });





$('#searchBtn').click(function(){


  $('#trans').DataTable().draw(true);

});

$('#resetBtn').click(function(){

$('#start_date').val('');
$('#end_date').val('');
$('#trackid').val('');
$('#phone').val('');

$('#trans').DataTable().draw(true);

});


</script>
@endpush
