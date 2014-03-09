<html>
<head>
<title>Add Committee</title>
</head>
<body>
	<h2>Add Committee</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_committee/add'); ?>" method="POST" id="committee_add">
		<table class="formtable">
			<tr><td>Committee ID</td><td><input type="text" name="committee_id" id="committee_id" class="textbox" readonly></td></tr>
			<tr><td>Committee Name</td><td><input type="text" name="committee_name" name="committee_name" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>