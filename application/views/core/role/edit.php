<html>
<head>
<title>Update Role</title>
</head>
<body>
	<h2>Update Role</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_role/edit/'.@$object->role_id); ?>" method="POST" id="role_add">
		<table class="formtable">
			<tr><td>Role ID</td><td><input type="text" name="role_id" id="role_id" class="textbox" value="<?php echo @$object->role_id; ?>" readonly></td></tr>
			<tr><td>Role Name</td><td><input type="text" name="role_name" name="role_name" value="<?php echo @$object->role_name; ?>" class="textbox"></td></tr>
			<tr><td>Role Description</td><td><input type="text" name="role_desc" name="role_desc" value="<?php echo @$object->role_desc; ?>" class="textbox"></td></tr>

			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>