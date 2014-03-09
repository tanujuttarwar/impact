<html>
<head>
<title>All Permissions</title>
</head>
<body>
	<h2>All Permissions</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Role</th><th>Modules Permitted</th><th>Action</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$deleteurl = site_url('core/c_permission/delete/'.$obj->permission_id);
			$role_name = $model_role->find_by_id($obj->role_id)->role_name;
			$module_name=$model_module->find_by_id($obj->module_id)->module_name;
			echo "<tr><td>{$i}</td><td>{$role_name}</td><td>{$module_name}</td><td><a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>