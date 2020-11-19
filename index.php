
<?php 
include('config/db_connect.php');
include('templates/add.php');
?>


<!DOCTYPE html>
<html>
<!--INCLUDE BOOTSTRAP AND DATA TABLE-->
<?php 
include('templates/head.php'); 
?>
<body>
<header>
<?php include('templates/navbar.php') ?>
</header>
<main>
	<div class = "container-fluid">
		
		<div class = "row">
			<div class ="col-md-12 ">
			<?php include('templates/datatable.php'); ?>
			</div>
		</div>
	</div>
		
</main>
</body>
</html>


<body>



<?php include('templates/footer.php'); ?>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<!-- DATATABLES JS -->
<script type="text/javascript" src = "https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src = "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src = "https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>