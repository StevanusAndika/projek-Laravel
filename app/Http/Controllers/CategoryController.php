<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(){

        $categories = Category::orderBy('name', 'asc')->get();

        return view('category',['categories'=>$categories]);
    }
    public function add(){
       return view('category-add');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);
        $category = Category::create($request->all());
        return redirect('categories')->with('status', 'Category added successfully');
    }

    public function edit(Request $request, $slug){
        $category = Category::where('slug', $slug)->first();
       return view('category-edit',['category'=>$category]);
    }

    public function update(Request $request, $slug){
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',

        ]);
        $category = Category::where('slug', $slug)->first();
        //buat nilai menjadi null dahulu
        $category->slug=null;
        //kemudian update
        $category->update($request->all());
        return redirect('categories')->with('status', 'Category updated successfully');
    }

    public function delete($slug){
     $category = Category::where('slug', $slug)->first();
     return view('category-delete',['category'=>$category]);

    }

    public function destroy($slug){
          $category = Category::where('slug', $slug)->first();
          $category->delete();
          return redirect('categories')->with('status', 'Category deleted successfully');
    }

    public function deletedCategory()
{
    // Mengambil daftar kategori yang sudah dihapus secara lembut
    $deletedCategories = Category::onlyTrashed()->get();


    // Mengirimkan data kategori yang sudah dihapus ke view
    return view('category-deleted-list', ['deletedCategories' => $deletedCategories]);

}
public function restore($slug){
    $category = Category::withTrashed()->where('slug', $slug)->first();
    $category->restore();
    return redirect('categories')->with('status', 'Category restored successfully');
}

}
