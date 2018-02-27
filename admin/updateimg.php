<?php
session_start();
?>
<?php
include ("includes/dbfunctions.php");
include("js/plugins/test.php");

$db = new DB_FUNCTIONS();

// $con = mysqli_connect("localhost", "root", "", "image_gallery");

if (isset($_SESSION['login_user']))
	{
	}
  else
	{
?>
	<script type="application/javascript">
		window.location.href = "index.php"

	</script>
	<?php
	}

?>



	<?php

if (isset($_POST['submit']))
	{
	
	
 $path = "uploads/";

	
	if ($_FILES["photo"]["error"] > 0)
		{
		echo "Error: " . $_FILES["photo"]["error"] . "<br />";
		}
	  else
		{
		
		$allowed = array(
			"jpg" => "image/jpg",
			"JPG" => "image/jpg",
			"jpeg" => "image/jpeg",
			"gif" => "image/gif",
			"png" => "image/png"
		);
		  $img_parent_id = $_POST['img_parent_id'];
		$filename = $_FILES["photo"]["name"];
		$filetype = $_FILES["photo"]["type"];
		$filesize = $_FILES["photo"]["size"];

		// Verify file extension

		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

		// Verify file size - 2MB maximum

		$maxsize = 2 * 1024 * 1024;
		if ($filesize > $maxsize)
			{
?>

		<script type="application/javascript">
			alert("Error: File size is larger than the allowed limit.");
			window.location.href = "home.php";

		</script>

		<?php
			}

		// Verify MYME type of the file

		if (in_array($filetype, $allowed))
			{

			// Check whether file exists before uploading it

			if (file_exists("uploads/" . $_FILES["photo"]["name"]))
				{
				?>


			<script type="application/javascript">
				alert("File can't upload ! File already exists");
				window.location.href = "home.php";

			</script>
			<?php
				}
			  else
				{
				$delete_imge = "SELECT * FROM `imageinfo` WHERE `imgid` = '$img_parent_id' ";
				  
				$result = mysqli_query($db->con, $delete_imge);
				$rowcount = mysqli_num_rows($result);
				  
				  
				while ($row = mysqli_fetch_row($result))
					{
					
					if (unlink($path.$row[1]))
						{
						
						$insert_slider = "UPDATE `imageinfo` SET `imgname`='$filename',`imgtype`='$filetype',`imgsize`='$filesize' WHERE `imgid` = '$img_parent_id'";
						
						
						if (mysqli_query($db->con, $insert_slider))
							{
							
							
					//indicate which file to resize (can be any type jpg/png/gif/etc...)
      $file = $_FILES["photo"]["tmp_name"];

      //indicate the path and name for the new resized file
      $resizedFile = 'uploads/'.$filename;

      //call the function with crop from top
      smart_resize_image($file , null, 700 , 700 , false , $resizedFile , false , false , 300 , true);

     
      //done!	
							
							$last_id = mysqli_insert_id($db->con);
							if (smart_resize_image(null , file_get_contents($file), 700 , 700 , false , $resizedFile , false , false ,100, false))
								{
?>
				<script type="application/javascript">
					alert("Your file was Updated successfully.");
					window.location.href = "home.php";

				</script>

				<?php
								}
							  else
								{
								$delete = "DELETE FROM `imageinfo` WHERE `imgid`='$last_id'";
								if (mysqli_query($db->con, $delete))
									{
?>


					<script type="application/javascript">
						window.location.href = "home.php";

					</script>

					<?php
									}
								}
							}
						}
					}
				}
			}
		  else
			{
?>

						<script type="application/javascript">
							alert("Error: There was a problem uploading your file - please try again.");
							window.location.href = "home.php";

						</script>

						<?php
			}
		}
	}
  else
	{
?>


							<script type="application/javascript">
								alert("Error: Invalid parameters - please contact your server administrator.");
								window.location.href = "home.php";

							</script>

							<?php
	}

?>
