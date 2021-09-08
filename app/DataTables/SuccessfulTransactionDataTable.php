<?php

namespace App\DataTables;

use App\Models\Airtime_Transactions;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SuccessfulTransactionDataTable extends DataTable
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
            ->addColumn('action', 'successfultransaction.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\SuccessfulTransaction $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Airtime_Transactions $model)
    {
        $trans = Airtime_Transactions::where('status', 'Vended Successfully');
        return $this->applyScopes($trans);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('transaction-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Blftip')
                    ->parameters([
                        'exportable' => true,
                        'printable' => true,
                        "pageLength" =>25,
                    ])
                    ->buttons(
                        Button::make('excel'),
                        Button::make('csv')
                    );
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
        return 'SuccessfulTransaction_' . date('YmdHis');
    }
}
