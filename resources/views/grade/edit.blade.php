@extends('layout')
 @section('content')
 <div class = "container-fluid mt-4">
    <div class = "row">
        <selection class="col-md-5" >
           <div class="card mb-3">
          
                <div class="card-body">
                    <h5 class="card-title">Updates informations of grade</h5>

    
                </div>
            </div>

            <form action="{{url('/grade/update/'.$grade->id)}}"method="post">
               @csrf
               <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Student_id</label>
                            <select name="student_id" id="">
                                <option selected value="{{$grade->student_id}}"> {{ $grade->student->firstName." ".$grade->student->secondName}}</strong></p></option>
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
                    <option selected value="{{$grade->grade}}"> {{ $grade->getGrade()}}</strong></p></option>
                        @foreach($grades as $key => $value)
                        <option value="{{$key}}"> {{ $value }} </option>
                        @endforeach
                    </select>
                </div>
                
                <input type="submit" class="btn btn-info" value="Update">
                <input type="reset" class="btn btn-warning" value="Reset">
            </form>
        </selection>
    <div>
   </div>














 @endsection('content')