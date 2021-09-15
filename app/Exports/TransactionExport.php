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

    public function __construct(String $trackingId,String $phone, String $from_date, String $to_date)
    {
        $this->trackingId = $trackingId;
        $this->phone = $phone;
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }



    public function query()
    {



        if(!empty($this->trackingId) && $this->phone == "0" && $this->from_date == "0" && $this->to_date == 0){

            return Airtime_Transactions::query()->where('trackingID',  $this->trackingId);

        }else if($this->trackingId == "0" && !empty($this->phone) && !empty($this->from_date) && !empty( $this->to_date)){

            return Airtime_Transactions::query()->where('msisdn',  $this->phone)->whereBetween('transactionDate', [$this->from_date, $this->to_date]);

        }else if($this->trackingId == "0" && !empty($this->phone) && $this->from_date == "0" && $this->to_date == "0"){

         //phone

         return Airtime_Transactions::query()->where('msisdn',  $this->phone);

        }else if($this->trackingId =="0" && $this->phone == "0" && !empty($this->from_date) && !empty( $this->to_date)){

        //date
        return Airtime_Transactions::query()->whereBetween('transactionDate', [$this->from_date, $this->to_date]);

        }



    }
}
