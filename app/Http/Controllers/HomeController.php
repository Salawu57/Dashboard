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




}
