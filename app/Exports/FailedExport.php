<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Airtime_Transactions;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\FromQuery;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;
use App\Models\User;


class FailedExport extends DefaultValueBinder implements FromQuery,  WithCustomValueBinder
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

        $transQuery = Airtime_Transactions::where('status', '<>','Vended Successfully')->where('status', '<>', 'Re-Vended Successfully');

if(!empty($this->trackingId) && $this->phone == "0" && $this->from_date == "0" && $this->to_date == 0){

    return $transQuery->where('trackingID',  $this->trackingId);

}else if($this->trackingId == "0" && !empty($this->phone) && !empty($this->from_date) && !empty( $this->to_date)){

    return  $transQuery->where('msisdn',  $this->phone)->whereBetween('transactionDate', [$this->from_date, $this->to_date]);

}else if($this->trackingId == "0" && !empty($this->phone) && $this->from_date == "0" && $this->to_date == "0"){

 //phone

 return  $transQuery->where('msisdn',  $this->phone);

}else if($this->trackingId =="0" && $this->phone == "0" && !empty($this->from_date) && !empty( $this->to_date)){

//date
return  $transQuery->whereBetween('transactionDate', [$this->from_date, $this->to_date]);

}if($this->trackingId =="0" && $this->phone == "0" && !empty($this->from_date) && $this->to_date == "0"){

    return $transQuery->where('transactionDate',  $this->from_date);

}if($this->trackingId =="0" && $this->phone == "0" &&  $this->from_date == "0"  && !empty($this->to_date)){

    return $transQuery->where('transactionDate', $this->to_date);

}if($this->trackingId =="0" && $this->phone == "0" && $this->from_date == "0" && $this->to_date == "0"){

    return $transQuery->limit(100);
}

}


    public function bindValue(Cell $cell, $value)
    {
        if (is_numeric($value)) {

            $cell->setValueExplicit($value, DataType::TYPE_STRING);

            return true;
        }

        // else return default behavior
        return parent::bindValue($cell, $value);
    }



}
