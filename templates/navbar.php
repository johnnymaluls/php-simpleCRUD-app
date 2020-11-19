<?php 
session_start();

if(empty($_SESSION['ID'])) {  

  $redirect="templates/modal-redirect-login.php";
        die("<script type='text/javascript'>window.location.href='$redirect';</script>");
        exit; 
    }
	//echo "SORRY YOU ARE NOT LOGGED-IN";
    //echo "<a href='login.php'>"."<br>"."Please Log-in First"."</a>";
	//exit;
 


//SESSION USERNAME TO DISPLAY IN NAVBAR
$name = $_SESSION['Username'] ?? 'Guest';
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand" href="#">
            Simple CRUD with PHP,MySQL and Bootstrap
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
        <ul class="navbar-nav ml-auto flex-nowrap">
          <li>
            <a class = "btn btn-primary" data-toggle="modal" data-target="#AddModal">Add new user</a>
          </li>
          <!--
            <li class = "nav-link">
            Hello <?php echo htmlspecialchars($name); ?>
          </li>

          -->
          
          <li class="nav-item">
            <a  class="nav-link" data-toggle="modal" data-target="#exampleModal">LOGOUT</a>
          </li>
        </ul>
    </div>
</nav>

<!-- Modal LOGOUT -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to Logout?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="logout.php" class="btn btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div>

