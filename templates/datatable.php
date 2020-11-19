<?php 

//UPDATE
//<a href="#" data-toggle="modal" data-target="#updateModal"><i class="fas fa-edit btn-edit"></i></a>

//<a href = 'updaterecord.php?ID=".$row['ID']."'"."data-toggle='modal' data-target='#updateModal'><i class='fas fa-edit btn-edit'></i></a>

//DELETE
//<a href="#" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt btn-delete"></i></a>


//COMMENT MUNA
//echo '<td><a href="#" data-toggle="modal" data-target="#updateModal"><i class="fas fa-edit btn-edit"></i></a><a href="#" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt btn-delete"></i></a></td>';


	?>

<table id="example" class="table table-striped table-bordered" style="width:100%">
	
	
	<thead >
		<tr>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>Address</th>
		<th><center>Actions<center></th>
		
		<br>
		</tr>
	</thead>
	<tbody>
		<?php 

		$sql= "SELECT ID,Fname,Mname,Lname,Address FROM employee2";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row =mysqli_fetch_assoc($result)){
				
				echo "<tr>";
				echo "<td>".$row["Fname"]."</td>";
				echo "<td>".$row["Mname"]."</td>";
				echo "<td>".$row["Lname"]."</td>";
				echo "<td>".$row["Address"]."</td>";
				echo "<td><center>
				<a href = 'templates/update.php?ID=".$row['ID']."'"."class='btn btn-primary' name = 'update' data-toggle='tooltip' data-placement='left' title='Edit User Details'><i class='far fa-edit'></i></a>
				<a href = 'templates/delete.php?ID=".$row['ID']."'"."class='btn btn-danger' name = 'update' data-toggle='tooltip' data-placement='right' title='Delete User'><i class='far fa-trash-alt'></i></a>
				</center>
				</td>";	

			}
		}
		else 
		{
			echo '<script>alert("NO RESULT")</script>'; 

		}

		 ?>
						
						
	</tbody>
	 <tfoot>
            <tr>
                <th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th><center>Actions</center></th>
            </tr>
        </tfoot>
</table>