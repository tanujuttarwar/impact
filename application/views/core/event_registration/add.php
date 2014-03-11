<html>
<head>
<title>Register</title>
</head>
<body>
	<h2>Register for New Event</h2>
	<p>Registering alumni <?php echo $alumni_info->lname; ?> for <?php echo $event->event_name; ?></p>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_event_registration/add/'.$alumni_info->alumni_id.'/'.$event->event_id); ?>" method="POST" id="eventreg_add">
		<table class="formtable">
			<tr><td>status</td><td><input type="text" name="status" id="status" class="textbox" ></td></tr>
			<tr><td>Accomodation</td><td><input type="text" name="accomodation" class="textbox"></td></tr>
			<tr><td>Family Member</td><td><input type="text" name="family_member" class="textbox"></td></tr>
			<tr><td>Arrival Travel</td><td><input type="text" name="arrival_travel" class="textbox"></td></tr>
			<tr><td>Arrival Date Time</td><td><input type="text" name="arrival_datetime" class="textbox"></td></tr>			
			<tr><td>Arrival details</td><td><input type="text" name="arrival_detail" class="textbox"></td></tr>
			<tr><td>Departure Date Time</td><td><input type="text" name="dept_datetime" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>