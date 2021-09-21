<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">List of grades</h5>
    

    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Student_id</th>
      <th scope="col">Subject_id</th>
      <th scope="col">Grade</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
      @foreach($grades as $grade)
   <tr>

      <td >{{ $grade->student->firstName." ".$grade->student->secondName}}</td>
      <td >{{ $grade->subject->subjectName}}</td>
      <td >{{ $grade->getGrade()}}</td>
      <td>
      <a href="{{ url('/grade/show/'.$grade->id)}}"class="btn btn-sm btn-success">Details</a>
        <a href="{{ url('/grade/edit/'.$grade->id)}}"class="btn btn-sm btn-info">Edit</a>
        <a href="{{ url('/grade/destroy/'.$grade->id)}}"class="btn btn-sm btn-danger">Delete</a>
      </td>
     
     

    </tr>
    @endforeach

   
  </tbody>

</table>
  <div class="text-center">
      {{ $grades->links() }}
    </div>

  </div>
</div>











