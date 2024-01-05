@extends('layouts.mainlayout')
@section('title', 'Book')

@section('content')

<div class="container">
    <h1 class="mt-5">Book List</h1>
    <hr>
    <div class="mt-3 d-flex justify-content-end">
        <a href="book-add" class="btn btn-primary"><i class="bi bi-plus"></i> Add Data Books</a>
    </div>

    @if (session('status'))
    <div class="alert alert-success mt-3">
        {{ session('status') }}
    </div>
    @endif

    <div class="mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Code</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->book_code }}</td>
                    <td>{{ $item->title }}</td>
                    <td>
                        @foreach ($item->categories as $category)
                        {{ $category->name }}<br>
                        @endforeach
                    </td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <a href="/book-edit/{{ $item->slug}}"><i class="bi bi-pencil"></i> Edit</a>
                        <a href="/book-delete/{{ $item->slug}}"><i class="bi bi-trash"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
