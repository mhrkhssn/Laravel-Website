<?php

namespace App\Exports;

use App\Models\Customers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Carbon;

class CustomersExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function  __construct($web_id)
    {
        $this->web_id= $web_id;
    }
    public function collection()
    {
        $mytime =   Carbon\Carbon::now('Asia/Karachi');
        $dateWise = $mytime->toDateString();
        return Customers::where('created_at','>',$dateWise)->where('web_id',$this->web_id)->get();
        // return Customers::all();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Mobile No',
        ];
    }

    public function map($customers): array
    {
        return [
            $customers->name,
            $customers->mobile_no,
        ];
    }
}
