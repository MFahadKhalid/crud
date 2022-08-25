@extends('layout.scaffold')
@section('content')
<style>
    body{
        background-color: lightgrey;
    }
</style>
<div class="container mt-5">
    <div class="row">
            <div class="col-md-12">
                    <a href="{{route('countries.index')}}" class="btn btn-primary float-right mb-2"> VIEW ALL</a>
            </div>
            @if(Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            </div>
            @endif
    </div>
    <div class="card">
        <h5 class="card-header">ADD NEW COUNTRY</h5>
        <div class="card-body">
            <form action="{{route('countries.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                <div class="mt-3 col-md-12">
                        <label for="">Flag</label>
                        <input type="file" name="flag" required class="form-control" value="{{old('flag')}}">
                    </div>
                    <div class="mt-3 col-md-6">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}">
                        <small class="text-danger">@error('name')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-6">
                        <label>Code</label>
                        <input type="code" name="code" class="form-control" value="{{old('code')}}">
                        <small class="text-danger">@error('code')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-6">
                        <label>Population</label>
                        <input type="text" name="population" class="form-control" value="{{old('population')}}">
                        <small class="text-danger">@error('population')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-6">
                        <label>Status</label>
                        <select name="status"  class="form-control" >
                            <option value="">Please Select</option>
                            <option value="1" @if(old("status") == 1) selected @endif>Active</option>
                            <option value="0" @if(old("status") == 0) selected @endif>Deactive</option>
                        </select>
                        <small class="text-danger">@error('status')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-12 mt-3">
                        <button type="submit" class="btn btn-primary btn-block">ADD NEW</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
</div>
@endsection