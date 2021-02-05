<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data insert</title>
</head>
<body> 

<nav class="navbar navbar-dark bg-dark">
  <div class="container">
      <a href="#" class="navbar-brand">DATABASE APPPLICATION</a>
  </div>
</nav>
<div class="container" style="padding-top:10px;">
    <h3>CREATE DATA</h3>
    <hr>
  <div class="row">
    <div class="col-md-12">
        <form method ="post" name="createUser" action="<?php echo base_url().'index.php/user/create';?>">
        <div class="form-group row">
            <label for="inputname" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" placeholder="Enter Name" name="name">
                <?php echo form_error('name');?>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputphno" class="col-sm-2 col-form-label">Phon No</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" placeholder="Phon no" name="phno">
                <?php echo form_error('phno');?>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button class="btn btn-primary">Submit</button>
            
        </div>
    </form>
    </div>
  </div>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>