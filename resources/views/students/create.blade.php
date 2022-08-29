@extends('layout.scaffold')
@section('content')
<style>
    body{
        background-color: lightgrey;
    }
</style>
    <div class="container">
        <div class="col-md-12">
            <a href="{{route('students.index')}}" class="btn btn-primary float-right mb-2"> Back to table</a>
        </div>
        <div class="card mt-5">
            <div class="card-header">
                <h2 class="text-center">Student Form</h2>
            </div>
            <div class="card-body">
                <form action="{{route('students.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="text-center">
                    <img src="{{asset('assets/img/th.jpg')}}" alt="th" width="10%">
                </div>
                    <div class="row">
                        <div class="mt-3 col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" value="{{old('name')}}" name="name">
                            <small class="text-danger">@error('name'){{$message}} @enderror</small>
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" value="{{old('age')}}" name="age">
                            <small class="text-danger">@error('age'){{$message}} @enderror</small>
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" value="{{old('email')}}" name="email">
                            <small class="text-danger">@error('email'){{$message}} @enderror</small>
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" value="{{old('phone')}}" name="phone">
                            <small class="text-danger">@error('phone'){{$message}} @enderror</small>
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="country">Country</label>
                            <select name="country" class="form-control" value="{{old('country')}}">
                                <option value="">Please Select</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">@error('country'){{$message}} @enderror</small>
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="teacher">Teacher</label>
                            <select name="teacher" class="form-control" value="{{old('teacher')}}">
                                <option value="">Please Select</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">@error('teacher'){{$message}} @enderror</small>
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="religion">Religion</label>
                            <select name="religion" class="form-control" value="{{old('religion')}}">
                                <option value="">Please Select</option>
                                @foreach($religions as $religion)
                                    <option value="{{ $religion->id }}">{{ $religion->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-danger">@error('religion'){{$message}} @enderror</small>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="student">Student pic</label>
                            <input type="file" class="form-control" name="student" value="{{old('student')}}">
                            <small class="text-danger">@error('student'){{$message}} @enderror</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection