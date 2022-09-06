<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ImagesController extends Controller
{
    public function index(){
        try{
            $images = Image::get();
            return view('backend.images.index',compact('images'));
        }catch (\Exception $exception){
            Alert::error('error msg',$exception->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id){
        try{
            $image = Image::where('id',$id)->first();
            if($image){
                return view('backend.images.edit',compact('image'));
            }else{
                toast('image not found','danger');
                return redirect()->back();
            }
        }catch (\Exception $exception){
            Alert::error('error msg',$exception->getMessage());
            return redirect()->back();
        }
    }
}
