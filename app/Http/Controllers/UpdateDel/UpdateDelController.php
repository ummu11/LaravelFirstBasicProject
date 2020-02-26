<?php

namespace App\Http\Controllers\UpdateDel;

use Illuminate\Contracts\Auth\Access\Authorizable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\AuthModel;
use App\models\FileModel;
use App\DataTables;
use Session;


class UpdateDelController extends Controller
{
    public function up($id){
        if(request()->ajax())
        {
            $data=Session::get('data');
            $editinguser=AuthModel::find($data[2]);
            if($editinguser->hasPermissionTo('edit')){

                $edituserdata = AuthModel::find($id);

            if($edituserdata->hasRole('admin')){
                return response()->json(['result' => "1"]);
            }
             return response()->json(['result' => $edituserdata]);

        }
        else{
            return response()->json(['result' =>"2"]);
        }
    }
    }
    public function del($id)
    {

        if(request()->ajax())
        { 

            $data=Session::get('data');
            $deletinguser=AuthModel::find($data[2]);
           
            if($deletinguser->hasPermissionTo('delete')){
                        $user=AuthModel::find($id);
                        $res=$user->getRoleNames();
                        if(!empty($res)){
                                for($i=0;$i<count($res);$i++){
                                $user->removeRole($res[$i]);
                                }
                            }
            FileModel::where('id',$id)->delete();
            AuthModel::where('id', $id)->delete();
            return response()->json(['result' => '1']);

        }
        else{
            
            return response()->json(['result' => '2']);
        }
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
