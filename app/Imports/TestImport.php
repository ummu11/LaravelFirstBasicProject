<?php

namespace App\Imports;

use App\TestingModel;
use Maatwebsite\Excel\Concerns\ToModel;

class TestImport implements ToModel
{
   public $notimported;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

       $data= TestingModel::where('email',$row[3])->first();
       if(empty($data)){
                return new TestingModel([
      
           'firstname'=>$row[1],
           'lastname'=>$row[2],
           'email'=>$row[3],
           'password'=>$row[4]
        ]);
       }
       else{
         $this->notimported=array(
         'firstname'=>$row[1],
         'lastname'=>$row[2],
         'email'=>$row[3],
         'password'=>$row[4]);        
       }

    }
   
  

}
