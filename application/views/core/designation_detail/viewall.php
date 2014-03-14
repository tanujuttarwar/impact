<html>
<head>
<title>All Designation Detail</title>
</head>
<body>
	<h2>All Designation Detail</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Organization Name</th><th>Organization Address</th><th>Organization City</th><th>Organization Contact</th>
<th>Organization Site</th><th>Organization Department</th><th>Positon</th><th>From Year</th><th>To Year</th><th>Action</th></tr>
	
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_designation_detail/edit/'.$obj->desig_id);
			$deleteurl = site_url('core/c_designation_detail/delete/'.$obj->desig_id);
			echo "<tr><td>{$i}</td><td>{$obj->organization_name}</td><td>{$obj->organization_address}</td><td>{$obj->organization_city}</td><td>{$obj->organization_contact}</td><td>{$obj->website}</td>
<td>{$obj->organization_department}</td><td>{$obj->position}</td><td>{$obj->from_year}</td><td>{$obj->to_year}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>