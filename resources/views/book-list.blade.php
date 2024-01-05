@extends('layouts.mainlayout')
@section('title', 'Books Pages')

@section('content')
<style>
    .card:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease-in-out;
    }
</style>

<form action="" method="get">
<div class="row">
    <div class="col-12 col-sm-6">
    <select name="category" id="category" class="form-control">
        <option value="">Select Category</option>
        @foreach ($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    </div>
    <div class="col-12 col-sm-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search Book's Title..." name="title" id="title">
            <button class="btn btn-primary" type="submit">Search</button>
          </div>


    </div>
</div>
</form>
<div class="my-5">
    <div class="row">
        @foreach ($books as $book)
            <div class="col-lg-3 col-md-4 sm-6 mb-3">
                <div class="card h-100" id="bookCard{{$book->id}}">
                    <img draggable="false" class="card-img-top" src="{{ asset($book->cover ? 'storage/cover/'.$book->cover : 'images/default.webp') }}" alt="Cover Book" style="height: 200px; width: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{$book->title}}</h5>
                        <p class="card-text">{{$book->book_code}}</p>
                        <p class="card-text"></p>
                        <p class="card-text text-end fw-bold {{$book->status == 'in stock' ? 'text-success' : 'text-danger'}}">
                            {{$book->status == 'in stock' ? 'In Stock' : 'Not Available'}}


                        </p>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
