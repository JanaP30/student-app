@extends('layout')
 @section('content')

 <div class = "container-fluid mt-4">
             <div class = "row">

             <div class="card mb-3">
        
            <div class="card-body">
                <h5 class="card-title">Enter the information of the teacher</h5>

                <form action="{{url('/teacher/store')}}" method="post">
                 @csrf
                <div class="row">
                    
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input name="firstName" type="text" class="form-control" placeholder="Enter the first name">
                        </div>   
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label>Second Name</label>
                    <input name="secondName" type="text" class="form-control" placeholder="Enter the second name">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="text" class="form-control" placeholder="Enter the Email">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" id="">
                        @foreach($genders as $key => $value)
                        <option value="{{$key}}"> {{ $value }} </option>
                        @endforeach
                    </select>
                   
                </div>
                <input type="submit" class="btn btn-info" value="Save">
                <input type="reset" class="btn btn-info" value="Reset">
            </form>
                
            </div>
            </div>