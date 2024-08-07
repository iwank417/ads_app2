<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'username' => 'required|min:5|max:255|unique:users,username',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:5|max:255'
         ]);
         
         $validatedData['password']=bcrypt($validatedData['password']);
         User::create($validatedData);
         $request->session()->flash('success','registrasi berhasil silahkan login');
         return redirect('/login');
    }
    
}
