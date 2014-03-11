<html>
<head>
<title>Update Registered Information</title>
</head>
<body>
	<h2>Update Registered Information</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_event_registration/edit/'.$event_registration->eventreg_id); ?>" method="POST" id="eventreg_add">
		<table class="formtable">
			<tr><td>Event Registration Id</td><td><input type="text" name="eventreg_id" class="textbox" value="<?php echo @$event_registration->eventreg_id; ?>" readonly></td></tr>
			<tr><td>Event ID</td><td><input type="text" name="event_id" class="textbox" value="<?php echo @$event_registration->event_id; ?>" readonly></td></tr>
			<tr><td>Alumni ID</td><td><input type="text" name="alumni_id" class="textbox" value="<?php echo @$event_registration->alumni_id; ?>" readonly></td></tr>
			<tr><td>Status</td><td><input type="text" name="status" class="textbox" value="<?php echo @$event_registration->status; ?>" ></td></tr>
			<tr><td>Accomodation</td><td><input type="text" name="accomodation" value="<?php echo @$event_registration->accomodation; ?>" class="textbox"></td></tr>
			<tr><td>Family Member</td><td><input type="text" name="family_member" class="textbox" value="<?php echo @$event_registration->family_member; ?>" ></td></tr>
			<tr><td>Arrival travel</td><td><input type="text" name="arrival_travel" class="textbox" value="<?php echo @$event_registration->arrival_travel; ?>" ></td></tr>
			<tr><td>Arrival Date and Time</td><td><input type="text" name="arrival_datetime" class="textbox" value="<?php echo @$event_registration->arrival_datetime; ?>" ></td></tr>
			<tr><td>Arrival Details</td><td><input type="text" name="arrival_details" class="textbox" value="<?php echo @$event_registration->arrival_detail; ?>" ></td></tr>
			<tr><td>Departure Date and Time</td><td><input type="text" name="departure_details" class="textbox" value="<?php echo @$event_registration->dept_datetime; ?>" ></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>