Data from the controller is automatically injected in the view, because the Controller is calling the view. 
<br>
Here's that array in raw form: 
<?php
echo "<pre>"; 
print_r($data);
echo "</pre>";
?>

<br>
Here's one part of that array echoed on the page: <strong><?=$data['message']?></strong>
<br>
Here it is, manipulated: <strong><?=strtoupper($data['message'])?></strong>
<br><br>


<!-- IN PHP, DEFINE THE CONTROLLER/FUNCTION TO SEND THE FORM DATA -->
<?=form_open('upload/index')?>

	This is going to be an upload form. 

	<input type="submit" name="submit" value="Submit Form">

<?=form_close()?>