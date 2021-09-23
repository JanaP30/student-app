@extends('layout')
 @section('content')

 <div class = "container-fluid mt-4">
     <div>
         <a class="btn btn-primary" href="/grade/create">Create New Grade</a>
         <a class="btn btn-primary" href="/grade/export">Export Grade</a>
     </div>
          <div class = "row">

            <selection class="col-md-12">
               @include("grade.gradelist")
            </selection>
           <selection class="col" ><section>
            </div>
       </div>
 @endsection('content')