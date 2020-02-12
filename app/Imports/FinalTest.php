<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\TestingModel;
class FinalTest implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public $data;
    public function collection(Collection $collection)
    {   $notimported=array();
        $wholedata=array();
        $count=0;
        $uploadcount=0;
        $obj=new TestingModel;
        foreach($collection as $row){
            if(filter_var($row[3], FILTER_VALIDATE_EMAIL)){
            $data= TestingModel::where('email',$row[3])->first();;
           
            if(empty($data)){
                $obj->firstname=$row[1];
                $obj->lastname=$row[2];
                $obj->email=$row[3];
                $obj->password=$row[4];
                $obj->save();
                $uploadcount++;

            }else{

                $notimported[$count]=$row;
                $count++;
                
            }
         }
        
        }
        $wholedata[0]=$uploadcount;
        $wholedata[1]=$notimported;
        $this->data=$wholedata;

    }

}
