<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teachers\TeacherRequest;
use App\Http\Resources\Teachers\TeachersResource;
use App\Models\Teacher;
use App\Services\Teachers\TeachersService;
use Illuminate\Http\Request;

class TeachersControllers extends Controller
{
    public function __construct(protected TeachersService $teachers){
        $this->teachers = $teachers;
    }
    public function index()
    {
        $teachers = $this->teachers->getAll();
        $table = [
            'id'=>'№',
            'name'=>'Fullname',
            'phone'=>'phone',
            'email'=>'email',

        ];
        return view('backend.teachers.index' , compact('teachers' ,  'table'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        $data = $this->teachers->createTeacher($request->all());

        return redirect()->route('teacher.index')->with('save' , 'Muvofaqqiyatli saqlandi!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = new TeachersResource(Teacher::findOrFail($id));
        $teacher = $teacher->toArray(request());
        return view('backend.teachers.update' , compact('teacher'))->with('update' , 'Malumotni o\'zgartirmoqchimisiz');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
