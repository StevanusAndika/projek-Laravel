@extends('layouts.mainlayout')

@section('title', 'Delete Category')

@section('content')

<h2>Are You Sure Want To Delete Category {{ $category->name }}??</h2>
<div class="mt-5">
<a href="/category-destroy/{{ $category->slug}}" class="btn btn-success me-5"><i class="bi bi-trash"></i> Sure</a>
<a href="/categories" class="btn btn-danger"><i class="bi bi-x-square-fill"> Cancel</i></a>
</div>
@endsection

