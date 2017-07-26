<!DOCTYPE html>
<?php
/**
 * Created by PhpStorm.
 * User: Isma3
 * Date: 21/07/2017
 * Time: 3:15 AM
 */
?>
<html>
<body>

<h2>Resigtration Form</h2>
<table>
<form method = "post" action="http://mydev.com/Registration/add_user">
    <input type="hidden" name="updateid" value="<?php /*echo $userList['0']['id']*/?>">
	<tr>
		<td>
		<label><b>First Name</b></label>
		</td>
        <td>
		<input type="text" placeholder="Enter First Name" name="fname" value="<?php /*echo $userList['0']['firstname']*/?>" required>
		</td>
	</tr>
	<tr>
		<td>
		<label><b>Last Name</b></label>
        </td>
		<td>
		<input type="text" placeholder="Enter Last Name" name="lname" value="<?php /*echo $userList['0']['lastname']*/?>" required>
		</td>

	</tr>
	<tr>
		<td>
		<label><b>Gender</b></label>
		</td>
        <td>
		<input type="radio" name="gender" value="male" <?php /*if($userList['0']['gender'] == "male"){echo "checked";}*/?>> Male
<input type="radio" name="gender" value="female" <?php /*if($userList['0']['gender'] == "female"){echo "checked";}*/?>> Female
</td>
</tr>
<tr>
    <td>
        <label><b>Age</b></label>
    </td>
    <td>
        <input type="Number" placeholder="Select
		" name="age" min="0" max="100" value="<?php /*echo $userList['0']['age']*/?>" required>
    </td>
</tr>
<tr>
    <td>
        <label><b>Email</b></label>
    </td>
    <td>
        <input type="text" placeholder="Enter Email" name="email" value="<?php /*echo $userList['0']['email']*/?>" required>
    </td>
</tr>
<tr>
    <td>
        <label><b>Password</b></label>
    </td>
    <td>
        <input type="password" placeholder="Enter Password" name="paswrd" value="<?php /*echo $userList['0']['password']*/?>" required>
    </td>
</tr>
<tr>
    <td>
        <input type="checkbox" checked="checked"> Remember me
    </td>
</tr>
<tr>
    <td>
        <button type="submit" >Submit</button>
    </td>
</tr>

</form>
</table>
</body>
</html>