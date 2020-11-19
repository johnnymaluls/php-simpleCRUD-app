<?php

include("../config/db_connect.php"); 

  
    if(isset($_POST['ID']))
{   
  $ID=$_POST['ID'];
}
  elseif(isset($_GET['ID']))
{   
  $ID=$_GET['ID'];
}
    else
    {
        echo("ID NOT SET");
    }
   
    if(isset($_POST['update']))
    {
    
        $ID = $_POST['ID'];
        $Fname=$_POST['firstname'];
        $Mname=$_POST['middlename'];
        $Lname=$_POST['lastname'];
        $Address=$_POST['address'];

       
        $sql="UPDATE employee2 SET Fname='$Fname',Mname='$Mname',Lname='$Lname',Address = '$Address' WHERE ID='$ID'";
        mysqli_query($conn,$sql);

        $redirect="../index.php";
        die("<script type='text/javascript'>window.location.href='$redirect';</script>");
        exit;
       
       
    }


   
    
    $sql="SELECT ID,Fname,Mname,Lname,Address from employee2 where ID='$ID'";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
   




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Update</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $("#updateModal").modal({
            backdrop: 'static',
            keyboard: false
        });

  });
</script>
</head>
<body>

<!-- MODAL UPDATE -->
<div class="modal" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!--FORM UPDATE-->
        <form action = "update.php" method = "post">
            <input type="hidden" class="form-control" name = "ID" value="<?php echo $row['ID'];?>">
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">First Name:</label>
            <input type="text" required class="form-control" name = "firstname" value="<?php echo $row['Fname'];?>">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Middle Name:</label>
            <input type="text" required class="form-control" name = "middlename" value="<?php echo $row['Mname'];?>">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Last Name:</label>
            <input type="text" required class="form-control" name = "lastname" value="<?php echo $row['Lname'];?>">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Address:</label>
            <input type="text"  required class="form-control" name = "address" value="<?php echo $row['Address'];?>">
          </div>
          <div class="modal-footer">
            <a href="../index.php" class="btn btn-secondary" >Close</a>
            <button class="btn btn-primary" name = "update">Update</button>
          </div>

        </form>
        <!--END OF FORM UPDATE-->
      </div>
      
    </div>
  </div>
</div>
<!-- END OF MODAL UPDATE -->

