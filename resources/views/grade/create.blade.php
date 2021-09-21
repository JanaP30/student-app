@extends('layout')
 @section('content')

 <div class = "container-fluid mt-4">
             <div class = "row">

             <div class="card mb-3">
        
            <div class="card-body">
                <h5 class="card-title">Enter the information of the new grade</h5>

                <form action="{{url('/grade/store')}}" method="post">
                 @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Student_id</label>
                            <select name="student_id" id="">
                        @foreach($students as $student)
                        <option value="{{$student->id}}"> {{ $student->firstName . ' ' . $student->secondName}} </option>
                        @endforeach
                    </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Subject_id</label>
                            <select name="subject_id" id="">
                        @foreach($subjects as $subject)
                        <option value="{{$subject->id}}"> {{$subject->subjectName}} </option>
                        @endforeach
                    </select>
                        </div>   
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label>Grade</label>
                    <select name="grade" id="">
                        @foreach($grades as $key => $value)
                        <option value="{{$key}}"> {{ $value }} </option>
                        @endforeach
                    </select>
                </div>
                
                
                <input type="submit" class="btn btn-info" value="Save">
                <input type="reset" class="btn btn-info" value="Reset">
            </form>
                
            </div>
            </div>