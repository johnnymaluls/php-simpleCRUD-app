<?php  

//CONNECT TO THE DATABASE
$conn = mysqli_connect('localhost','john','HVAXFVBG','training');

//CHECK CONNECTION
if(!$conn) {
  die("ERROR" . mysqli_connect_error());
}


if(isset($_POST['update']))
    {
        $Fname=$_POST['firstname'];
        $Mname=$_POST['middlename'];
        $Lname=$_POST['lastname'];
        $Gender=$_POST['gender'];
        $Birthdate=$_POST['birthdate'];
        $Startdate=$_POST['startdate'];
        $Address=$_POST['address'];

       
        $sql = "INSERT INTO employee2(FName,MName,LName,Gender,Birthdate,Startdate,Address)
        values('$Fname','$Mname','$Lname','$Gender','$Birthdate','$Startdate','$Address')";

      if(mysqli_query($conn,$sql)) {
        $redirect="../index.php";
        die("<script type='text/javascript'>window.location.href='$redirect';</script>");
        exit;
      }

      else {
        echo "Cannot save to database!".$sql."<br>".mysqli_error($conn); 
        mysqli_close($conn);
      }
        
       
       
    }

?>


<!-- Modal ADD -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--FORM UPDATE-->
        <form action = "./templates/add.php" method = "post">
            
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">First Name:</label>
            <input type="text" class="form-control" name = "firstname" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Middle Name:</label>
            <input type="text" class="form-control" name = "middlename" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Last Name:</label>
            <input type="text" class="form-control" name = "lastname" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Gender:</label>
            <input type="text" class="form-control" name = "gender" required >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Birth Date:</label>
            <input type="text" class="form-control" name = "birthdate" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Start Day:</label>
            <input type="text" class="form-control" name = "startdate" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Address:</label>
            <input type="text" class="form-control" name = "address" required>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" name = "update">Save</button>
          </div>

        </form>
        <!--END OF FORM UPDATE-->
      </div>
      
    </div>
  </div>
</div>