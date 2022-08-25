@extends('layout.scaffold')
@section('content')
<style>
    body{
        background-color: black;
    }
    label{
        color:white;
    }
</style>
<div class="container mt-5">
    <div class="row">
            <div class="col-md-12">
                    <a href="{{route('religions.index')}}" class="btn btn-success float-right mb-2"> VIEW ALL</a>
            </div>
            @if(Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            </div>
            @endif
    </div>
    <div class="card" style="border:4px groove #28a745">
        <h5 class="card-header bg-success text-light text-center"><b>ADD NEW RELIGION</b></h5>
        <div class="card-body " style="background-color: black;">
            <form action="{{route('religions.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="mt-3 col-md-12">
                        <label for="name"><b>Name</b></label>
                        <input type="text" name="name" required class="form-control"style="border:3px groove #28a745" value="{{old('name')}}">
                    </div>
                    <div class="mt-3 col-md-12">
                        <label><b>Status</b></label>
                        <select name="status"  class="form-control"style="border:3px groove #28a745" value="{{old('status')}}">
                            <option value="">Please Select</option>
                            <option value="1" @if(old("status") == 1) selected @endif>Active</option>
                            <option value="0" @if(old("status") == 0) selected @endif>Deactive</option>
                        </select>
                        <small class="text-danger">@error('status')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-12 mt-3">
                        <button type="submit" class="btn btn-success btn-block">ADD NEW</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
</div>
@endsection