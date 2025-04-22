@extends('backend.inc.app')
@section('content')
    <header class="header d-flex justify-content-between" >
        <h1 class="h4">Teacher</h1>
        <div class="left">
            <a href="{{route('dashboard')}}">Home</a> /
            <a href="{{route('teacher.index')}}">Teachers</a> /
            <a href="">Teacher Update</a>
        </div>
    </header>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{route('teacher.update' , $teacher['id'])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Firstname</label>
                                <input type="text" class="form-control" value="{{$teacher['firstname']}}" name="firstname" id="exampleInputName1" placeholder="Firstname">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputName2">Lastname</label>
                                <input type="text" class="form-control" id="exampleInputName2" value="{{$teacher['lastname']}}" name="lastname" placeholder="Lastname">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" value="{{$teacher['email']}}" name="email" placeholder="example@gmail.com">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputPassword4">Password</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword4" placeholder="********">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="phone" name="phone"  placeholder="+998939637074" value="{{$teacher['phone']}}" id="phone" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>File upload</label><br>
                    <img src="{{$teacher['image']}}" width="150px" alt="">
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{route('teacher.index')}}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>

@endsection
