<html>
<head>
<title>All Branches</title>
</head>
<body>
	<h2>All Roles</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Role Name</th><th>Description</th><th>Action</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_role/edit/'.$obj->role_id);
			$deleteurl = site_url('core/c_role/delete/'.$obj->role_id);
			echo "<tr><td>{$i}</td><td>{$obj->role_name}</td><td>{$obj->role_desc}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>