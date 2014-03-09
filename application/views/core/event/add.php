<html>
<head>
<title>Add Event</title>
</head>
<body>
	<h2>Add Event</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_event/add'); ?>" method="POST" id="event_add">
		<table class="formtable">
			<tr><td>Event ID</td><td><input type="text" name="event_id" id="event_id" class="textbox" readonly></td></tr>
			<tr><td>Event Name</td><td><input type="text" name="event_name" name="event_name" class="textbox"></td></tr>
			<tr><td>Event Description</td><td><textArea rows="5" cols="15" name="event_description" ></textarea></td></tr>
			<tr><td>Event DateTime</td><td><input type="datetime" name="event_datetime" name="event_datetime" placeholder="yyyy-mm-dd HH:MM:SS"></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>