@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4 text-center">Upload Your Resume</h2>
        
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('resume.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <x-input name="name" type="text" label="Full Name" />
            <x-input name="email" type="email" label="Email Address" />
            
            <div class="mb-3">
                <label for="resume" class="form-label">Upload Resume (PDF/DOC)</label>
                <input type="file" name="resume" id="resume" class="form-control @error('resume') is-invalid @enderror" accept=".pdf,.doc,.docx">
                @error('resume')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Upload Resume</button>
        </form>
    </div>
</div>
@endsection
