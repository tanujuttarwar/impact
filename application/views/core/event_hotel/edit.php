<html>
<head>
<title>Update Hotel Information</title>
</head>
<body>
	<h2>Update Hotel Information</h2>
	
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_event_hotel/edit/'.$event_hotel->eventhotel_id); ?>" method="POST" id="event_hotel_edit">
		<table class="formtable">
			<tr><td>Hotel ID</td><td><input type="text" name="event_hotel_id" id="event_hotel_id" class="textbox" value="<?php echo @$event_hotel->eventhotel_id; ?>" readonly></td></tr>
			<tr><td>Hotel Name</td><td><input type="text" name="hotel_name"  value="<?php echo @$event_hotel->hotel_name; ?>" class="textbox"></td></tr>
			<tr><td>Hotel Address</td><td><textarea name="hotel_address"><?php echo @$event_hotel->hotel_address; ?></textarea></td></tr>
			<tr><td>Rooms to be Booked</td><td><input type="text" name="rooms_available"  value="<?php echo @$event_hotel->rooms_available; ?>" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>