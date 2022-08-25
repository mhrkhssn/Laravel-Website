<?php

namespace App\Imports;

use App\Models\Customers;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon;
class CustomersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function  __construct($web_id)
    {
        $this->web_id= $web_id;
    }
    public function model(array $row)
    {
        $mytime =   Carbon\Carbon::now('Asia/Karachi');
        $dateTime = $mytime->toDateTimeString();
        $lastSixDays = Carbon\Carbon::now()->subDays(6);
        $lastSixDays = $lastSixDays->toDateString();
        $data = Customers::where('mobile_no', $row[2])->where('created_at','>', $lastSixDays)->first();
        if (!$data) {
        return new Customers([
            'name'     => $row[0],
            'web_id'    => $this->web_id,
            'mobile_no'    => $row[2],
            'created_at'    => $dateTime,
        ]);
        }
    }
}
