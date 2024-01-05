@extends('layouts.mainlayout')

@section('title', 'Edit Category')

@section('content')
<h1>Edit Category</h1>
<hr>

<div class="mt-5 w-50">
    @if($errors->any())
    <script>
        var errorMessage = '';
        //lakukan foreach untuk menampilkan semua error
        @foreach ($errors->all() as $error)
           // menambahkan error ke variabel errorMessage
            errorMessage += '{{ $error }}\n';
        @endforeach

        // Menampilkan pesan kesalahan dalam pop-up
        alert(errorMessage);
    </script>
@endif

    <form action="/category-edit/{{ $category->slug}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control"placeholder="Category Name" value="{{ $category->name }}">
        </div>
        <!-- Tambahkan tombol "Submit" atau "Save" di sini -->
       <div class="mt-3">
        <button class="btn btn-success"type="submit"><i class="bi bi-clipboard-check-fill"> Update</i></button>
       </div>
    </form>
</div>
@endsection
