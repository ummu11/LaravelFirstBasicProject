<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\models\AuthModel;

class UsersImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $n=$collection->count();
        for($i=1;$i<$n;$i++){
            print_r($collection[$i]);
        }
    }
}
