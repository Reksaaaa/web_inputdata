@extends('loyauts.main')

@section('container')
    <div class="containers text-start m-5">
        <h1> Selamat Datang, {{ Auth::user()->name }}</h1>
    </div>
@endsection
