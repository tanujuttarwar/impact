<html>
<head>
<title>Add Members</title>
</head>
<body>
	<h2>Add Members for <?php echo $event->event_name; ?></h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_member/add/'.$event->event_id); ?>" method="POST" id="member_add">
		<table class="formtable">
			 
			<tr><td>College id</td><td><input type="text" name="college_id" class="textbox"></td></tr>
			<tr><td>Name of Member</td><td><input type="text" name="member_name" class="textbox"></td></tr>
			<tr><td>Branch id</td><td><input type="text" name="branch_id" class="textbox"></td></tr>
			<tr><td>Year</td><td><input type="text" name="year" class="textbox"></td></tr>
			<tr><td>Gender</td><td><input type="radio" name="gender" value="0">Male<input type="radio" name="gender" value="1">Female</td></tr>
			<tr><td>Date of Birth</td><td><input type="date" name="dob" value="yyyy/mm/dd" ></td></tr>
			<tr><td>Contact Number</td><td><input type="text" name="contact_no" class="textbox"></td></tr>
			<tr><td>Email Id</td><td><input type="text" name="email" class="textbox"></td></tr>
			<tr><td>Photo</td><td><input name="photo" accept="image/jpeg" type="file"></td> </tr>
			<tr><td>Committee id</td><td><input type="text" name="committee_id" class="textbox"></td></tr>
			<tr><td>Position Id</td><td><input type="text" name="position_id" class="textbox"></td></tr>
	     	<tr><td>Password</td><td><input type="password" name="password" value="" class="textbox"></td></tr>
			<tr><td>role_id</td><td><input type="text" name="role_id" class="textbox"></td></tr>
			<tr><td>Status</td><td><input type="text" name="status" class="textbox"></td></tr>
			<tr><td>Degree Id</td><td><input type="text" name="degree_id" class="textbox"></td></tr>
			
			
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>