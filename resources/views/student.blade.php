
 @extends('layout')
 @section('content')

<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Managment System</h1>
    </div>
</div>

    @if ($layout =='index')
       
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
@endsection('content')