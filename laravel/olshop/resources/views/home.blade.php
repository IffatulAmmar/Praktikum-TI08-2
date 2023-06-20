@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center">Hello {{ Auth::user()->name }}, Selamat Anda berhasil registrasi</h2>
            <h4 class="text-center">Silahkan logout untuk masuk ke dashboard</h4>
        </div>
    </div>
</div>
@endsection
