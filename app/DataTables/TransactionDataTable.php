<?php

namespace App\DataTables;

use App\Models\Airtime_Transactions;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TransactionDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'transaction.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Transaction $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Airtime_Transactions $model)
    {

         return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     * 134,670 139,617
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        // searching: false, paging: false, info: false
        return $this->builder()
                    ->setTableId('transaction-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->parameters([
                        "searching" => false,
                        "paging" => false,
                    ]);

    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {

        return [
            ['data' => 'trackingID', 'title' => 'Tracking ID'],
            ['data' => 'msisdn', 'title' => 'MSISDN'],
            ['data' => 'amount', 'title' => 'Amount'],
            ['data' => 'status', 'title' => 'Status'],
            ['data' => 'transactionDate', 'title' => 'Transaction Date'],
            ['data' => 'vendDate', 'title' => 'Vend Date']

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Transaction_' . date('YmdHis');
    }
}
