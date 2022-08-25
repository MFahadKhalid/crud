@extends('layout.scaffold')
@section('content')
<style>
    body{
        background-color: lightgrey;
    }
</style>
    <div class="container">
    <h1 class="text-center mt-3"><b>TEACHER TABLE</b></h1>
        <div class="row">
            <div class="col-md-12 mb-3 mt-3">
                <a href="{{route('teachers.create')}}" class="btn btn-success float-right">Add more table</a>
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
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->phone }}</td>
                        <td>
                            @if($teacher->status == 1)
                            <span class="text-success">Active</span>
                            @else
                            <span class="text-danger">Deactive</span>
                            @endif
                        </td>
                        <td>
                            <a style="text-decoration: none;"  href="{{route('teachers.edit',$teacher->id)}}"><img src="{{asset('assets/img/b_edit.png')}}" alt="b_edit"> Edit</a>
                            &nbsp;|&nbsp;
                            <a style="text-decoration: none;"  href="{{route('teachers.delete',$teacher->id)}}"><img src="{{asset('assets/img/b_drop.png')}}" alt="b_drop"> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection