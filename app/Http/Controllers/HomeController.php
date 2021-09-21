<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Airtime_Transactions;
use App\DataTables\TransactionDataTable;
use App\DataTables\FailedTransactionsDataTable;
use App\DataTables\TransactionsDataTable;
use App\DataTables\SuccessfulTransactionDataTable;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Excel;
use App\Exports\TransactionExport;
use App\Exports\FailedExport;
use App\Exports\SuccessfulExport;

use Illuminate\Support\Facades\Session;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');

    }

    public function failedTransV(FailedTransactionsDataTable $dataTable)
    {
        return view('failed');

    }

    public function successfulTransV(SuccessfulTransactionDataTable $dataTable)
    {

         return view('successful');

    }

    public function dashboard(){

        return view('dashboard');
    }


    public function search(){

        return view('search');
    }


    public function searchtrans()
    {
        $transQuery = Airtime_Transactions::query()->orderBy('transactionDate', 'desc');

        $start_date = (!empty($_GET["start_date"])) ? ($_GET["start_date"]) : ('');
        $end_date = (!empty($_GET["end_date"])) ? ($_GET["end_date"]) : ('');
        $trackingId = (!empty($_GET["trackid"])) ? ($_GET["trackid"]) : ('');
        $phone =(!empty($_GET["phone"])) ? ($_GET["phone"]) : ('');



        if($start_date && $end_date && $phone){

         $start_date = date('Y-m-d', strtotime($start_date));
         $end_date = date('Y-m-d', strtotime($end_date));

         $transQuery->whereBetween('transactionDate', [$start_date, $end_date])

                    ->where('msisdn', '=', $phone)
                        ->get();
        }else if($start_date && $end_date){

            $start_date = date('Y-m-d', strtotime($start_date));
            $end_date = date('Y-m-d', strtotime($end_date));

            $transQuery->whereBetween('transactionDate', [$start_date, $end_date])

                        ->get();

            }else if($trackingId){

                $transQuery
                ->where('trackingID', '=', $trackingId)

                 ->get();

            }else if($phone){

                $transQuery
                ->where('msisdn', '=', $phone)
                ->get();


            }else if($start_date){
                $start_date = date('Y-m-d', strtotime($start_date));

            $transQuery
            ->where('transactionDate', '=', $start_date)
            ->get();

             }else if($end_date){
            $end_date = date('Y-m-d', strtotime($end_date));
            $transQuery
            ->where('transactionDate', '=', $end_date)
            ->get();

        }
        return datatables()->of($transQuery)
            ->make(true);

    }





    public function failedtrans()
    {
        $transQuery = Airtime_Transactions::where('status', '<>','Vended Successfully')->where('status', '<>', 'Re-Vended Successfully');

        $start_date = (!empty($_GET["start_date"])) ? ($_GET["start_date"]) : ('');
        $end_date = (!empty($_GET["end_date"])) ? ($_GET["end_date"]) : ('');
        $trackingId = (!empty($_GET["trackid"])) ? ($_GET["trackid"]) : ('');
        $phone =(!empty($_GET["phone"])) ? ($_GET["phone"]) : ('');

        if($start_date && $end_date && $phone){

         $start_date = date('Y-m-d', strtotime($start_date));
         $end_date = date('Y-m-d', strtotime($end_date));

         $transQuery->whereBetween('transactionDate', [$start_date, $end_date])

                    ->where('msisdn', '=', $phone)
                        ->get();
        }else if($start_date && $end_date){

            $start_date = date('Y-m-d', strtotime($start_date));
            $end_date = date('Y-m-d', strtotime($end_date));

            $transQuery->whereBetween('transactionDate', [$start_date, $end_date])

                        ->get();


            }else if($trackingId){

                $transQuery
                ->where('trackingID', '=', $trackingId)

                 ->get();

            }else if($phone){

                $transQuery
                ->where('msisdn', '=', $phone)
                ->get();

            }else if($start_date){
                $start_date = date('Y-m-d', strtotime($start_date));

            $transQuery
            ->where('transactionDate', '=', $start_date)
            ->get();

             }else if($end_date){
            $end_date = date('Y-m-d', strtotime($end_date));
            $transQuery
            ->where('transactionDate', '=', $end_date)
            ->get();

        }



        return datatables()->of($transQuery)
            ->make(true);

    }



    public function successfultrans()
    {
        // 129,144
        $transQuery = $transQuery = Airtime_Transactions::whereIn('status', ['Vended Successfully', 'Re-Vended Successfully']);

        $start_date = (!empty($_GET["start_date"])) ? ($_GET["start_date"]) : ('');
        $end_date = (!empty($_GET["end_date"])) ? ($_GET["end_date"]) : ('');
        $trackingId = (!empty($_GET["trackid"])) ? ($_GET["trackid"]) : ('');
        $phone =(!empty($_GET["phone"])) ? ($_GET["phone"]) : ('');

        if($start_date && $end_date && $phone){

         $start_date = date('Y-m-d', strtotime($start_date));
         $end_date = date('Y-m-d', strtotime($end_date));

         $transQuery->whereBetween('transactionDate', [$start_date, $end_date])

                    ->where('msisdn', '=', $phone)
                        ->get();
        }else if($start_date && $end_date){

            $start_date = date('Y-m-d', strtotime($start_date));
            $end_date = date('Y-m-d', strtotime($end_date));

            $transQuery->whereBetween('transactionDate', [$start_date, $end_date])

                        ->get();


            }else if($trackingId){

                $transQuery

                ->where('trackingID', '=', $trackingId)

                 ->get();

            }else if($phone){

                $transQuery
                ->where('msisdn', '=', $phone)
                ->get();

            }else if($start_date){
                $start_date = date('Y-m-d', strtotime($start_date));

            $transQuery
            ->where('transactionDate', '=', $start_date)
            ->get();

             }else if($end_date){
            $end_date = date('Y-m-d', strtotime($end_date));
            $transQuery
            ->where('transactionDate', '=', $end_date)
            ->get();

        }

        return datatables()->of($transQuery)
            ->make(true);

    }


    public function transactionExport(Request $request, Excel $excel){

        if($request->trackid != null && $request->phone == null && $request->start_date == null && $request->end_date == null){

            return $excel->download(new TransactionExport($request->trackid,"0","0","0"),'transactions.xls');

        }else if($request->trackid == null && $request->phone != null  && $request->start_date != null && $request->end_date != null){

            return $excel->download(new TransactionExport("0",$request->phone,$request->start_date,$request->end_date),'transactions.xls');

        }else if($request->trackid == null && $request->phone != null  && $request->start_date == null && $request->end_date == null){

            return $excel->download(new TransactionExport("0",$request->phone,"0","0"),'transactions.xls');

        }else if($request->trackid == null && $request->phone == null  && $request->start_date != null && $request->end_date != null){

            return $excel->download(new TransactionExport("0","0",$request->start_date,$request->end_date),'transactions.xls');

        }else if($request->trackid == null && $request->phone == null  && $request->start_date == null && $request->end_date == null){

            Session::flash('error', "Please select a filter option");

            return redirect()->back()->withInput();

        }else if($request->trackid == null && $request->phone == null  && $request->start_date != null && $request->end_date == null){


            return $excel->download(new TransactionExport("0","0",$request->start_date,"0"),'transactions.xls');


        }else if($request->trackid == null && $request->phone == null  && $request->start_date == null && $request->end_date != null){

            return $excel->download(new TransactionExport("0","0","0",$request->end_date),'transactions.xls');
        }

    }


    public function failedTranExport(Request $request, Excel $excel){


        if($request->trackid != null && $request->phone == null && $request->start_date == null && $request->end_date == null){

            return $excel->download(new FailedExport($request->trackid,"0","0","0"),'transactions.xls');


        }else if($request->trackid == null && $request->phone != null  && $request->start_date != null && $request->end_date != null){

            return $excel->download(new FailedExport("0",$request->phone,$request->start_date,$request->end_date),'transactions.xls');

        }else if($request->trackid == null && $request->phone != null  && $request->start_date == null && $request->end_date == null){

            return $excel->download(new FailedExport("0",$request->phone,"0","0"),'transactions.xls');

        }else if($request->trackid == null && $request->phone == null  && $request->start_date != null && $request->end_date != null){

            return $excel->download(new FailedExport("0","0",$request->start_date,$request->end_date),'transactions.xls');

        }else if($request->trackid == null && $request->phone == null  && $request->start_date == null && $request->end_date == null){

            Session::flash('error', "Please select a filter option");

            return redirect()->back()->withInput();


        }else if($request->trackid == null && $request->phone == null  && $request->start_date != null && $request->end_date == null){


            return $excel->download(new TransactionExport("0","0",$request->start_date,"0"),'transactions.xls');


        }else if($request->trackid == null && $request->phone == null  && $request->start_date == null && $request->end_date != null){

            return $excel->download(new TransactionExport("0","0","0",$request->end_date),'transactions.xls');
        }

    }


    public function successfulTranExport(Request $request, Excel $excel){


        if($request->trackid != null && $request->phone == null && $request->start_date == null && $request->end_date == null){

            return $excel->download(new SuccessfulExport($request->trackid,"0","0","0"),'transactions.xls');


        }else if($request->trackid == null && $request->phone != null  && $request->start_date != null && $request->end_date != null){

            return $excel->download(new SuccessfulExport("0",$request->phone,$request->start_date,$request->end_date),'transactions.xls');

        }else if($request->trackid == null && $request->phone != null  && $request->start_date == null && $request->end_date == null){

            return $excel->download(new SuccessfulExport("0",$request->phone,"0","0"),'transactions.xls');

        }else if($request->trackid == null && $request->phone == null  && $request->start_date != null && $request->end_date != null){

            return $excel->download(new SuccessfulExport("0","0",$request->start_date,$request->end_date),'transactions.xls');

        }else if($request->trackid == null && $request->phone == null  && $request->start_date == null && $request->end_date == null){

            Session::flash('error', "Please select a filter option");

            return redirect()->back()->withInput();


        }else if($request->trackid == null && $request->phone == null  && $request->start_date != null && $request->end_date == null){


            return $excel->download(new TransactionExport("0","0",$request->start_date,"0"),'transactions.xls');


        }else if($request->trackid == null && $request->phone == null  && $request->start_date == null && $request->end_date != null){

            return $excel->download(new TransactionExport("0","0","0",$request->end_date),'transactions.xls');
        }

    }


}
