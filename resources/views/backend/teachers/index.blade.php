<?php
$num = 0;
?>
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
                        <th>{{$table['id']}}</th>
                        <th>{{$table['name']}}</th>
                        <th>{{$table['phone']}}</th>
                        <th>{{$table['email']}}</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @isset($teachers)
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{++$num}}</td>
                                <td>{{$teacher->firstname}} {{$teacher->lastname}}</td>
                                <td>{{$teacher->phone}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>
                                    <a href="{{route('teacher.show' , $teacher->id)}}" class="btn btn-sm "><i class="mdi mdi-pen"></i></a>
                                    <button class="btn btn-sm "><i class="mdi mdi-eye"></i></button>
                                    <button class="btn btn-sm "><i class="fa fa-trash-can"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>
            </table>
        </div>
    </div>
@endsection
