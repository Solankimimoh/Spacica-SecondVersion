<?php
session_start();

?>

<?php
include("includes/dbfunctions.php");
$db = new DB_FUNCTIONS();


if(isset($_POST['sbmt']))
{

	$username = $_POST['username'];
	$password = $_POST['password'];
	$cnfrmpassword = $_POST['cnfrmpassword'];
	
	
	if($password == $cnfrmpassword)
	{
		
		$selectuser = "SELECT * FROM `admin_login` WHERE `username` = '$username' ";
		$result = mysqli_query($db->con,$selectuser);
		
		
		$count = mysqli_num_rows($result);
		
		if($count > 0)
		{
						$update = "UPDATE `admin_login` SET `password`='$password' WHERE `username` = '$username' ";

					if(mysqli_query($db->con,$update))
					{

					?>

				<script type="application/javascript">
					alert("New Password updated ! try login with new password");
					window.location.href = "index.php";

				</script>
				<?php

					}
		}
		else
		{
			?>

				<script type="application/javascript">
					alert("Username Wrong Password not updated");
					window.location.href = "forgot.php";

				</script>
				<?php
		}
		
		
		
		
		
	}
	else
	{
		?>

	<script type="application/javascript">
		alert("Password and Confirm Password not match try again !");
		window.location.href = "forgot.php";

	</script>
	<?php
	}
	
	
	
}

?>
