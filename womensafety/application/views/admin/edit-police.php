<div id="layoutSidenav_content">
    <main>
		 <div id="container">

			<h1><?=$title?></h1>

		<div class="col-md-4">
			<form action="" method="post"  enctype="multipart/form-data" >


				<?=$this->session->flashdata('message');?>
				
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your Name" value="<?php if(set_value('name')){ echo set_value('name'); }else{ echo $police[0]['name']; }?>" name="name"  >
				</div>
				<div class="error"><?=form_error('name')?></div>


				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your Mobile" value="<?php if(set_value('mobile')){ echo set_value('mobile'); }else{ echo $police[0]['mobile']; }?>"  name="mobile"   >
				</div>
					<div class="error"><?=form_error('mobile')?></div>


				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your Area" value="<?php if(set_value('area')){ echo set_value('area'); }else{ echo $police[0]['area']; }?>"  name="area"  >
				</div>
				<div class="error"><?=form_error('area')?></div>

				
					<input type="submit"  name="submit" class="btn btn-primary" value="Edit data Now" > 
					<a href="<?=base_url()?>admin/view-police/"><button type="button" class="btn btn-primary">Back To Table</button><a>
				</div>
			</form>
		</div>
				
			</div>

			<style> .error{ color:red; } </style>
</main>
			              