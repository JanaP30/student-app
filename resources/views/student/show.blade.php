@extends('layout')
 @section('content')

 <div class="col-2">
    <a href="/students" class="btn btn-dark" >Back to students</a>
 </div>
 <div class= "card">
 

     <div class="row">
        <div class="col-6">
            <p>First Name</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $student->firstName }}</strong></p>

        </div>
     </div>
     <div class="row">
        <div class="col-6">
            <p>Second Name</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $student->secondName }}</strong></p>

        </div>
     </div>
     <div class="row">
        <div class="col-6">
            <p> Age</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $student->age }}</strong></p>

        </div>
     </div>
     <div class="row">
        <div class="col-6">
            <p>Speciality</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $student->speciality }}</strong></p>

        </div>
     </div>
     <div class="row">
        <div class="col-6">
            <p>Cne</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $student->cne }}</strong></p>

        </div>
     </div>
            <selection class="col-md-12">
               @include("grade.gradelist")
            </selection>
           <selection class="col" ><section>

 </div>









 @endsection('content')