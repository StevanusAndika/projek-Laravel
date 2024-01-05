@extends('layouts.mainlayout')

@section('title', 'Edit  Books')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<h1>Edit Book</h1>
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

    <form action="{{ route('book-update', $book->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="code" class="form-label">Code</label>
            <input type="text" name="book_code" id="code" class="form-control" value="{{ $book->book_code ?? '' }}" placeholder="Book Code">
        </div>
        <div class="form-group mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $book->title  }}" placeholder="book Title">
        </div>
        </div>

        <div class="form-group mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control"/>
        </div>

        <div class="form-group mb-3">
            <label for="CurrentImage" class="form-label" style="display:block">Current Image</label>
            @if($book->cover != '')
                <img src="{{ asset('storage/cover/'.$book->cover) }}" alt="" width="100px">
            @else
                <img src="{{ asset('storage/cover/default.jpg') }}" alt="" width="100px">
            @endif
        </div>




        <div class="form-group mb-3">
            <label for="category" class="form-label">Category</label>
            <select name="categories[]" id="category" class="form-select select-multiple" multiple>
                @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>

                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="currentCategory" class="form-label">Current Category</label>
            <ul>
                @foreach ($book->categories as $categories)
                <li>{{$categories->name}}</li>

                @endforeach
            </ul>
        </div>
        <!-- Tambahkan tombol "Submit" atau "Save" di sini -->
        <div class="mt-3">
            <button class="btn btn-success"type="submit"><i class="bi bi-clipboard-check-fill"> Update</i></button>
           </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    // Inisialisasi plugin Select2
    $(document).ready(function() {
        $('.select-multiple').select2();
    });
</script>

@endsection
