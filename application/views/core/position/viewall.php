<html>
<head>
<title>All Position</title>
</head>
<body>
	<h2>All Position</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Position Name</th><th>Position Description</th><th>Action</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_position/edit/'.$obj->position_id);
			$deleteurl = site_url('core/c_position/delete/'.$obj->position_id);
			echo "<tr><td>{$i}</td><td>{$obj->position_name}</td><td>{$obj->position_description}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>