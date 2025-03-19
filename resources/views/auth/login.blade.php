@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4 text-center">Login</h2>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf

            <x-input name="email" type="email" label="Email Address" />
            <x-input name="password" type="password" label="Password" />
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>
@endsection
