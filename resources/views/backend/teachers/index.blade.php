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
    @livewire('teachers.teachers-component')
@endsection
