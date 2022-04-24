@extends('layout.app')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2>All Student</h2>
        @if (session('success'))
          <div class="alert alert-success" role="alert">
            {{ session('success') }}
          </div>
        @endif
        @auth
        <a href="{{ route('students.create') }}" class="btn btn-info">Add Student</a>
        @endauth

        
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Roll</th>
                    <th>Address</th>
                    @auth
                    <th>Action</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
              @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->roll }}</td>
                    <td>{{ $student->address }}</td>
                    @auth
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-primary d-inline-block">Edit</a>
                        <form class="d-inline-block" action="{{ route('students.destroy', $student->id) }}" method="post">
                          @csrf
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" class="btn btn-sm btn-danger d-inline-block">
                              delete
                          </button>
                        </form>
                    </td>
                    @endauth
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection