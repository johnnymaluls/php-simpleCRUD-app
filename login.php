
<?php 
include('config/db_connect.php'); 
include('content/modal.php');

//SESSION START
	session_start();

//IF SESSION IS SET REDIRECT 
	if(isset($_SESSION["ID"])) {
	$redirect="index.php";
        die("<script type='text/javascript'>window.location.href='$redirect';</script>");
        exit; 
    }

//IF SUBMIT IS CLICKED
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM tb_users WHERE Username = '$username' AND Password = '$password'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	print_r($row);
	if(is_array($row)) {
		$_SESSION['Username'] = $row['Username'];
		$_SESSION['ID'] = $row['id'];
		//echo '<script>alert("NICE ONE")</script>'; 
		//IF SESSION IS SET REDIRECT 
		$redirect="index.php";
	        die("<script type='text/javascript'>window.location.href='$redirect';</script>");
	        exit; 
    
	}
	else {
		//$redirect="templates/modal-redirect-wrongcred.php";
        //die("<script type='text/javascript'>window.location.href='$redirect';</script>");
        //exit; 
    echo "<script>jQuery(document).ready(function(){jQuery(\"#myModal\").modal({backdrop: 'static',keyboard: false});});</script>";

	}

}


?>

<!DOCTYPE html>
<html>
<head>
	<!-- BOOTSTRAP  -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- LOGIN CSS  -->
	<link rel="stylesheet" type="text/css" href="styles/login.css">


  </head>
  <body>
  <!--LOG IN -->
<div class="sidenav">
         <div class="login-main-text">
            <h2>CRUD with <br>PHP, MySQL and Bootstrap<br></h2>
            <br>
            <p>Username : johnrey</p>
            <p>Password : 12345</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action = "login.php" method = "POST">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name = "username" required>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name = "password" required>
                  </div>
                  <button type="submit" class="btn btn-black" name = "submit">Login</button>
               </form>
            </div>
         </div>
      </div>
  <!--END OF LOG IN -->
</body>
  <!--MODAL -->
  <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">INVALID USERNAME OR PASSWORD</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <p>The username or password you’ve entered is incorrect..</p>
  
            </div>
              <div class="modal-footer">
                <a href="login.php" class="btn btn-secondary">Close</a>
                <a href="login.php" class="btn btn-primary">Try Again</a>
              </div>

        </div>
    </div>
</div>

  <!--END OF MODAL -->
</html>


<body>



<?php include('templates/footer.php'); ?>
</body>
</html>