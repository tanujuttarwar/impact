<html>
<head>
<title>Update Event</title>
</head>
<body>
	<h2>Update Event</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_event/edit/'.@$object->event_id); ?>" method="POST" id="event_add">
		<table class="formtable">
			<tr><td>Event ID</td><td><input type="text" name="event_id" id="event_id" class="textbox" value="<?php echo @$object->event_id; ?>" readonly></td></tr>
			<tr><td>Event Name</td><td><input type="text" name="event_name" value="<?php echo @$object->event_name; ?>" class="textbox"></td></tr>
			<tr><td>Event Description</td><td><textArea rows="5" cols="15" name="event_description"><?php echo @$object->event_description; ?></textarea></td></tr>
			<tr><td>Event DateTime</td><td><input type="datetime" name="event_datetime" name="event_datetime" value="<?php echo @$object->event_datetime; ?>" ></td></tr>
			
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Update" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>