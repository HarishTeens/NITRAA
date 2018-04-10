<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<title>Login Module</title>
</head>
<body>

<div class="container">
	<?php echo validation_errors(); ?>
	<?php echo form_open(base_url()."welcome/main"); ?>	
  <div class="form-group">
    <label for="email">Username :</label>
    <?php echo form_input("username","") ?>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <?php echo form_input("password","") ?>
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <?php 
      if($modkey){
        echo "On".form_radio('modkey',1,TRUE);
        echo "Off".form_radio('modkey',0,FALSE);
      }
       else{
        echo "On".form_radio('modkey',1,FALSE);
        echo "Off".form_radio('modkey',0,TRUE);
       }

      
?>




  <!-- <?php if($modkey){?>
  <input type="radio" name="modkey" value="TRUE" checked > On<br>  
  <input type="radio" name="modkey" value="FALSE"> Off
<?php  } else { ?>
  <input type="radio" name="modkey" value="TRUE"  > On<br>  
  <input type="radio" name="modkey" value="FALSE" checked> Off <br>
<?php  } ?> -->
  <?php echo form_submit("submit","SUbmit !") ?>
</form>
<br>
<div>
<form>

  
</form> 

</div>

</div>
</body>
</html>