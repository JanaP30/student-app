@extends('layout')
 @section('content')

 <div class="col-2">
    <a href="/students" class="btn btn-dark" >Back to subject</a>
 </div>
 <div class= "card">
 

     <div class="row">
        <div class="col-6">
            <p>Subject Name</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $subject->subjectName }}</strong></p>

        </div>
     </div>
     <div class="row">
        <div class="col-6">
            <p>Professor Name</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $subject->teacher->professorName }}</strong></p>

        </div>
     </div>
     <div class="row">
        <div class="col-6">
            <p> Literature</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $subject->literature }}</strong></p>

        </div>
     </div>
     <div class="row">
        <div class="col-6">
           

        </div>
     </div>
     <selection class="col-md-12">
               @include("grade.gradelist")
            </selection>
           <selection class="col" ><section>

 </div>









 @endsection('content')