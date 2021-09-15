<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Airtime_Transactions;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromQuery;
use App\Models\User;


class TransactionExport implements FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;


    public function query()
    {
        return Airtime_Transactions::query();

    }
}
