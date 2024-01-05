<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\RentLogs;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;




class BookRentController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', 1)->where('status', 'active')->get();
        $books = Book::all();
        return view('book-rent', ['users' => $users, 'books' => $books]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
        ]);

        $request['rent_date'] = Carbon::now()->toDateString();
        $request['return_date'] = Carbon::now()->addDays(7)->toDateString();

        // Retrieve the book using findOrFail
        $book = Book::findOrFail($request->book_id);

        if($book ['status'] == ' in stock'){
            Session::flash('message', 'Book is already rented');
            Session::flash('alert-class', 'alert-danger');
            return redirect('book-rent');

        }
        // jika user sudah lebih dari 3 buku
        else {

           $count = RentLogs::where('user_id', $request->user_id)->where('actual_return_date', null)->count();
           if($count >= 3){
               Session::flash('message', 'You can not rent more than 3 books');
               Session::flash('alert-class', 'alert-danger');
               return redirect('book-rent');
           }
           else{
            DB::beginTransaction();
           try {

                RentLogs::create($request->all());
                $book->where('id', $request->book_id, ['status' => ' in stock'])->update(['status' => ' not available']);
                DB::commit();
                Session::flash('message', 'Book rented successfully');
                Session::flash('alert-class', 'alert-success');
                return redirect('book-rent');
                }
                catch(\Exception $e){
                DB::rollBack();
                Session::flash('message', 'Something went wrong. Please try again.');


           }
        }
           }


        }
        public function returnBook(Request $request){
            $users = User::where('id', '!=', 1)->where('status', 'active')->get();
            $books = Book::all();

            return view('return-book', ['users' => $users, 'books' => $books]);
        }

        public function saveReturnBook(Request $request)
        {
            // user dan buku yang dipilih untuk direturn adalah benar, maka berhasil return
            // user dan buku yang dipilih untuk direturn tidak benar, maka gagal return
            $rent = RentLogs::where('user_id', $request->user_id)
                            ->where('book_id', $request->book_id)
                            ->where('actual_return_date',null);

                            $rentData = $rent->first();
                            $countData = $rent->count();


            if ($countData == 1){

                //berhasil mengembalikan buku
                $rentData->actual_return_date = Carbon::now()->toDateString();
                $rentData->save();
                 // Display success message
                 Session::flash('message', 'Book returned successfully');
                 Session::flash('alert-class', 'alert-success');
                 return redirect('book-return');

                // Update the book status to "in stock"
                $book = Book::find($request->book_id);
                $book->status = 'in stock';
                $book->save();


                } else {
                // Display error message
                Session::flash('message', 'Failed to return book');
                Session::flash('alert-class', 'alert-danger');
                return redirect('book-return');
                }


        }

    }


