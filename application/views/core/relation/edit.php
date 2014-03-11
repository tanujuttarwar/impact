<html>
<head>
<title>Update Branch</title>
</head>
<body>
	<h2>Update Relation</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_relation/edit/'.@$object->relation_id); ?>" method="POST" id="relation_add">
		<table class="formtable">
			<tr><td>Relation ID</td><td><input type="text" name="relation_id" id="relation_id" class="textbox" value="<?php echo @$object->relation_id; ?>" readonly></td></tr>
			<tr><td>Relation Name</td><td><input type="text" name="relation_name" name="relation_name" value="<?php echo @$object->relation_name; ?>" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>