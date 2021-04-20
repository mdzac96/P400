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
<div class="signup-form" >
    <form action="" method="post" enctype="multipart/form-data" >
    <?=$this->session->flashdata('message');?>
        <h2>Register Your Account</h2>
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
            <button type="submit" class="btn btn-primary btn-lg btn-block signup-btn">Sign Up</button>
        </div>
    </form>
    <div class="text-center">Already have an account? <a href="<?=base_url()?>login">Login here</a></div>
</div></body>
</html>
