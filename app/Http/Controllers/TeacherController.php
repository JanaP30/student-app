<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = Teacher::paginate(4);
        $data = [
            'teachers'=>$teacher
        ];
        return view('teacher.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'genders' => Teacher::getGenders()
        ];
        return view('teacher.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {
        $teacher = new Teacher();
       
        $teacher ->firstName = $request -> input ('firstName');
        $teacher->secondName = $request -> input ('secondName');
        $teacher->email = $request->input('email');
        $teacher -> gender = $request -> input ('gender');
        $teacher ->save();
        return redirect('/teacher')->withSuccess('You have successfully created a teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        $data = [
            'teacher'=>$teacher,
            'subjects'=>$teacher->subjects()->paginate(4)
        ];
        return view('teacher.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        $data = [
            'teacher'=>$teacher
        ];
        return view('teacher.edit',$data);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->input());
        $teacher = Teacher::findOrFail($id); 
        $teacher->update([
            
            'firstName' => $request -> input ('firstName'),
            'secondName' => $request -> input ('secondName'),
            'email' =>  $request -> input ('email'),
            'gender' => $request -> input ('gender')
        ]);
        return redirect('/teacher')->withSuccess('You have successfully updated a teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return redirect('/teacher')->withSuccess("You have successfully deleted teacher");
    }


    public function export() 
    {
        return Excel::download(new TeacherExport, 'teacher.xlsx');
    }


}
