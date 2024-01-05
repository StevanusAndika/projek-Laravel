@extends('layouts.mainlayout')

@section('title', 'Book Return')

@section('content')


<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">

<h1 class="mb-5">Book Return</h1>

<hr>


    <div class="mt-5">
        @if (session('message'))
            <div class="alert {{ session('alert-class')}}">
                {{ session('message') }}
            </div>

        @endif

    <form action="book-return" method="post"> <!-- Replace 'your-route-name' with the actual route name -->

        @csrf
        <div class="mb-3">
            <label for="user" class="form-label">User</label>
            <select name="user_id" id="user" class="form-control inputbox">
                <option value="">Select User</option>

                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->username }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="book" class="form-label">Book</label>
            <select name="book_id" id="book" class="form-control inputbox">
                <option value="">Select Book</option>

                @foreach ($books as $book)
                <option value="{{ $book->id }}">{{ $book->book_code . ' - ' . $book->title }}</option>

                @endforeach
            </select>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include select2 CSS and JS files -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<!-- Initialize select2 for the 'user' and 'book' dropdowns -->
<script>
    $(document).ready(function() {
        $('.inputbox').select2();
    });
</script>

@endsection
