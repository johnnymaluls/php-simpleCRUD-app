<?php 
include("../config/db_connect.php");


    if(isset($_POST['delete']))
    {
        $ID = $_POST['ID'];
        
        $sql="DELETE FROM employee2 WHERE ID='$ID'";
        $result= mysqli_query($conn,$sql);
        $redirect="../index.php";
        die("<script type='text/javascript'>window.location.href='$redirect';</script>");
        exit;
       
       
    }

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
    $("#deleteModal").modal({
            backdrop: 'static',
            keyboard: false
        });

  });
</script>
</head>
<body>

<!-- Modal -->
<div class="modal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete?
      </div>
      <div class="modal-footer">

        <form action = "delete.php" method = "POST">
          <input type="hidden" name="ID" value="<?php echo $ID=$_GET['ID'];?>">
          <a href="../index.php" class="btn btn-secondary" >Close</a>
          <button class = "btn btn-primary" name = "delete">Yes</button>
        </form>
        
      </div>
    </div>
  </div>
</div>


