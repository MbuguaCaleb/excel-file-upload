<?php

namespace App\Imports;

use App\Models\Bank;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsOnError;

class BanksImport implements ToModel,WithHeadingRow,SkipsOnError
{

    use Importable;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        Log::info("row");
        Log::info($row);
        return new Bank([
            'bank_name'=>$row['bank_name'],
            'bank_code'=>$row['bank_code']
        ]);
    }

    public function onError(\Throwable $e)
    {
        // Handle the exception how you'd like.
    }
 
    
}
