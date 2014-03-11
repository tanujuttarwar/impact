<html>
<head>
<title>Add Degree</title>
</head>
<body>
	<h2>Add Degree</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_degree/add'); ?>" method="POST" id="branch_add">
		<table class="formtable">
			<tr><td>Degree ID</td><td><input type="text" name="degree_id" id="branch_id" class="textbox" readonly></td></tr>
			<tr><td>Degree Name</td><td><input type="text" name="degree_name" name="branch_name" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>