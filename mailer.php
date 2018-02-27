<?php
/* Set e-mail recipient */
$myemail = "spacica4@gmail.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['username'], "Enter your namefgdfgdfgf");
$mobile = check_input($_POST['contact'], "Enter a Mobile Number");
$email = check_input($_POST['email']);
$subject = check_input($_POST['subject']);
$message = check_input($_POST['msg'], "Write your message");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("E-mail address not valid");
}
/* Let's prepare the message for the e-mail */
$message = "

Name: $name
E-mail: $email
Mobile number: $mobile
Message:$message

";

/* Send the message using mail() function */
if(mail($myemail, $subject, $message))

{
   
   ?>
   
   <script>
       
       alert("Your Message send to Spacica ");
       window.location.href="contact.php";
       
   </script>
   
   <?php
    
}

/* Redirect visitor to the thank you page */
//header('Location: contact.php');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}
?>