<html>
<head>
<title>All Alumni</title>
</head>
<body>
	<h2>All Alumni</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Full Name</th><th>Degree - Branch (Year)</th><th>Mobile</th><th>Email</th><th>Actions</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_alumni_info/edit/'.$obj->alumni_id);
			$deleteurl = site_url('core/c_alumni_info/delete/'.$obj->alumni_id);
			$deg = $model_degree->find_by_id($obj->degree_id)->degree_name;
			$branch = $model_branch->find_by_id($obj->branch_id)->branch_name;
			echo "<tr><td>{$i}</td><td>{$obj->fname} {$obj->lname}</td><td>{$deg} - {$branch} ({$obj->year_of_passing})</td><td>{$obj->mobile_1}</td><td>{$obj->email_1}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>