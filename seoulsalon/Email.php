<?php

$to = "seoulsaloninc@live.com";
$header .= "From:daewon.choe@gmail.com \r\n";
$header .= "Cc: " . $_POST["email"] . "\r\n";
$subject = $_POST["subject"];
$message = "email: " . $_POST["email"] . "\n" . "message: " . $_POST["message"];
$submit = $_POST["submit"];
$confirmation = "";

if ($submit == "submit" ) {
	$retval = mail ($to,$subject,$message,$header);
	if( $retval == true )  {
    	$confirmation = "Message sent successfully...";
	}
	else {
		$confirmation = "Message could not be sent...";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Seoul Salon - Contacts</title>
<link rel="stylesheet" type="text/css" href="include/style.css">
<style type="text/css">
<!--
.style1 {font-family: "Adobe Garamond Pro"}
-->
</style>
</head>

<body>

<?php 
    $default = "contacts"; 
    include 'include/header.php';
?>
    	
<table width="800" border="0" align="center">
  <tr>
  	  <td colspan="2">
  		<?php echo $confirmation; ?>
  	  </td>
  </tr>
  
  <?php
  if ($confirmation == "" ) {
  ?>
  <tr>
	  <td colspan="2" height="10">
	  </td>
  </tr>

  <form method="post" action="Email.php">
  <tr>
    <td width="100" align="right">
     	subject:
    </td>
    <td>
	    <input type="text" name="subject" size="52">
    </td>
  </tr>
  <tr>
      <td width="100" align="right">
       	email:
      </td>
      <td>
  	    <input type="text" name="email" size="52">
      </td>
  </tr>
  <tr>
  	  <td width="100" valign="top" align="right">
	       	message:
      </td>
	  <td colspan="2">
		<textarea name="message" rows="15" cols="40"></textarea>
	  </td>
  </tr>
  <tr>
  		<td width="100" valign="top" align="right">
      </td>
		<td colspan="2">
			<input type="submit" name="submit" value="submit">
		</td>
  </tr>
  </form>
  
  <?php
  }
  ?>
</table>

<?php
	include 'include/footer.php';
?>

</body>
</html>
