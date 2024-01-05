@extends('layouts.mainlayout')

@section('title', 'Information')

@section('content')
    <div>
        <h1>Contact Information</h1>
        <hr>

        <p>For account activation, book borrowing, and book return, please contact us:</p>

        <ul>
            <li>
                <strong>Email:</strong> <a href="mailto:stevcomp58@gmail.com">stevcomp58@gmail.com</a>
            </li>
            <li>
                <strong>WhatsApp:</strong> <a href="https://wa.me/6289604134028"> +62 896-0413-4028</a>
            </li>
        </ul>

        <h2>Fine for Book Returns</h2>
        <p>The fine for late book returns is IDR 2.000 per day.</p>
        <P>The fine for late book returns is IDR 10.000 per weeks.</P>
        <p>The fine for late book returns is IDR 20.000 per months.</p>
        <p>The fine for late book returns is IDR 50.000 per years.</p>
        <!-- Replace XXX with the actual amount in Indonesian Rupiah -->

    </div>
@endsection

