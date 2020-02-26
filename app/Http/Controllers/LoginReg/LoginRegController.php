<?php

namespace App\Http\Controllers\LoginReg;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\AuthModel;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\models\FileModel;
use Spatie\Permission\Traits\HasRoles;
use App\DataTables;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Contracts\Auth\Access\Authorizable;
use App\Mail\ResetMail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Auth\AuthManager;
use DateTime;
use Validator;
use Session;

class LoginRegController extends Controller
{
    
    public function Log(Request $request)
    {
        if(request()->ajax()){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if ($validator->fails()) {


			return response()->json(['error'=>$validator->errors()]); 
        }
        else{
            $email=$request->input('email');
            $pass=$request->input('password');
            $us = AuthModel::where('email', $email)->first();
            if(empty($us)){
                return response()->json(['error'=>['email'=>'Enter Registered Email']]);
            }else{
            if($pass!=$us->password){
                return response()->json(['error'=>['password'=>'wrong password']]);
            }
            else{
            return response()->json(['success'=>'true']);
            }
        }
        }
    }
        $email=$request->input('email');
        $pass=$request->input('password');
        $us = AuthModel::where('email', $email)->first();
        if($pass==$us->password){
            $id=$us->id;
           
            $secdata = FileModel::find($id);
            
            $image=$secdata->photo;
            
             $fullname=$us->firstname." ".$us->lastname;
            
                $data=array($fullname,$image,$us->id);
                
             $request->session()->put("data",$data);
            
             return redirect()->route('profile');
             
        }
        else{
            // return view('website.Home');
        }


}

    public function dataTab(Request $request)
    { 

        $data=AuthModel::all();
        return \DataTables::of($data)->addColumn('action', function($data){
            $userinfo=Session::get('data');
            $userdata=AuthModel::find($userinfo[2]);

                $res=$userdata->hasRole(['admin']);
                if($res==1){
            $button = "<span><button type='button' id='$data->id' class='btn btn-primary edit'>
            Edit
          </button>";
            $button .= "&nbsp;<button type='button' id='$data->id' class='btn btn-primary delete'>
            delete
          </button>";
           
            $button .= "&nbsp;<button type='button' data-toggle='modal' data-target='#Rolemodel ' id='$data->id' class='btn btn-primary assignbtn'>
            assign
          </button>";
          return $button;
                }
            
        })
        ->rawColumns(['action'])->make(true);

   
    }

    public function Reg(Request $request)
    {     
        if(request()->ajax()){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'firstname' => 'required',
            'lastname' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'file' => 'required',
            'phone' => 'required',
            'confirmpassword' => 'required|same:password',
            

        ]);
        if ($validator->fails()) {


			return response()->json(['error'=>$validator->errors()]); 
        }
       else{
        $dob = new DateTime($request->input('dob'));
       $now=new DateTime();
       $difference = $now->diff($dob);
       $age = $difference->y;
        if($age<18){
            return response()->json(['error'=>['dob'=>'Enter Valid Age']]);
        }
        $email=$request->input('email');
        $us = AuthModel::where('email', $email)->first();
        if(!empty($us)){
            return response()->json(['error'=>['email'=>'Email already registered']]);
        }else{
        return response()->json(['success'=> 'true']);  
       }
    }
    }
            
             $file=$request->file('file');
            $name =time().time().'.'.$file->getClientOriginalExtension();  
            $target_path    =   public_path('/userimages/');
             $file->move($target_path, $name);
             $obj=new AuthModel();
             $obj1=new FileModel();
             $obj->firstname=$request->input('firstname');
              $obj->lastname=$request->input('lastname');
              $obj->email=$request->input('email');
              $obj->password=$request->input('password');
             $obj->dob= $request->input('dob');
             $obj->gender= $request->input('gender');
              $obj->status='A';
              $obj1->photo= $name;
             $obj1->phone= $request->input('phone');
             $fullname=$obj->firstname." ".$obj->lastname;

              $obj->save();
             $obj1->save();
             $data=array($fullname,$name,$obj->id);
             $request->session()->put("data",$data);
             $data=array(
                 'email'=>$request->input('email'),
                 'password'=>$request->input('password')
             );
              Mail::to($request->input('email'))->send(new SendMail($data));
             return redirect('/userprofile');
                


    }

    public function check(Request $request)
    {
        $da=Session::get('data');
        if(empty($da)){
            return view('website.Home');
        }
        else{
            return redirect('/usergo');
        }
    }
    public function reset(Request $request){
        if(request()->ajax()){
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
            ]);
    
    
            if ($validator->fails()) {
    
    
                return response()->json(['error'=>$validator->errors()]); 
            }
            else{
                $email=$request->input('email');
                $us = AuthModel::where('email', $email)->first();
                if(empty($us)){
                    return response()->json(['error'=>['email'=>'Enter Registered Email']]);
                }
                else{
                return response()->json(['success'=>'true']);
                }
            }

            }
            $email = Crypt::encryptString($request->email);
        $data=URL::temporarySignedRoute(
            'change', now()->addMinutes(30), ['user'=>$email]
        ); 
        $us = AuthModel::where('email', $request->email)->first();
        if(!empty($us)){
        Mail::to($request->input('email'))->send(new ResetMail($data));}
        
        return redirect('/');
    }
    public function logout(){
        Session::flush();
        return redirect('/');
    }
    public function change(Request $request){
        
        if(request()->ajax()){
            $validator = Validator::make($request->all(), [
                'password' => 'required',
                'confirmpassword' => 'required|same:password',
            ]);
    
    
            if ($validator->fails()) {
    
    
                return response()->json(['error'=>$validator->errors()]); 
            }
            else{
                return response()->json(['success'=>'true']);
                }
            }

            $temp=$request->input('email');
            $email = Crypt::decryptString($temp);
            $password=$request->input('cpassword');
            $us = AuthModel::where('email', $email)->first();
            $us->password=$password;
            $us->save();
            return view('website.Home');
        }
public function test(){
    $encrypted = Crypt::encryptString('Hello world.');

    $decrypted = Crypt::decryptString($encrypted);
    echo($decrypted);
}
public function profilecheck(){
    $da=Session::get('data');
    if(empty($da)){
        return redirect('/');
    }
    else{
        return view('website.UserProfile');
    }
}
public function assign(Request $request){
    $assuserinfo=Session::get('data');
    $assigningroleuser=AuthModel::find($assuserinfo[2]);
    $res=$assigningroleuser->hasRole('admin');
    if($res==1){
    $role=$request->role;
    $userdata=AuthModel::find($request->id);
    $res=$userdata->hasRole($role);
    if($res==1){
        return response()->json(['success'=>'Already Assigned']);
    }
    else{
        $userdata->assignRole($role);
        return response()->json(['success'=>'Assigned Successfully']);   
    }
}
else{
    return response()->json(['success'=>'you do not have permission']);
}
    

}
public function createroleper(){

    $role=Role::find(1);
    $role->givePermissionTo('edit');

}
public function Ap(){
    return response()->json(AuthModel::get(), 200);
}
public function senddata(Request $request){
return response()->json(['success'=>'sucess'], 200);
}

   }
