@extends('layout')
 @section('content')

 <div class = "container-fluid mt-4">
     <div>
         <a class="btn btn-primary" href="/teacher/create">Create New Teacher</a>
     </div>
          <div class = "row">

            <selection class="col-md-12">
               @include("teacher.teacherlist")
            </selection>
           <selection class="col" ><section>
            </div>
       </div>
 @endsection('content')