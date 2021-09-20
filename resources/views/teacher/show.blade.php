@extends('layout')
 @section('content')

 <div class="col-2">
    <a href="/students" class="btn btn-dark" >Back to teacher</a>
 </div>
 <div class= "card">
 

     <div class="row">
        <div class="col-6">
            <p>First Name</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $teacher->firstName }}</strong></p>

        </div>
     </div>
     <div class="row">
        <div class="col-6">
            <p>Second Name</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $teacher->secondName }}</strong></p>

        </div>
     </div>
     <div class="row">
        <div class="col-6">
            <p> Email</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $teacher->email }}</strong></p>

        </div>
     </div>
     <div class="row">
        <div class="col-6">
            <p>Gender</p>
        </div>
        <div class="col-6">
            <p><strong>{{ $teacher->gender }}</strong></p>

        </div>
     </div>
     

 </div>









 @endsection('content')