<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    //
    public function getLogin(){
        return view("backend/login");
    }
    
    public function postLogin(LoginRequest $LoginRequest){
        $email = $LoginRequest->email;
        $password = $LoginRequest->password;
        // Kiem tra xem tai khoan co ton tai trong db không ?
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            // $request->session()->put("email", $request->email);
            return redirect("/admin");
        }
        else{
            return redirect()->back()->withErrors("Tài khoản không hợp lệ !");
        }
    }
}
