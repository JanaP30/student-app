<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">List of subjects</h5>
    

    <table class="table">
  <thead class="thead-light">
    <tr>

      <th scope="col">Subject name</th>
      <th scope="col">Professors name</th>
      <th scope="col">Literature</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
      @foreach($subjects as $subject)
   <tr>
   
    
      <td >{{ $subject->subjectName}}</td>
      <td >{{ $subject->teacher->firstName." ".$subject->teacher->secondName }}</td>
      <td >{{ $subject->literature}}</td>
     
      <td >
      
      <a href="{{ url('/subject/show/'.$subject->id)}}"class="btn btn-sm btn-success">Details</a>
        <a href="{{ url('/subject/edit/'.$subject->id)}}"class="btn btn-sm btn-info">Edit</a>
        <a href="{{ url('/subject/destroy/'.$subject->id)}}"class="btn btn-sm btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach

   
  </tbody>

</table>
  <div class="text-center">
      {{ $subjects->links() }}
    </div>

  </div>
</div>