<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('modules/auth/index');
    }

    public function logear(Request $request){
        $credenciales = $request->only("name","password");
        if (Auth::attempt($credenciales)) {
            return redirect()->route('soporte-index');
        } else {
            return back()->withInput($credenciales);
        }
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('auth-login');
    }

    public function nuevo(){
        $item = new User();
        $item->name = 'usuario';
        $item->email = 'email@gmail.com';
        $item->password = Hash::make('12345');
        $item->save();
        return $item;
    }
}
