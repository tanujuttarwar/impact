<html>
<head>
<title>All Event</title>
</head>
<body>
	<h2>All Event</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Event Name</th><th>Event Description</th><th>Event DateTime</th><th>Action</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_event/edit/'.$obj->event_id);
			$deleteurl = site_url('core/c_event/delete/'.$obj->event_id);
			$addmember = site_url('core/c_member/add/'.$obj->event_id);
			$viewmember = site_url('core/c_member/viewall/'.$obj->event_id);
			$viewhotels = site_url('core/c_event_hotel/viewall/'.$obj->event_id);
			$addhotels = site_url('core/c_event_hotel/add/'.$obj->event_id);
			echo "<tr><td>{$i}</td><td>{$obj->event_name}</td><td>{$obj->event_description}</td><td>{$obj->event_datetime}</td><td><a href=\"{$viewmember}\">View Members</a> | <a href=\"{$addmember}\">Add Members</a> | <a href=\"{$viewhotels}\">View Hotels</a> | <a href=\"{$addhotels}\">Add Hotels</a> |<a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>