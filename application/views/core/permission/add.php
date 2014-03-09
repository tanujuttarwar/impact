<html>
<head>
<title>Add Permission</title>
</head>
<body>
	<h2>Add Permission</h2>
	<p>Found <strong><?php echo count($roles); ?></strong> roles</p>
	<p>Found <strong><?php echo count($modules); ?></strong> modules</p>
	
	<?php if(isset($message)&&$message!='') echo "<span class=\"message\">{$message}</span>"; ?>
	<form action="<?php echo site_url('core/c_permission/add'); ?>" method="POST" id="permission_add">
		<table class="formtable">
			
			<tr><td>Role</td>
			<td>
			<SELECT NAME="role_id">
            <?php
			foreach($roles as $row)
			{
			echo "<OPTION value='{$row->role_id}'>{$row->role_name}</OPTION>";
			}
			?>
			</SELECT>
            </td></tr>
			<tr><td>Module</td>
            <td>
			<SELECT NAME="module_id">
            <?php
			foreach($modules as $row1)
			{
			echo "<OPTION value='{$row1->module_id}'>{$row1->module_name}</OPTION>";
			}
			?>
			</SELECT>
            </td></tr>  

			<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Add" class="submitbutton"></td></tr>
		</table>
	</form>
	<span class="validation-errors"><?php echo validation_errors(); ?></span>
</body>
</html>