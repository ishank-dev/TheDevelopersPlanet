<?php
include_once ("includes/header.php");
include_once ("includes/form_handler/settings_handler.php");
?>

<script>
	function openFileInput(){
    	$("#picture").click();
	}
</script>

<div class='main_column column'>
	
	<h4>Account Settings</h4>
	<a href="javascript:void(0);" onclick="openFileInput();">
		<?php
		echo "<img src='".$user['profile_pic']."' id='small_profile_pic'>";
		?><a href="https://getavataaars.com" target = "_blank">Click here to build avatar</a>
		<br>
		Upload new profile picture 
	</a><br>
	
	<form action="settings.php" method="POST" enctype="multipart/form-data" class="">
		<input type='file' name='profilePicture' id="picture">
		<?php echo $picture; ?>
		<br>
		<input type='submit' name='update_picture' value="Update Picture" class="info settings_submit">
	</form>

	<h4>Modify the values and click 'Update Details'</h4>

	<?php
	$user_data_query = mysqli_query($con, "SELECT first_name, last_name, email FROM users WHERE username='$userLoggedIn'");
	$row = mysqli_fetch_array($user_data_query);

	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email']
	?>

	<form action="settings.php" method="POST">
		First Name: <input type='text' name='first_name' value="<?php echo $first_name; ?>" class="settings_input"><br>
		Last Name: <input type='text' name='last_name' value="<?php echo $last_name; ?>" class="settings_input"><br>
		Email: <input type='text' name='email' value="<?php echo $email; ?>" class="settings_input"><br>

		<?php echo $message; ?>

		<input type="submit" name="update_details" id="save_detail" value="Update Details" class="info settings_submit"><br>
	</form>

	<h4>Change Password</h4>
	<form action="settings.php" method="POST">
		Old Password: <input type='password' name='old_password' class="settings_input"><br>
		New Password: <input type='password' name='new_password_1' class="settings_input"><br>
		New password Again: <input type='password' name='new_password_2' class="settings_input"><br>

		<?php echo $password_message; ?>

		<input type="submit" name="update_password" id="save_details" value="Update Password" class="info settings_submit"><br>
	</form>

	<h4>Close Account</h4>
	<form action="settings.php" method="POST">
		<input type="submit" name="close_account" id="close_account" value="Close Account" class="danger settings_submit">
	</form>

</div>