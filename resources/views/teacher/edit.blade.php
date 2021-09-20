@extends('layout')
 @section('content')
 <div class = "container-fluid mt-4">
    <div class = "row">
        <selection class="col-md-5" >
           <div class="card mb-3">
          
                <div class="card-body">
                    <h5 class="card-title">Updates information of teacher</h5>

    
                </div>
            </div>

            <form action="{{url('/teacher/update/'.$teacher->id)}}"method="post">
               @csrf
                 
                <div class="form-group"> 
                   <label>First Name</label>
                   <input value="{{$teacher->firstName}}"name="firstName" type="text" class="form-control" placeholder="Enter the First name">
                </div>
                <div class="form-group"> 
                   <label>Second Name</label>
                   <input value="{{$teacher->secondName}}"name="secondName" type="text" class="form-control" placeholder="Enter the Second name">
                </div>
                <div class="form-group"> 
                   <label>Email</label>
                   <input value="{{$teacher->email}}"name="email" type="text" class="form-control" placeholder="Enter the Email">
                </div>
                <div class="form-group"> 
                   <label>Gender</label>
                   <input value="{{$teacher->gender}}"name="gender" type="text" class="form-control" placeholder="Enter the Gender">
                </div>
                <input type="submit" class="btn btn-info" value="Update">
                <input type="reset" class="btn btn-warning" value="Reset">
            </form>
        </selection>
    <div>
   </div>














 @endsection('content')