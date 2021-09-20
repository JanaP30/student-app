@extends('layout')
 @section('content')

 <div class = "container-fluid mt-4">
             <div class = "row">

             <div class="card mb-3">
        
            <div class="card-body">
                <h5 class="card-title">Enter the information of the subject</h5>

                <form action="{{url('/subject/store')}}" method="post">
                 @csrf
                <div class="row">
                    
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Subject Name</label>
                            <input name="subjectName" type="text" class="form-control" placeholder="Enter the subject name">
                        </div>   
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label>Professor Name</label>
                    <select name="teacher_id" id="">
                        @foreach($teachers as $teacher)
                        <option value="{{$teacher->id}}"> {{ $teacher->firstName . ' ' . $teacher->secondName}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Literature</label>
                    <input name="literature" type="text" class="form-control" placeholder="Enter the literature">
                </div>
                
                   
                </div>
                <input type="submit" class="btn btn-info" value="Save">
                <input type="reset" class="btn btn-info" value="Reset">
            </form>
                
            </div>
            </div>