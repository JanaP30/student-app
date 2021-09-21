@extends('layout')
 @section('content')

 <div class="col-2">
    <a href="/grade" class="btn btn-dark" >Back to grade</a>
 </div>
 <div class= "card">
 

     <div class="row">
        <div class="col-6">
            <p>Student_id</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $grades->student->firstName." ".$grades->student->secondName}}</strong></p>

        </div>
     </div>
     <div class="row">
        <div class="col-6">
            <p>Subject_id</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $grades->subject->subjectName}}</strong></p>

        </div>
     </div>
     <div class="row">
        <div class="col-6">
            <p>Grade</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $grades->getGrade()}}</strong></p>

        </div>
     </div>
     
     </div>
     

 </div>









 @endsection('content')