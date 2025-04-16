@extends('backend.inc.app')
@section('content')
    <header class="header d-flex justify-content-between" >
        <h1 class="h4">Teacher</h1>
        <div class="left">
            <a href="{{route('dashboard')}}">Home</a> /
            <a href="">Teachers</a>
        </div>
    </header>
    <div class="card">
        <div class="card-header">
           <div class="row">
                <div class="col-11">
                    <input type="search" class="form-control col-10">
                </div>
                <div class="col-1">
                    <a  href="{{route('teacher.create')}}" class="btn  btn-primary">Add</a>
                </div>
             </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>{{$table['id']}}</td>
                        <td>{{$table['name']}}</td>
                        <td>{{$table['phone']}}</td>
                        <td>{{$table['email']}}</td>
                        <td>Action</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection