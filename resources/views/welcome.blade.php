@extends('layout.app')
@section('content')

<div class="card">
    <div class="welcome-note p-3">
        <h1 class="mb-3">Welcome to the Student Info</h1>
        <a class="btn btn-primary" href="{{ route('students.index') }}">All Student</a>
    </div>
</div>
    
@endsection