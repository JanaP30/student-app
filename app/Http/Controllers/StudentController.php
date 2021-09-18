<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
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
        $student = Student::find($id);
        return view('student',['students'=>$student,'student'=>$student,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'edit']);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->input());
        $student = Student::find($id);
        $student = new Student();
        $student-> cne = $request -> input ('cne');
        $student -> firstName = $request -> input ('firstName');
        $student -> secondName = $request -> input ('secondName');
        $student -> age = $request -> input ('age');
        $student -> speciality = $request -> input ('speciality');
        $student ->save();
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delate();
        return redirect();
    }
}
