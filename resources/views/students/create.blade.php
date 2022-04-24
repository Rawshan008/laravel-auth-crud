@extends('layout.app')
@section('content')
  <form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name">
      
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>
    <div class="mb-3">
      <label for="class" class="form-label">Class</label>
      <input type="text" name="class" class="form-control @error('class') is-invalid @enderror" id="class" placeholder="class">
      
      @error('class')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>

    <div class="mb-3">
      <label for="roll" class="form-label">Roll</label>
      <input type="text" name="roll" class="form-control @error('roll') is-invalid @enderror" id="roll" placeholder="roll">
      
      @error('roll')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>

    <div class="mb-3">
      <label for="address" class="form-label">Address</label>

      <textarea name="address" id="address" cols="30" rows="10" class="form-control @error('address') is-invalid @enderror" placeholder="Address" ></textarea>
      
      @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror

    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection