@extends('layout.app')
@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2>All Student</h2>
        @auth
        <a href="#" class="btn btn-info">Add Student</a>
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
                <tr>
                    <td>1</td>
                    <td>Rawshan</td>
                    <td>Ten</td>
                    <td>0222</td>
                    <td>Narail</td>
                    @auth
                    <td>
                        <a href="" class="btn btn-sm btn-primary d-inline-block">Edit</a>
                        <a href="" class="btn btn-sm btn-danger d-inline-block">Delete</a>
                    </td>
                    @endauth
                </tr>
                <tr>
                    <td>1</td>
                    <td>Rahim</td>
                    <td>Nine</td>
                    <td>0222</td>
                    <td>Narail</td>
                    @auth
                    <td>
                        <a href="" class="btn btn-sm btn-primary d-inline-block">Edit</a>
                        <a href="" class="btn btn-sm btn-danger d-inline-block">Delete</a>
                    </td>
                    @endauth
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
@endsection