<?php

namespace App\Http\Controllers;
use App\Models\RentLogs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function profile()
    {
        $rentlogs = RentLogs::with(['user', 'book'])->where('user_id', Auth::user()->id)->get();
        return view('profile', ['rent_logs' => $rentlogs]);
    }

    public function index()
    {
        $users = User::where('role_id', 2)->where('status', 'active')->get();

        return view('User', ['users' => $users]);
    }
    //update at : 28/11/2023
    //add function for registed user
    // add  view and routes for registed user
    public function registedUsers(){
        $registeredUsers = User::where('status','inactive')->where('role_id',2)->get();

        return view('registed-users',['registeredUsers' => $registeredUsers]);
    }
    public function show($slug) {
        $user = User::where('slug', $slug)->first();

        // Use parentheses for with method and use the correct variable $user instead of $user_id
        $rentlogs = RentLogs::with(['user', 'book'])->where('user_id', $user->id)->get();

        return view('user-detail', ['user' => $user, 'rent_logs' => $rentlogs]);
    }


    public function approve($slug){

        $user = User::where('slug',$slug)->first();
        $user -> status = 'active';
        $user->save();

        return redirect('user-detail/'.$slug)->with('status','User has been approved');

    }
    public function delete($slug){

        $user = User::where('slug',$slug)->first();
        return view('user-delete',['user' => $user]);
    }
    public function destroy($slug){

        $user = User::where('slug',$slug)->first();
        $user->delete();
        return redirect('users')->with('status','User has been deleted');
    }
    public function bannedUsers(){
        $bannedUsers = User::onlyTrashed()->get();
        return view('users-banned',['bannedUsers' => $bannedUsers]);
    }

    public function restore($slug){

        $user = User::onlyTrashed()->where('slug',$slug)->first();
        $user->restore();
        return redirect('users-banned')->with('status','User has been restored');
    }

}
