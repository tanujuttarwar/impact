<html>
<head>
<title>All Members</title>
</head>
<body>
	<h2>All Members</h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<p>Found <strong><?php echo count($objects); ?></strong> objects</p>
	<table border="1" class="datatable">
	<tr><th>Member Id</th><th>College Id</th><th>Member name</th><th>Branch id</th><th>Year</th><th>Gender</th><th>Date Of Birth</th><th>Contact Number</th><th>Email Id</th><th> Photo</th><th>Event Id</th><th>Position Id</th><th>Committee Id</th><th>Password</th><th>Role Id</th><th>Status</th><th>Degree Id</th><th>Action</th></tr>
	<?php
		$i = 1;
		foreach($objects as $obj){
			
			
			$editurl = site_url('core/c_member/edit/'.$obj->member_id);
			$deleteurl = site_url('core/c_member/delete/'.$obj->member_id);
			echo "<tr><td>{$i}</td><td>{$obj->college_id}</td><td>{$obj->member_name}</td><td>{$obj->branch_id}</td><td>{$obj->year}</td><td>{$obj->gender}</td><td>{$obj->dob}</td><td>{$obj->contact_no}</td><td>{$obj->email}</td><td> {$obj->photo} </td><td>{$obj->event_id}</td><td>{$obj->position_id}</td><td>{$obj->committee_id}</td><td>{$obj->password}</td><td>{$obj->role_id}</td><td>{$obj->status}</td><td>{$obj->degree_id}</td><td><a href=\"{$editurl}\">Edit</a> | <a href=\"{$deleteurl}\" class=\"deletelink\">Delete</a></td></tr>";
			
			 $i = $i+1;
		}
	?>
	</table>
</body>
</html>