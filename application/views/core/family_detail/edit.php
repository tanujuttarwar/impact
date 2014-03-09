<html>
<head>
<title>Update Family Details</title>
</head>
<body>
	<h2>Update Family Details</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_family_detail/edit/'.@$object->family_id); ?>" method="POST" id="family_add">
		<table class="formtable">
			 <tr><td>Family Id</td><td><input type="text" name="family_id" id="family_id" value="<?php echo @$object->family_id; ?>" class="textbox" readonly></td></tr>
			<tr><td>Alumni id</td><td><input type="text" name="alumni_id" name="alumni_id" value="<?php echo @$object->alumni_id; ?>" class="textbox"></td></tr>
			<tr><td>Name of Member</td><td><input type="text" name="name_of_member" name="name_of_member" value="<?php echo @$object->name_of_member; ?>"  class="textbox"></td></tr>
			<tr><td>Relation id</td><td><input type="text" name="relation_id" name="relation_id" value="<?php echo @$object->relation_id; ?>" class="textbox"></td></tr>
			<tr><td>occupation</td><td><input type="text" name="occupation" name="occupation" value="<?php echo @$object->occupation; ?>" class="textbox"></td></tr>
			
			
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		
		
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>