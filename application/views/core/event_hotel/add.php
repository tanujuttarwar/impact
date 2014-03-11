<html>
<head>
<title>Add Event Hotel</title>
</head>
<body>
	<h2>Add Event Hotel</h2>
	<p>Adding hotels for event <?php echo $event->event_name; ?></p>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_event_hotel/add/'.$event->event_id); ?>" method="POST" id="event_hotel_add">
		<table class="formtable">
			<tr><td>Hotel Name</td><td><input type="text" name="hotel_name" class="textbox"></td></tr>
			<tr><td>Hotel Address</td><td><textarea name="hotel_address"></textarea></td></tr>
			<tr><td>Rooms to be booked</td><td><input type="text" name="rooms_available" class="textbox"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>