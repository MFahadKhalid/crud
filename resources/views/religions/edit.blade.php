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
                    <a href="{{route('religions.index')}}" class="btn btn-primary float-right mb-2"> VIEW ALL</a>
            </div>
            @if(Session::has('error'))
            <div class="col-md-12">
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            </div>
            @endif
    </div>
    <div class="card">
        <h5 class="card-header">Edit Religion</h5>
        <div class="card-body">
            <form action="{{route('religions.update',$religion->id)}}" method="POST">
                @csrf
                <div class="row">
                <div class="mt-3 col-md-12">
                        <label for="name">Name</label>
                        <input type="text" name="name" required class="form-control" value="{{$religion->name}}">
                    </div>
                    <div class="mt-3 col-md-12">
                        <label>Status</label>
                        <select name="status"  class="form-control" value="{{$religion->status}}">
                            <option value="">Please Select</option>
                            <option value="1" @if(old("status",$religion->status) == 1) selected @endif>Active</option>
                            <option value="0" @if(old("status",$religion->status) == 0) selected @endif>Deactive</option>
                        </select>
                        <small class="text-danger">@error('status')  {{$message}} @enderror</small>
                    </div>
                    <div class="mt-3 col-md-12 mt-3">
                        <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
</div>
@endsection