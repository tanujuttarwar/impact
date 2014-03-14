<html>
<head>
<title>Add Designation_detail</title>
</head>
<body>


<h2>Add Designation Detail</h2>
	<p>Adding Dedsignation Detail for <?php echo $alumni_info->fname; ?></p>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_designation_detail/add/'.$alumni_info->alumni_id); ?>" method="POST" id="designation_detail_add">



		<table class="formtable">

			
			<tr><td>Organization Name</td><td><input type="text" name="organization_name" class="textbox"></td></tr>
			<tr><td>Organization Address</td><td><input type="text" name="organization_address" class="textbox"></td></tr>
			<tr><td>Organization City</td><td><input type="text" name="organization_city"  class="textbox"></td></tr>
			<tr><td>Organization Contact</td><td><input type="text"  name="organization_contact" class="textbox"></td></tr>
			<tr><td>Website</td><td><input type="text" name="website"  class="textbox"></td></tr>
			<tr><td>Organization Department</td><td><input type="text"  name="organization_department" class="textbox"></td></tr>
			<tr><td>Position</td><td><input type="text" name="position"  class="textbox"></td></tr>
			<tr><td>From Year</td><td><input type="text" name="from_year"  class="textbox"></td></tr>
			<tr><td>To Year</td><td><input type="text" name="to_year"  class="textbox"></td></tr>




			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td><td><a href="<?php echo site_url('core/c_other_qualification_detail/add/'.$alumni_info->alumni_id);	 ?>">skip</a></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>




