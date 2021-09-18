@extends('layout')
 @section('content')
 <div class = "container-fluid mt-4">
    <div class = "row">
        <selection class="col-md-5" >
           <div class="card mb-3">
          
                <div class="card-body">
                    <h5 class="card-title">Updates informations of students</h5>

    
                </div>
            </div>

            <form action="{{url('/student/update/'.$student->id)}}"method="post">
               @csrf
               <div class="form-group"> 
                   <label>CNE</label>
                   <input value="{{$student->cne}}"name="cne" type="text" class="form-control" placeholder="Enter cne">
                </div>  
                <div class="form-group"> 
                   <label>First Name</label>
                   <input value="{{$student->firstName}}"name="firstName" type="text" class="form-control" placeholder="Enter the First name">
                </div>
                <div class="form-group"> 
                   <label>Second Name</label>
                   <input value="{{$student->secondName}}"name="secondName" type="text" class="form-control" placeholder="Enter the Second name">
                </div>
                <div class="form-group"> 
                   <label>Age</label>
                   <input value="{{$student->age}}"name="age" type="text" class="form-control" placeholder="Enter the Age">
                </div>
                <div class="form-group"> 
                   <label>Speciality</label>
                   <input value="{{$student->speciality}}"name="speciality" type="text" class="form-control" placeholder="Enter the Speciality">
                </div>
                <input type="submit" class="btn btn-info" value="Update">
                <input type="reset" class="btn btn-warning" value="Reset">
            </form>
        </selection>
    <div>
   </div>














 @endsection('content')