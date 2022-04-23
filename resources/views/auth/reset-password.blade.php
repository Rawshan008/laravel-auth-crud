@extends('layout.app')
@section('content')
  @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
  @endif
  <form action="{{ route('password.update') }}" method="POST">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ $request->email }}">
      @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password">
      @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Confrorm Password</label>
      <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation">

      @error('password_confirmation')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Reset Password</button>
  </form> 
@endsection