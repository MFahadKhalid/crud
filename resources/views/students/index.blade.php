@extends('layout.scaffold')
@section('content')
<style>
    body{
        background-color: lightgrey;
    }
</style>
    <div class="container">
    <h1 class="text-center mt-3"><b>STUDENT TABLE</b></h1>
        <div class="row">
            <div class="col-md-12 mb-3 mt-3">
                <a href="{{route('students.create')}}" class="btn btn-success float-right">Add more table</a>
            </div>
            @if(Session::has('success'))
            <div class="col-md-12">
                <div class="alert alert-success">{{Session::get('success')}}</div>
            </div>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Country</th>
                        <th>Teacher</th>
                        <th>Religion</th>
                        <th>Student pic</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                        @foreach($students as $student)
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->country }}</td>
                        <td>{{ $student->teacher }}</td>
                        <td>{{ $student->religion }}</td>
                        <td>{{ $student->student }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection