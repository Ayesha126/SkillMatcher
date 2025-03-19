@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4 text-center">Register</h2>
        <form action="{{ route('register.post') }}" method="POST">
            @csrf

            <x-input name="name" type="text" label="Full Name" />
            <x-input name="email" type="email" label="Email Address" />
            <x-input name="phone" type="text" label="Phone Number" />
            <x-input name="password" type="password" label="Password" />
            

            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>
</div>
@endsection
