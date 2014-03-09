<html>
<head>
<title>Update Committee</title>
</head>
<body>
	<h2>Update Committee</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_committee/edit/'.@$object->committee_id); ?>" method="POST" id="committee_add">
		<table class="formtable">
			<tr><td>Committee ID</td><td><input type="text" name="committee_id" id="committee_id" class="textbox" value="<?php echo @$object->committee_id; ?>" readonly></td></tr>
			<tr><td>Committee Name</td><td><input type="text" name="committee_name" name="committee_name" value="<?php echo @$object->committee_name; ?>" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>