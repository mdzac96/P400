<div id="layoutSidenav_content">
	 <main>
	<div id="container">

	<h1><?=$title?></h1>

	 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Mobile<th>
		<th>Email</th>
		<th>Address</th>
		<th>Gender</th>
		<th>Emergency Number 1</th>
		<th>Emergency Number 2</th>
		<th>Type</th>
		<th>Time<th>
		<th>Edit</th>
		<th>Delete</th>
		 
	</tr>



	<?php   

	foreach ($user as $row) {
		 
	echo '<tr>';
	echo '<td>'.$row['u_id'].'</td>';
	echo '<td>'.$row['name'].'</td>';
	echo '<td>'.$row['mobile'].'</td>';
	echo '<td>'.$row['email'].'</td>';
	echo '<td>'.$row['address'].'</td>';
	echo '<td>'.$row['gender'].'</td>';
	echo '<td>'.$row['emergency_number_1'].'</td>';
	echo '<td>'.$row['emergency_number_2'].'</td>';
	echo '<td>'.$row['type'].'</td>';
	echo '<td>'.$row['time'].'</td>';


	echo '<td><a href="'.base_url().'admin/edit_user/'.$row['u_id'].'"><button class="btn btn-primary">Edit</button><a></td>';
	echo '<td><a href="'.base_url().'admin/delete_user/'.$row['u_id'].'"><button class="btn btn-danger">Delete</button><a></td>';
	 
	echo '</tr>';
	 

	}

	 


	?>
			</table>	
		</div>
	 </main>
</div>
	              