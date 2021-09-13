@extends('layouts.master')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home')}}">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Search</li>
      </ol>
    </div>

    <!-- Main content -->
    <div class="content">
    <div class="row">
          <div class="col-md-3">
            <fieldset class="form-group">
              <label>Tracking ID</label>
              <input class="form-control form-control-serch" id="basicInput" type="text">
            </fieldset>
          </div>
          <div class="col-md-3">
            <fieldset class="form-group">
              <label>MSISDN</label>
              <input class="form-control form-control-serch" id="helpInputTop" type="text">
            </fieldset>
          </div>
          <div class="col-md-2">
          <fieldset class="form-group">
              <label>From Date</label>
              <input class="form-control date form-control-serch" type="text" id="from_date">
            </fieldset>
          </div>

          <div class="col-md-2">
          <fieldset class="form-group">
              <label>To Date</label>
              <input class="form-control form-control-serch  date"  type="text" id="to_date">
            </fieldset>
          </div>

          <div class="col-md-2">
          <fieldset class="form-group">
              <button type="button" class="form-control btn btn-primary search-btn" id="search">Search Record</button>

            </fieldset>
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
      <th>ID #</th>
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


 function load_data(from_date = '', to_date = '')
 {
  $('#trans').DataTable({
   processing: true,
   serverSide: true,
   ajax: {
    url:'{{ route("search.record")}}',

    data:{from_date:from_date, to_date:to_date}

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
    },{
     data:'vendDate',
     name:'vendDate'
    }
   ]
  });
 }

 $('#search').click(function(){
  var from_date = $('#from_date').val();
  var to_date = $('#to_date').val();
  if(from_date != '' &&  to_date != '')
  {
   $('#order_table').DataTable().destroy();
   load_data(from_date, to_date);

   console.log(from_date +" "+ to_date);

  }
  else
  {
   alert('Both Date is required');
  }
 });












</script>
@endpush
