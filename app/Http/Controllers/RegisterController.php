<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }


    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'username' => 'required|min:3|max:200',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:225'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('sucess', 'Registrasi Berhasil Silahkan Login!');
        
        return redirect('/login');
    }

}