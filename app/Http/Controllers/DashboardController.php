<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use App\Models\RentLogs; // Add RentLogs model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        $rentlogs = RentLogs::with(['user', 'book'])->where('user_id', Auth::user()->id)->get();
        $bookCount = Book::count();
        $categoryCount = Category::count();
        $userCount = User::count();

        return view('dashboard', [
            'bookCount' => $bookCount,
            'categoryCount' => $categoryCount,
            'userCount' => $userCount,
            'rentlogs' => $rentlogs, // Pass rentlogs to the view
        ]);
    }
}
