<?php

namespace App\Http\Controllers\upload;
use App\Imports\TestImport;
use App\Imports\FinalTest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use Validator;
class UploadExcelController extends Controller
{
    public function UploadExcel(Request $request)
    {
        if(request()->ajax()){
            $validator = Validator::make($request->all(), [

                'file' => 'required',
                
    
            ]);
            if ($validator->fails()) {
    
    
                return response()->json(['error'=>$validator->errors()]); 
            }
           else{
            return response()->json(['success'=> 'true']);  
           }
        }
        $path=$request->file('file')->getRealPath();
        $import=new FinalTest;
        Excel::import($import,$path);
        $data=$import->data;
        // print_r($import->data);
        return view('website.Test',['wholedata'=>$data]);
    }
}
