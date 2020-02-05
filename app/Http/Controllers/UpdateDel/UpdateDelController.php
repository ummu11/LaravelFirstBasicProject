<?php

namespace App\Http\Controllers\UpdateDel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\AuthModel;
use App\models\FileModel;
use App\DataTables;

class UpdateDelController extends Controller
{
    public function up($id){
        if(request()->ajax())
        {
            $data = AuthModel::find($id);
            $data2= FileModel::find($id);
            // die('hiii');
             return response()->json(['result' => $data]);

        }

    }
    public function del($id)
    {
        if(request()->ajax())
        {   FileModel::where('id',$id)->delete();
            AuthModel::where('id', $id)->delete();
            return response()->json(['result' => 'true']);

        }
    }
    public function edit(){
        // print_r($request);
        // echo request()->ajax();
        // echo '---';
        // print_r($_POST);
        // die('hi');
        if(request()->ajax()){
            
            $obj=AuthModel::where('email',$_POST['email'])->get()->first();
             $obj->firstname=$_POST['firstname'];
;
             $obj->lastname=$_POST['lastname'];
             $obj->email=$_POST['email'];
             $obj->password=$_POST['password'];
             $obj->dob= $_POST['dob'];
             $obj->gender= $_POST['gender'];
             
             
            $obj->save();
            
            return response()->json(['result'=>'true']);
        }

    }
}
