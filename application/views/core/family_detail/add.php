<html>
<head>
<title>Add Family Details</title>
</head>
<body>
	<h2>Adding Family Details for <?php echo $alumni_info->fname; ?></h2>
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_family_detail/add/'.$alumni_info->alumni_id); ?>" method="POST" id="family_detail_add">
		<table class="formtable">
		
			<tr><td>Relation Id</td><td><input type="text" name="relation_id" class="textbox"></td></tr>
			
			<tr><td>Name of Member</td><td><input type="text" name="name_of_member" name="name_of_member" class="textbox"></td></tr>
			
			<tr><td>occupation</td><td><input type="text" name="occupation" name="occupation" class="textbox"></td></tr>
			
			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>