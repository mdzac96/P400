				<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Register</title>
<link rel="stylesheet" href="<?=base_url()?>assets/admin/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
		<br>
		<br>
		<br>
		<br>

				<div class="col-lg-5 col-md-12 px-lg-3 px-0">
					<div class="banner-form-w3 ml-lg-5">
						<div class="padding">
							<form action="" method="post" enctype="multipart/form-data" >
								<div class="form-style-w3layout">
									

	<?=$this->session->flashdata('message');?>
	
	<div class="form-group">

		<input type="text" class="form-control" placeholder="Enter Your Email" value="<?=set_value('email')?>"  name="email"  >

	</div>

	<div class="error"><?=form_error('email')?></div>
 

			<div class="form-group">

		<input type="password" class="form-control" placeholder="Enter password" value="<?=set_value('password')?>"  name="password"   >

	</div>

		<div class="error"><?=form_error('password')?></div>
 
	<div class="form-group">

		<input type="submit"  name="submit" class="btn btn-primary" value="Login Now" > 
		<!-- <button type="submit">Add Data</button> -->
		<!-- <button type="button">Add Data</button> -->

	</div>

</form>
								</div>
						 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>


