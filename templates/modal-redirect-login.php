<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>LOGIN FIRST</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $("#myModal").modal({
            backdrop: 'static',
            keyboard: false
        });

  });
</script>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">SORRY YOU ARE NOT LOGGED IN</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
        <p>Please Log in first.</p>
                <form>
                    
                    <a href="../login.php" class="btn btn-primary">Login</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>