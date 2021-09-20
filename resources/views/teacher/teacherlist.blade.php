<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">List of teachers</h5>
    

    <table class="table">
  <thead class="thead-light">
    <tr>

      <th scope="col">First name</th>
      <th scope="col">Second name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
      @foreach($teachers as $teacher)
   <tr>
   
    
      <td >{{ $teacher->firstName}}</td>
      <td >{{ $teacher->secondName}}</td>
      <td >{{ $teacher->email}}</td>
      <td >{{ $teacher->getGender()}}</td>
      <td >
      
      <a href="{{ url('/teacher/show/'.$teacher->id)}}"class="btn btn-sm btn-success">Details</a>
        <a href="{{ url('/teacher/edit/'.$teacher->id)}}"class="btn btn-sm btn-info">Edit</a>
        <a href="{{ url('/teacher/destroy/'.$teacher->id)}}"class="btn btn-sm btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach

   
  </tbody>

</table>
  <div class="text-center">
      {{ $teachers->links() }}
    </div>

  </div>
</div>











