<html>
<head>
<title>Update Branch</title>
</head>
<body>
	<h2>Update Degree</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_degree/edit/'.@$object->degree_id); ?>" method="POST" id="degree_add">
		<table class="formtable">
			<tr><td>Branch ID</td><td><input type="text" name="degree_id" id="degree_id" class="textbox" value="<?php echo @$object->degree_id; ?>" readonly></td></tr>
			<tr><td>Branch Name</td><td><input type="text" name="degree_name" name="degree_name" value="<?php echo @$object->degree_name; ?>" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>