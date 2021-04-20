<div id="layoutSidenav_content">
    <main>
		 <div id="container">

			<h1><?=$title?></h1>

		<div class="col-md-4">
			<form action="" method="post"  enctype="multipart/form-data" >


				<?=$this->session->flashdata('message');?>
				
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your Name" value="<?php if(set_value('name')){ echo set_value('name'); }else{ echo $user[0]['name']; }?>" name="name"  >
				</div>
				<div class="error"><?=form_error('name')?></div>


				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your Mobile" value="<?php if(set_value('mobile')){ echo set_value('mobile'); }else{ echo $user[0]['mobile']; }?>"  name="mobile"   >
				</div>
					<div class="error"><?=form_error('mobile')?></div>


				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your Email" value="<?php if(set_value('email')){ echo set_value('email'); }else{ echo $user[0]['email']; }?>"  name="email"  >
				</div>
				<div class="error"><?=form_error('email')?></div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Enter password" value="<?php if(set_value('password')){ echo set_value('password'); }else{ echo $user[0]['password']; }?>"  name="password"   >
				</div>
					<div class="error"><?=form_error('password')?></div>


						<div class="form-group">
					<input type="password" class="form-control" placeholder="Enter Confirm password" value="<?php if(set_value('c_password')){ echo set_value('c_password'); }else{ echo $user[0]['password']; }?>"  name="c_password"   >
				</div>
					<div class="error"><?=form_error('c_password')?></div>

				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your Address" value="<?php if(set_value('address')){ echo set_value('address'); }else{ echo $user[0]['address']; }?>"  name="address" >
				</div>
				<div class="error"><?=form_error('address')?></div>

				<div class="form-group">

					<input type="text" class="form-control" placeholder="Enter Your Gender" value="<?php if(set_value('gender')){ echo set_value('gender'); }else{ echo $user[0]['gender']; }?>"  name="gender"   >
				</div>
					<div class="error"><?=form_error('gender')?></div>

				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your Emergency Number 1" value="<?php if(set_value('emergency_number_1')){ echo set_value('emergency_number_1'); }else{ echo $user[0]['emergency_number_1']; }?>"  name="emergency_number_1"   >
				</div>
					<div class="error"><?=form_error('emergency_number_1')?></div>

				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your E,ergency Number 2" value="<?php if(set_value('emergency_number_2')){ echo set_value('emergency_number_2'); }else{ echo $user[0]['emergency_number_2']; }?>"  name="emergency_number_2"   >
				</div>
					<div class="error"><?=form_error('emergency_number_2')?></div>

				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your Type" value="<?php if(set_value('type')){ echo set_value('type'); }else{ echo $user[0]['type']; }?>"  name="type"   >
				</div>
					<div class="error"><?=form_error('type')?></div>

					<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your Time" value="<?php if(set_value('time')){ echo set_value('time'); }else{ echo $user[0]['time']; }?>"  name="time"   >
				</div>
					<div class="error"><?=form_error('time')?></div>

				<div class="form-group">

					<input type="submit"  name="submit" class="btn btn-primary" value="Edit data Now" > 
					<a href="<?=base_url()?>admin/view-user/"><button type="button" class="btn btn-primary">Back To Table</button><a>
				</div>
			</form>
		</div>
				
			</div>

			<style> .error{ color:red; } </style>
</main>
			              