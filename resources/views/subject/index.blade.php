@extends('layout')
 @section('content')

 <div class = "container-fluid mt-4">
     <div>
         <a class="btn btn-primary" href="/subject/create">Create New Subject</a>
     </div>
          <div class = "row">

            <selection class="col-md-12">
               @include("subject.subjectlist")
            </selection>
           <selection class="col" ><section>
            </div>
       </div>
 @endsection('content')