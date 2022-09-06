<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login(){
        return view('backend.auth.login');
    }

    public function postLogin(Request $request){
        try{
            if(auth()->guard('web')->attempt(['email' => $request->email,'password' => $request->password])){
                return redirect()->route('albums.index');
            }else{
                Alert::error('error message','Email or password not corrected !');
            }
        }catch (\Exception $exception){
            Alert::error('error msg',$exception->getMessage());
            return redirect()->back();
        }
    }

    public function logout(){
        auth('web')->logout();
        return redirect(route('user.login'));
    }
}
