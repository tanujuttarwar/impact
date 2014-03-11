<html>
<head>
<title>All Registered Events</title>
</head>
<body>
	<h2>All Registered Events</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Event ID</th><th>Alumni ID</th><th>Status</th><th>accomodation</th><th>Family Member</th><th>Arrival travel</th><th>Arrival Datetime</th><th>Arrival Details</th><th>Departure Date Time</th><th>Action</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_event_registration/edit/'.$obj->eventreg_id);
			$deleteurl = site_url('core/c_event_registration/delete/'.$obj->eventreg_id);
			echo "<tr><td>{$i}</td><td>{$obj->event_id}</td><td>{$obj->alumni_id}</td><td>{$obj->status}</td><td>{$obj->accomodation}</td><td>{$obj->family_member}</td><td>{$obj->arrival_travel}</td><td>{$obj->arrival_datetime}</td><td>{$obj->arrival_detail}</td><td>{$obj->dept_datetime}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>