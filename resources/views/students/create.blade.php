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
                <div class="text-center">
                    <img src="{{asset('assets/img/th.jpg')}}" alt="th" width="10%">
                </div>
                    <div class="row">
                        <div class="mt-3 col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" name="age">
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" name="phone">
                        </div>
                        <div class="mt-3 col-md-6">
                            <label for="country">Country</label>
                            <select name="country" class="form-control">
                                <option value="">Please Select</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}"></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="student">Student pic</label>
                            <input type="file" class="form-control" name="student">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection