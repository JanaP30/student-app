
 @extends('layout')
 @section('content')

 <div class = "container-fluid mt-4">
             <div class = "row">

             <div class="card mb-3">
        
            <div class="card-body">
                <h5 class="card-title">Enter the information of the new student</h5>

                <form action="{{url('/store')}}" method="post">
                 @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>CNE</label>
                            <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input name="firstName" type="text" class="form-control" placeholder="Enter the first name">
                        </div>   
                    </div>
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



    
               </div>
       </div>
 @endsection('content')