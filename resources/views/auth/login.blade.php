@extends('layout.app')
@section('content')
  <form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
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
      <a href="{{ route('password.request') }}">Forget Password?</a>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> 
@endsection