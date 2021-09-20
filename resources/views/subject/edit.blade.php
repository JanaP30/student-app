@extends('layout')
 @section('content')
 <div class = "container-fluid mt-4">
    <div class = "row">
        <selection class="col-md-5" >
           <div class="card mb-3">
          
                <div class="card-body">
                    <h5 class="card-title">Updates information of subject</h5>

    
                </div>
            </div>

            <form action="{{url('/subject/update/'.$subject->id)}}"method="post">
               @csrf
                 
                <div class="form-group"> 
                   <label>First Name</label>
                   <input value="{{$subject->subjectName}}"name="firstName" type="text" class="form-control" placeholder="Enter the Subject name">
                </div>
                <div class="form-group"> 
                   <label>Professor Name</label>
                   <input value="{{$subject->secondName}}"name="subjectName" type="text" class="form-control" placeholder="Enter the Professor name">
                </div>
                <div class="form-group"> 
                   <label>Literature</label>
                   <input value="{{$subject->email}}"name="literature" type="text" class="form-control" placeholder="Enter the literature">
                </div>
                
                <input type="submit" class="btn btn-info" value="Update">
                <input type="reset" class="btn btn-warning" value="Reset">
            </form>
        </selection>
    <div>
   </div>














 @endsection('content')