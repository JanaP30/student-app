<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSubjectRequest;
use App\Models\Teacher;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $subjects = Subject::paginate(4);
        $data = [
            'subjects'=>$subjects
        ];
        return view('subject.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $teachers = Teacher::all();
       $data = [
           'teachers' => $teachers
       ];
       
        return view('subject.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubjectRequest $request)
    
    {
        $subject = new Subject();

        $subject ->subjectName = $request -> input ('subjectName');
        $subject->teacher_id = $request -> input ('teacher_id');
        $subject->literature = $request->input('literature');
        $subject ->save();
        return redirect('/subject')->withSuccess('You have successfully created a subject');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        $data = [
            'subject'=>$subject
        ];
        return view('subject.show',$data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        $data = [
            'subject'=>$subject
        ];
        return view('subject.edit',$data);
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
        $subject = Subject::findOrFail($id); 
        $subject->update([
            
            'subjectName' => $request -> input ('firstName'),
            'professorName' => $request -> input ('professorName'),
            'literature' =>  $request -> input ('literature'),
          
        ]);
        return redirect('/subject')->withSuccess('You have successfully updated a subject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return redirect('/subject')->withSuccess("You have successfully deleted subject");
    }
}
