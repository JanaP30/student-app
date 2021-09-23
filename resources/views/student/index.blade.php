
 @extends('layout')
 @section('content')

 <div class = "container-fluid mt-4">
     <div>
         <a class="btn btn-primary" href="/student/create">Create New Student</a>
         <a class="btn btn-primary" href="/student/export">Exports Student</a>

     </div>
          <div class = "row">

            <selection class="col-md-12">
               @include("student.studentslist")
            </selection>
           <selection class="col" ><section>
            </div>
       </div>
 @endsection('content')
