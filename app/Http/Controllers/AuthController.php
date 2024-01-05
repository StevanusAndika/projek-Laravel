<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        // Cek apakah login benar/tidak
        if (Auth::attempt($credentials)) {
            // Cek status user apakah status user = active atau tidak
            if (Auth::user()->status != 'active') {
                //buat session dan tendang ke halaman login kembali
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not active yet. Please contact stevcomp58@gmail.com for account Activation!');
                return redirect('/login');
            }
              $request->session()->regenerate();
            // Jika login berhasil



            if (Auth::user()->role_id == 1) {
                //jika role id 1 = admin, maka redirect ke dashboard
                 return redirect('/dashboard');

            }
            if (Auth::user()->role_id == 2) {
                //jika role id 1 = admin, maka redirect ke dashboard
                 return redirect('/profile');

            }

            //return redirect('/dashboard'); // Ganti '/dashboard' dengan URL yang sesuai
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Login Invalid!');
        return redirect('/login');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
       return redirect('/');

    }
    public function registerProcess(Request $request)
{
    $validated = $request->validate([
        'username' => 'required|unique:users|max:255',
        'password' => 'required|max:255',
        'phone' => 'max:255',
        'address' => 'required',
    ]);

    // Hash the password and set it in the $validated array
    $validated['password'] = Hash::make($validated['password']);

    // Create the user
    $user = User::create($validated);

    // Flash message
    Session::flash('status', 'success');
    Session::flash('message', 'Register Sucessfully!.Please contact administrator for  your account activation!!');
    return redirect('register');

}

public function  information (){

    return view('information');
}

public function  information2 (){
return view('information');
}

}
