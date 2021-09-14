<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Models\Airtime_Transactions;
use App\DataTables\TransactionDataTable;
use App\DataTables\FailedTransactionsDataTable;
use App\DataTables\TransactionsDataTable;
use App\DataTables\SuccessfulTransactionDataTable;



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
    public function index(TransactionDataTable $dataTable)
    {

        return $dataTable->render('home');

    }

    public function failedTrans(FailedTransactionsDataTable $dataTable)
    {
        return $dataTable->render('failed');

    }

    public function successfulTrans(SuccessfulTransactionDataTable $dataTable)
    {
        return $dataTable->render('successful');

    }

    public function dashboard(){

        return view('dashboard');
    }


    public function search(){

        return view('search');
    }


    public function searchtrans()
    {
        $transQuery = Airtime_Transactions::query();

        $start_date = (!empty($_GET["start_date"])) ? ($_GET["start_date"]) : ('');
        $end_date = (!empty($_GET["end_date"])) ? ($_GET["end_date"]) : ('');
        $trackingId = (!empty($_GET["trackid"])) ? ($_GET["trackid"]) : ('');
        $phone =(!empty($_GET["phone"])) ? ($_GET["phone"]) : ('');

        if($start_date && $end_date && $trackingId && $phone){

         $start_date = date('Y-m-d', strtotime($start_date));
         $end_date = date('Y-m-d', strtotime($end_date));

         $transQuery->whereBetween('transactionDate', [$start_date, $end_date])
                    ->where('trackingID', '=', $trackingId)
                    ->where('msisdn', '=', $phone)
                        ->get();
        }else if($start_date && $end_date){

            $start_date = date('Y-m-d', strtotime($start_date));
            $end_date = date('Y-m-d', strtotime($end_date));

            $transQuery->whereBetween('transactionDate', [$start_date, $end_date])

                        ->get();

            }else if($trackingId && $phone){

            $transQuery
                       ->where('trackingID', '=', $trackingId)
                       ->where('msisdn', '=', $phone)
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




}
