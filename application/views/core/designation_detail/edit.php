<html>
<head>
<title>Update Designation Detail</title>
</head>
<body>
	<h2>Update Designation Detail</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_designation_detail/edit/'.@$object->desig_id); ?>" method="POST" id="designation_detail_add">
		<table class="formtable">
			<tr><td>Organization Name</td><td><input type="text"  name="organization_name" value="<?php echo @$object->organization_name; ?>" class="textbox"></td></tr>
			<tr><td>Organization Address</td><td><input type="text" name="organization_address" value="<?php echo @$object->organization_address; ?>" class="textbox"></td></tr>
			<tr><td>Organization City</td><td><input type="text"  name="organization_city" value="<?php echo @$object->organization_city; ?>" class="textbox"></td></tr>
			<tr><td>Organization Contact</td><td><input type="text" name="organization_contact" value="<?php echo @$object->organization_contact; ?>" class="textbox"></td></tr>
			<tr><td>Website</td><td><input type="text"  name="website" value="<?php echo @$object->website; ?>" class="textbox"></td></tr>
			<tr><td>Organization Department</td><td><input type="text"  name="organization_department" value="<?php echo @$object->organization_department; ?>" class="textbox"></td></tr>
			<tr><td>Position</td><td><input type="text" name="position"  value="<?php echo @$object->position; ?>" class="textbox"></td></tr>
			<tr><td>From Year</td><td><input type="text" name="from_year"  value="<?php echo @$object->from_year; ?>" class="textbox"></td></tr>
			<tr><td>To Year</td><td><input type="text" name="to_year"  value="<?php echo @$object->to_year; ?>" class="textbox"></td></tr>

			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>