<div id="layoutSidenav_content">
    <main>
         <div id="container">

<h1><?=$title?></h1>

<div class="col-md-4">
<form action="" method="post" enctype="multipart/form-data" >
    <?=$this->session->flashdata('message');?>
            <div class="form-group">
            <input type="text" class="form-control input-lg" value="<?=set_value('name')?>" name="name" placeholder="Enter your name">
        </div>
        <div class="error"><?=form_error('name')?></div>
        
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="mobile" value="<?=set_value('mobile')?>"  placeholder="Enter your Mobile" >
        </div>
        <div class="error"><?=form_error('mobile')?></div>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="email" value="<?=set_value('email')?>" placeholder="Enter Your Email" >
        </div>
        <div class="error"><?=form_error('email')?></div>

        <div class="form-group">
            <input type="password" class="form-control input-lg" name="password" value="<?=set_value('password')?>"  placeholder="Enter your Password">
        </div>
        <div class="error"><?=form_error('password')?></div>

        <div class="form-group">
            <input type="password" class="form-control input-lg" name="c_password" value="<?=set_value('c_password')?>"  placeholder="Enter your Confirm Password">
        </div>
        <div class="error"><?=form_error('c_password')?></div>

        <div class="form-group">
            <input type="text" class="form-control input-lg" name="address" value="<?=set_value('address')?>"  placeholder="Address">
        </div>
        <div class="error"><?=form_error('address')?></div>

        <div class="form-group">
            <input type="text" class="form-control input-lg" name="gender" value="<?=set_value('gender')?>"  placeholder="Gender">
        </div>
        <div class="error"><?=form_error('gender')?></div>
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="emergency_number_1" value="<?=set_value('emergency_number_1')?>"  placeholder="Emergency Number 1">
        </div>
        <div class="error"><?=form_error('emergency_number_1')?></div>

        <div class="form-group">
            <input type="text" class="form-control input-lg" name="emergency_number_2" value="<?=set_value('emergency_number_2')?>"  placeholder="Emergency Number 2">
        </div>
        <div class="error"><?=form_error('emergency_number_2')?></div>

        <div class="form-group">
            <input type="text" class="form-control input-lg" name="type" value="<?=set_value('type')?>"  placeholder="Type">
        </div>
        <div class="error"><?=form_error('type')?></div>


            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
            Auto SMS
            <br>
            <br>

        <div class="form-group">
            <input type="time" class="form-control input-lg" name="time" value="<?=set_value('time')?>"  placeholder="Time">
        </div>
        <div class="error"><?=form_error('time')?></div>

           <div class="form-group">
               <label>Add Image</label>
               <div class="col-sm-8">
                  <input type="file" name="user-image"/>
               </div>
            </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Add Data</button>
        </div>
    </form>

</div>
	
</div>

<style> .error{ color:red;} </style>
</main>