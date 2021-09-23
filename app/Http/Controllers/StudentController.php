<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Exports\StudentExport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate(4);
        $data = [
            'students'=>$students
        ];
        return view('student.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $student = new Student();
        $student->cne = $request->input('cne');
        $student ->firstName = $request -> input ('firstName');
        $student->secondName = $request -> input ('secondName');
        $student->age = $request->input('age');
        $student -> speciality = $request -> input ('speciality');
        $student ->save();
        return redirect('/students')->withSuccess('You have successfully created a new student');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        $data = [
            'student'=>$student,
            'grades'=>$student->grades()->paginate(4)

        ];
        return view('student.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $data= [
            'student' => $student
        ];
        return view('student.edit',$data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, $id)
    {
        //dd($request->input());
        $student = Student::findOrFail($id);
        $student->update([
            'cne' => $request -> input ('cne'),
            'firstName' => $request -> input ('firstName'),
            'secondName' => $request -> input ('secondName'),
            'age' =>  $request -> input ('age'),
            'speciality' => $request -> input ('speciality')
        ]);
        return redirect('/students')->withSuccess('You have successfully updated a new student');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/students')->withSuccess("You have successfully deleted student");
    }

    public function export() 
    {
        return Excel::download(new StudentExport, 'student.xlsx');
    }






}
