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
            <input type="text" class="form-control input-lg" name="area" value="<?=set_value('area')?>" placeholder="Enter Your Area" >
        </div>
        <div class="error"><?=form_error('area')?></div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Add Data</button>
        </div>
    </form>

</div>
	
</div>

<style> .error{ color:red;} </style>
</main>