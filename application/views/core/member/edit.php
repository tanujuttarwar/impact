<html>
<head>
<title>Update Member Detail</title>
</head>
<body>
	<h2>Update Member Detail</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_member/edit/'.@$object->member_id); ?>" method="POST" id="member_add">
		<table class="formtable">
			 
			
			<tr><td>Member Id</td><td><input type="text" name="member_id" id="member_id" class="textbox"value="<?php echo @$object->member_id; ?>" readonly></td></tr>
			<tr><td>College id</td><td><input type="text" name="college_id" name="college_id" value="<?php echo @$object->college_id; ?>" class="textbox"></td></tr>
			<tr><td>Name of Member</td><td><input type="text" name="member_name" name="member_name" value="<?php echo @$object->member_name; ?>" class="textbox"></td></tr>
			<tr><td>Branch id</td><td><input type="text" name="branch_id" name="branc_id" class="textbox"></td></tr>
			<tr><td>Year</td><td><input type="text" name="year" name="year" value="<?php echo @$object->year; ?>" class="textbox"></td></tr>
			<tr><td>Gender</td><td><input type="radio" name="gender" value=<?php echo @$object->gender; ?>>Male<input type="radio" name="gender" value="<?php echo @$object->gender; ?>">Female</td></tr>
			<tr><td>Date of Birth</td><td><input type="text" name="dob" value="dd/mm/yy" value="<?php echo @$object->dob; ?>" class="textbox"></td></tr>
			<tr><td>Contact Number</td><td><input type="text" name="contact_no" name="contact_no" value="<?php echo @$object->contact_no; ?>" class="textbox"></td></tr>
			<tr><td>Email Id</td><td><input type="text" name="email" name="email" value="<?php echo @$object->email; ?>" class="textbox"></td></tr>
			<tr><td>Photo</td><td><input name="photo" accept="image/jpeg" type="file" value="<?php echo @$object->photo; ?>" ></td></tr>
			<tr><td>Position Id</td><td><input type="text" name="position_id" name="position_id" value="<?php echo @$object->event_id; ?>" class="textbox"></td></tr>
			<tr><td>Committee Id</td><td><input type="text" name="committee_id" name="commitee_id" value="<?php echo @$object->commitee_id; ?>" class="textbox"></td></tr>
			<tr><td>Password</td><td><input type="text" name="password" name="password" value="<?php echo @$object->password; ?>" class="textbox"></td></tr>
			<tr><td>role_id</td><td><input type="text" name="role_id" name="role_id" value="<?php echo @$object->role_id; ?>" class="textbox"></td></tr>
			<tr><td>Status</td><td><input type="text" name="status" name="status" value="<?php echo @$object->status; ?>" class="textbox"></td></tr>
			<tr><td>Degree</td><td><input type="text" name="degree_id" name="degree_id"value="<?php echo @$object->degree_id; ?>" class="textbox"></td></tr>
			
			
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>