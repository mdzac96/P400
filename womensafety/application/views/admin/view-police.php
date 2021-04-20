<div id="layoutSidenav_content">
	 <main>
	<div id="container">

	<h1><?=$title?></h1>

	 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

	<tr>

		<th>Name</th>
		<th>Mobile<th>
		<th>Area</th>
		<th>Edit</th>
		<th>Delete</th>
		 
	</tr>



	<?php   

	foreach ($police as $row) {
		 
	echo '<tr>';
	echo '<td>'.$row['name'].'</td>';
	echo '<td>'.$row['mobile'].'</td>';
	echo '<td>'.$row['area'].'</td>';


	echo '<td><a href="'.base_url().'admin/edit_police/'.$row['p_id'].'"><button class="btn btn-primary">Edit</button><a></td>';
	echo '<td><a href="'.base_url().'admin/delete_police/'.$row['p_id'].'"><button class="btn btn-danger">Delete</button><a></td>';
	 
	echo '</tr>';
	 

	}

	 


	?>
			</table>	
		</div>
	 </main>
</div>
	              