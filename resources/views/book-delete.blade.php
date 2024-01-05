@extends('layouts.mainlayout')

@section('title', 'Delete Book')

@section('content')

<h2>Are You Sure Want To Delete Book{{ $book->title }}??</h2>
<div class="mt-5">
<a href="/book-destroy/{{ $book->slug}}" class="btn btn-success me-5"><i class="bi bi-trash"></i> Sure</a>
<a href="/books" class="btn btn-danger"><i class="bi bi-x-square-fill"> Cancel</i></a>
</div>
@endsection

