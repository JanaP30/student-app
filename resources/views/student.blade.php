<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <title>Student managment system</title>
  </head>
  <body>
  @include("navbar")

<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Managment System</h1>
    </div>
</div>

    @if ($layout =='index')
       <div class = "container-fluid mt-4">
          <div class = "row">

            <selection class="col-md-7">
               @include("studentslist")
            </selection>
           <selection class="col" ><section>
            </div>
       </div>
    @elseif($layout == 'create')
    <div class = "container-fluid mt-4">
             <div class = "row">
           <selection class="col-md-7">
               @include("studentslist")
            </selection>
            <section class="col-md-5"></section>

             <div class="card mb-3">
            <img src="https://previews.123rf.com/images/andreykuzmin/andreykuzmin1503/andreykuzmin150300015/37204924-funny-smart-kid-in-glasses-reading-book-in-kindergarten.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Enter the information of the new student</h5>

                <form action="{{url('/store')}}" method="post">
            @csrf
                <div class="form-group">
                    <label>CNE</label>
                    <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                </div>
                <div class="form-group">
                    <label>First Name</label>
                    <input name="firstName" type="text" class="form-control" placeholder="Enter the first name">
                </div>   
                <div class="form-group">
                    <label>Second Name</label>
                    <input name="secondName" type="text" class="form-control" placeholder="Enter the second name">
                </div>
                <div class="form-group">
                    <label>Age</label>
                    <input name="age" type="number" class="form-control" placeholder="Enter the Age">
                </div>
                <div class="form-group">
                    <label>Sepeciality</label>
                    <input name="speciality" type="text" class="form-control" placeholder="Enter the Sepeciality">
                </div>
                <input type="submit" class="btn btn-info" value="Save">
                <input type="reset" class="btn btn-info" value="Reset">
            </form>
                
            </div>
            </div>



            
           <selection class="col" >
               <section>
               </div>
       </div>
    @elseif($layout == 'show')
    <div class = "container-fluid mt-4">
    <div class = "row">
           <selection class="col">
               @include("studentslist")
            </selection>
           <selection class="col" ><section>
           </div>
       </div>
    @elseif($layout == 'edit')
    <div class = "container-fluid mt-4">
    <div class = "row">
           <selection class="col-md-7">
               @include("studentslist")
            </selection>
           <selection class="col-md-5" >
           <div class="card mb-3">
          <img src="https://previews.123rf.com/images/andreykuzmin/andreykuzmin1503/andreykuzmin150300015/37204924-funny-smart-kid-in-glasses-reading-book-in-kindergarten.jpg" class="card-img-top" alt="...">
           <div class="card-body">
               <h5 class="card-title">Updates informations of students</h5>

    
        </div>
         </div>

               <form action="{{url('/update/'.$student->id)}}"method="post">
               @csrf
               <div class="form-group"> 
                   <label>CNE</label>
                   <input value="{{$student->cne}}"name="cne" type="text" class="form-control" placeholder="Enter cne">
           </div>  
           <div class="form-group"> 
                   <label>firstName</label>
                   <input value="{{$student->firstName}}"name="firstName" type="text" class="form-control" placeholder="Enter the First name">
           </div>
           <div class="form-group"> 
                   <label>secondName</label>
                   <input value="{{$student->secondName}}"name="secondName" type="text" class="form-control" placeholder="Enter the Second name">
           </div>
           <div class="form-group"> 
                   <label>age</label>
                   <input value="{{$student->age}}"name="age" type="text" class="form-control" placeholder="Enter the Age">
           </div>
           <div class="form-group"> 
                   <label>speciality</label>
                   <input value="{{$student->speciality}}"name="speciality" type="text" class="form-control" placeholder="Enter the Speciality">
           </div>
                <input type="submit" class="btn btn-info" value="Update">
                <input type="reset" class="btn btn-warning" value="Reset">
               </form>
           </selection>
       </div>
       </div>
    @endif
        <footer></footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>