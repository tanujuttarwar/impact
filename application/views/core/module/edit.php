<html>
<head>
<title>Update Module</title>
</head>
<body>
	<h2>Update Module</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_module/edit/'.@$object->module_id); ?>" method="POST" id="module_add">
		<table class="formtable">
			<tr><td>Module ID</td><td><input type="text" name="module_id" id="module_id" class="textbox" value="<?php echo @$object->module_id; ?>" readonly></td></tr>
			<tr><td>Module Name</td><td><input type="text" name="module_name"  value="<?php echo @$object->module_name; ?>" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>