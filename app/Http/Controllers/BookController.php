<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book',['books'=>$books]);
    }

    public function add()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('book-add',['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_code' => 'required|unique:books|max:255',
            'title' => 'required|max:255',
        ]);

        $newName = ''; // Initialize $newName

        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->timestamp . '-' . $extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;

        $book = Book::create($request->all());
        $book->categories()->sync($request->categories);
        return redirect('books')->with('status','Book Added Successfully');
    }


    public function edit(Request $request, $slug)
    {
        $book = Book::where('slug', $slug)->first();
        $categories = Category::all();

        return view('book-edit',['categories'=>$categories,'book'=>$book]);
    }

    public function update(Request $request, $slug)
    {
        $book = Book::where('slug', $slug)->first();

        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->timestamp . '-' .$extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }

        $book->update($request->all());



        $book->categories()->sync($request->categories);

        return redirect('books')->with('status', 'Book Updated Successfully');
    }

    public function delete($slug)
    {
        $book = Book::where('slug', $slug)->first();

        return view('book-delete',['book'=>$book])->with('status', 'Book Deleted Successfully');
    }

    public function destroy($slug){
        $book = Book::where('slug', $slug)->first();
        $book->delete();
        return redirect('books')->with('status', 'Book Deleted Successfully');
    }
}

