@extends('layout.scaffold')
@section('content')
<style>
    body{
        background-color: lightgrey;
    }
</style>
    <div class="container">
        <h1 class="text-center mt-3"><b>COUNTRY TABLE</b></h1>
        <div class="row">
            <div class="col-md-12 mb-3 mt-3 ">
                <a href="{{route('countries.create')}}" class="btn btn-success float-right">Add more table</a>
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
                        <th>Country</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Population</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td style="width:10%"><img class="rounded img-thumbnail" src="{{asset('upload/flag/'.$country->flag)}}" alt="" width="100%"></td>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->code }}</td>
                        <td>{{ $country->population }}</td>
                        <td>
                            @if($country->status == 1)
                            <span class="text-success">Active</span>
                            @else
                            <span class="text-danger">Deactive</span>
                            @endif
                        </td>
                        <td>
                            <a style="text-decoration: none;" href="{{route('countries.edit',$country->id)}}"><img src="{{asset('assets/img/b_edit.png')}}" alt="b_edit"> Edit</a>
                            &nbsp;|&nbsp;
                            <a style="text-decoration: none;" href="{{route('countries.delete',$country->id)}}"><img src="{{asset('assets/img/b_drop.png')}}" alt="b_drop"> Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection