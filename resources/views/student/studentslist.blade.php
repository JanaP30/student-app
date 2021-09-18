
<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    

    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First name</th>
      <th scope="col">Second name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
      @foreach($students as $student)
   <tr>
   
      <td >{{ $student->cne}}</td>
      <td >{{ $student->firstName}}</td>
      <td >{{ $student->secondName}}</td>
      <td >{{ $student->age}}</td>
      <td >{{ $student->speciality}}</td>
      <td >
      
      <a href="{{ url('/student/show/'.$student->id)}}"class="btn btn-sm btn-success">Details</a>
        <a href="{{ url('/student/edit/'.$student->id)}}"class="btn btn-sm btn-info">Edit</a>
      </td>

    </tr>
    @endforeach

   
  </tbody>

</table>
  <div class="text-center">
      {{ $students->links() }}
    </div>

  </div>
</div>











