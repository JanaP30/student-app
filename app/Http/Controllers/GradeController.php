<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Http\Requests\StoreGradeRequest;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::paginate(4);
        $data = [
            'grades'=>$grades
        ];
        return view('grade.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $subjects = Subject::all();
       $students = Student::all();
       $grades = Grade::getGrades();
       $data = [
           'subjects'=> $subjects,
           'students'=> $students,
           'grades'=> $grades
       ];
       
        return view('grade.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGradeRequest $request)
    
    {
        $grades = new Grade();

        $grades ->subject_id = $request -> input ('subject_id');
        $grades->student_id = $request -> input ('student_id');
        $grades->grade= $request->input('grade');
        $grades->save();
        return redirect('/grade')->withSuccess('You have successfully created a grade');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grade = Grade::findOrFail($id);
        $data = [
            'grades'=>$grade
        ];
        return view('grade.show',$data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grade = Grade::findOrFail($id);
        $subjects = Subject::all();
        $students = Student::all();
        $grades = Grade::getGrades();

        $data = [
            'grade'=>$grade,
            'subjects'=>$subjects,
            'students'=>$students,
            'grades'=>$grades
        ];
        return view('grade.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->input());
        $grade = Grade::findOrFail($id); 
        $grade->update([
            
            'subject_id' => $request -> input ('subject_id'),
            'student_id' => $request -> input ('student_id'),
            'grade' =>  $request -> input ('grade'),
         
        ]);
        return redirect('/grade')->withSuccess('You have successfully updated a grade');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $id)
    {
        $grades = Grade::findOrFail($id);
        $grades->delete();
        return redirect('/grade')->withSuccess("You have successfully deleted grade");
    }
}