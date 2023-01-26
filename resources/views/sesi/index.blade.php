@extends('layouts.layouts')

@section('konten')

    <div class="w-50 center border rounded px-3 py-3 mx-auto mt-4">
        <div class="text-center">
            <h1>Login</h1>
        </div>
        <form action="sesi/login" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" autocomplete="off" value="{{Session::get('email')}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" autocomplete="off" value="{{Session::get('password')}}">
        </div>
        <div class="mb-3 d-grid">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        </form>
    </div>
@endsection
