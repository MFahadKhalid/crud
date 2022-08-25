@extends('layout.scaffold')
@section('content')
<style>
    body{
        background-color: lightgrey;
    }
</style>
    <div class="container">
    <h1 class="text-center mt-3"><b>RELIGION TABLE</b></h1>
        <div class="row">
            <div class="col-md-12 mb-3 mt-3">
                <a href="{{route('religions.create')}}" class="btn btn-success float-right">Add more table</a>
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
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($religions as $religion)
                    <tr>
                        <td>{{ $religion->id }}</td>
                        <td>{{ $religion->name }}</td>
                        <td>
                            @if($religion->status == 1)
                            <span class="text-success">Active</span>
                            @else
                            <span class="text-danger">Deactive</span>
                            @endif
                        </td>
                        <td>
                            <a style="text-decoration: none;"  href="{{route('religions.edit',$religion->id)}}"><img src="{{asset('assets/img/b_edit.png')}}" alt="b_edit"> Edit</a>
                            &nbsp;|&nbsp;
                            <a style="text-decoration: none;"  href="{{route('religions.delete',$religion->id)}}"><img src="{{asset('assets/img/b_drop.png')}}" alt="b_drop"> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection