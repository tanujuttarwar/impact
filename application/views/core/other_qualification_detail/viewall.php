<html>
<head>
<title>Qualification Detail</title>
</head>
<body>
	<h2>All Qualification Detail</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Sr.</th><th>Name Of Institute</th><th>Course</th><th>Year Of Passing</th><th>Extras</th><th>Action</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			$editurl = site_url('core/c_other_qualification_detail/edit/'.$obj->oq_id);
			$deleteurl = site_url('core/c_other_qualification_detail/delete/'.$obj->oq_id);
			echo "<tr><td>{$i}</td><td>{$obj->name_of_institute}</td><td>{$obj->course}</td><td>{$obj->year_of_passing}</td><td>{$obj->extras}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			$i = $i+1;
		}
	?>
	</table>
</body>
</html>