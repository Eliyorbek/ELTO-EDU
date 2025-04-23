<?php
$num = 0;
?>
<div>
    <div class="card">
        <div class="card-header">
           <div class="row">
                <div class="col-11">
                    <input type="search" wire:model.live="search" class="form-control col-10">
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
                        <th>№</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
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
                                <td class="d-flex">
                                    <a href="{{route('teacher.show' , $teacher->id)}}" class="btn btn-sm "><i class="mdi mdi-pen"></i></a>
                                    <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#teacherModal{{ $teacher->id }}">
                                        <i class="mdi mdi-eye"></i>
                                    </button>
                                    <form action="{{route('teacher.delete', $teacher->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm "><i class="fa fa-trash-can"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                </tbody>

            </table>
            @if(isset($teachers))
                {{$teachers->links()}}
            @endif
            @include('livewire.teachers.show')

        </div>
    </div>
</div>
