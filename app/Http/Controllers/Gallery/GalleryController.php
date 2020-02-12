<?php

namespace App\Http\Controllers\Gallery;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\AuthModel;
use App\models\GalleryModel;
use App\models\GallerImageModel;
use Session;
use Validator;
class GalleryController extends Controller
{
    public function upload(Request $request)
    {
        if(request()->ajax()){
            $validator = Validator::make($request->all(), [
                'file' => 'required',
                'Category' => 'required',
            ]);
    
    
            if ($validator->fails()) {
    
                
                return response()->json(['error'=>$validator->errors()]); 
            }
            else{
                return response()->json(['success'=>'true']);
            }
        }
        $image=$request->file('file');
        $name = time().time().'.'.$image->getClientOriginalExtension();
        $destinationPath =public_path('Gallery/');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$name);
        $obj=new GalleryModel();
        $obj1=new GallerImageModel();
        $obj1->image=$name;
        $obj->image_category=$request->input('Category');
        $obj1->image_category=$request->input('Category');
        $obj->save();
        $obj1->save();
        return view('website.Gallery');

    }
    public function show(){

        return view('website.Gallery');
    }
    public function photodata($id){
        $data=GallerImageModel::all()->where('image_category',$id);
return view('website.Image',['data'=>$data]);
    }
}
