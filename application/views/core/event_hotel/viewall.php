<html>
<head>
<title>All Hotels</title>
</head>
<body>
	<h2>All Hotels</h2>
	<p>Showing all hotels for <?php echo $event->event_name; ?></p>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Hotel Name</th><th>Hotel Address</th><th>Rooms to be booked</th><th>Action</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_event_hotel/edit/'.$obj->eventhotel_id);
			$deleteurl = site_url('core/c_event_hotel/delete/'.$obj->eventhotel_id);
			echo "<tr><td>{$i}</td><td>{$obj->hotel_name}</td><td>{$obj->hotel_address}</td><td>{$obj->rooms_available}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>