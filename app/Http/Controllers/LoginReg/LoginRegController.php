<?php

namespace App\Http\Controllers\LoginReg;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\AuthModel;
use App\models\FileModel;
use App\DataTables;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\ResetMail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Crypt;
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
            
                $data=array($fullname,$image);
                
             $request->session()->put("data",$data);
            
             return view('website.UserProfile');
             
        }
        else{
            // return view('website.Home');
        }


}

    public function dataTab(Request $request)
    {  if($request->ajax()){
        $data=AuthModel::all();
        return \DataTables::of($data)->addColumn('action', function($data){
            $button = "<button type='button' id='$data->id' class='btn btn-primary edit'>
            Edit
          </button>";
            $button .= "&nbsp;<button type='button' id='$data->id' class='btn btn-primary delete'>
            delete
          </button>";
            return $button;
        })
        ->rawColumns(['action'])->make(true);
    }
    //return redirect('/log');
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
             $data=array($fullname,$name);
             $request->session()->put("data",$data);
              $obj->save();
             $obj1->save();
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
        $da=Session::get('data');
        print_r($da);
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

   }
