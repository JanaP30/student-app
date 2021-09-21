<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">Student Menagement</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="navbar-nav">
          <a class="nav-item nav-link active" href="{{url('/')}}">Home<span class="sr-only"></span></a>
          <a class="nav-item nav-link active" href="{{url('/students')}}">Students</a>
          <a class="nav-item nav-link active" href="{{url('/teacher')}}">Teachers</a>
          <a class="nav-item nav-link active" href="{{url('/subject')}}">Subject</a>
          <a class="nav-item nav-link active" href="{{url('/grade')}}">Grade</a>
    </div>
  </div>
</nav>