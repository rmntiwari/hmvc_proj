<!DOCTYPE html>
<html>
<body>

<div class="main">
<p class="main_note">Check xss_clean() and see the difference you have to enter data <br> between script tag. <b>&lt;script&gt;alert('Hello')&lt;/script&gt;</b> </p>

<div id="content">
<h3 id="form_head">Codelgniter xss clean Demo</h2>

<div id="form_input">

<?php echo form_open('myxss/myxss_submit'); ?>

<?php 
	echo form_label('Employee Name');

	$data_name = array( 

		'name' => 'empname',
		'id' => 'empnameid',
		'placeholder' => 'Employee Name',
		'required' => 'required',
		'class' => 'input_box'

	);
	echo form_input($data_name);
	echo"<br>";


	echo form_label('Employee Email');
	$data_email = array( 'type' => 'email', 'name' => 'email', 'id'=>'email', 'rquired' => 'required', 'placeholder' =>'Employee Email');
	echo form_input($data_email);
	echo "<br>";

?>

<div id="form_button">
<?php echo form_submit('submit', 'Submit', "class=''submit"); ?>
</div>

<?php echo form_close(); ?>



<?php
	 if (isset($_POST['submit'])) { 

	  ?>

		 


	<p>This data is shown before xss_clean(), which filter the script tag.</p>
    <div class="data">
	<label>name :</label> <?php echo $non_xss_data['employeename'] ?><br><br>
	<label>Email :</label> <?php echo $non_xss_data['employeeemail'] ?><br><br>
	</div>



	<p>This data is shown after xss_clean(), which filter the script tag.</p>
	<div class="data">
	<label>name :</label> <?php echo $xss_data['employeename'] ?><br><br>
	<label>Email :</label> <?php echo $xss_data['employeeemail'] ?><br><br>
	</div>
 


	<?php }	else{

		//nothing to show
	} ?>

</div>


</body>
</html>
