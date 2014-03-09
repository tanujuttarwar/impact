<html>
<head>
<title>All Committee</title>
</head>
<body>
	<h2>All Committees</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Committee Name</th><th>Action</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_committee/edit/'.$obj->committee_id);
			$deleteurl = site_url('core/c_committee/delete/'.$obj->committee_id);
			echo "<tr><td>{$i}</td><td>{$obj->committee_name}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>