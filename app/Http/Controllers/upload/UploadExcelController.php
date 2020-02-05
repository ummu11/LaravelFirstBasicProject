<?php

namespace App\Http\Controllers\upload;
use App\Imports\UsersImport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;

class UploadExcelController extends Controller
{
    public function UploadExcel(Request $request)
    {
        $path=$request->file('file')->getRealPath();
        Excel::import(new UsersImport,$path);
      

    }
}
