<?php

// $to = "seoulsaloninc@live.com";
$email = $_POST["email"];
$to = "choe0002@hotmail.com";
$header = "From:daewon.choe@gmail.com \r\n";
$subject = "Rate My Service";

$expectations = $_POST['expectations'] == "Yes" ? "Yes" : "No";
$see_again = $_POST['see_again'] == "Yes" ? "Yes" : "No";

$message = 	"Name: " . $_POST["name"] . "\n" .
			"Phone: " . $_POST["phone"] . "\n" .
			"Email: " . $_POST["email"] . "\n" .
			"Address: " . $_POST["address"] . "\n" .
			"City: " . $_POST["city"] . "\n" .
			"State: " . $_POST["state"] . "\n" .
			"Zip: " . $_POST["zip"] . "\n" .
			"Service Provider: " . $_POST["$stylists"] . "\n" .
			"Date of Service: " . $_POST["$dateOfService"] . "\n" .
			"Was your expectations?: " . $expectations . "\n" .
			"Will we see you again?: " . $see_again . "\n" .
			"Additional Comments: " . $_POST["comments"] . "\n";
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

<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
$(function() {
	$( "#datepicker" ).datepicker();
});
</script>

<style type="text/css">
<!--
.style1 {font-size: 16px}
-->
</style>
</head>

<body onload="MM_preloadImages('buttons/ourServicesOne.jpg','buttons/ourProductsOne.jpg','buttons/StylistOne.jpg','buttons/clientTestimonialsOne.jpg','buttons/homeOne.jpg','buttons/renovationsOne.jpg')">

<?php
	$default = "rateService";
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

  <form method="post" action="Survey.php">
  <tr>
    <td width="600" colspan="2">
     	SEOUL SALON INC recognizes that we are not always perfect with our service 
     	delivery and we appreciate any constructive feedback you have to offer. If you had 
     	an excellent experience, of course, we love to hear about this as well! Please 
     	fill out and submit the completed survey. 
     	
     	<br>
     	<br>
     	
     	All information will be confidential and used for coaching purposes. 
     	
     	<br>
     	<br>
     	Thank you for taking the time to let us know what you think!
    </td>
  </tr>
  <tr>
	  <td colspan="2" height="6">
	  </td>
  </tr>
  <tr>
    <td width="200" align="right">
     	Your Name:
    </td>
    <td width="400" >
	    <input type="text" name="name" size="50">
    </td>
  </tr>
  <tr>
    <td width="200" align="right">
     	Phone:
    </td>
    <td>
	    <input type="text" name="phone" size="30">
    </td>
  </tr>
  <tr>
      <td width="200" align="right">
       	Email:
      </td>
      <td>
  	    <input type="text" name="email" size="50">
      </td>
  </tr>
  
  <tr>
    <td width="200" align="right">
     	Address:
    </td>
    <td>
	    <input type="text" name="address" size="30">
    </td>
  </tr>
  <tr>
    <td width="200" align="right">
     	City:
    </td>
    <td>
	    <input type="text" name="city" size="30">
    </td>
  </tr>
  <tr>
    <td width="200" align="right">
     	State:
    </td>
    <td>
	    <input type="text" name="state" maxlength="2" size="2">
    </td>
  </tr>
  <tr>
    <td width="200" align="right">
     	Zip:
    </td>
    <td>
	    <input type="text" name="zip" maxlength="10" size="10">
    </td>
  </tr>
  <tr>
    <td width="200" align="right">
     	Service Provider:
    </td>
    <td>
    	<select name="stylists">
    		<option value="nicole">Nicole</option>
    		<option value="jeanie">Jeanie</option>
		<option value=“rachel”>Rachel</option>
	    </select>
    </td>
  </tr>
  <tr>
    <td width="200" align="right">
     	Date of Service:
    </td>
    <td>
	    <input type="text" name="dateOfService" id="datepicker">
    </td>
  </tr>
  <tr>
    <td width="200" align="right">
     	Was your expectations?:
    </td>
    <td>
    	<select name="expectations">
    		<option value="exceed">exceeded</option>
    		<option value="jeanie">met</option>
    		<option value="mandy">not met</option>
	    </select>
    </td>
  </tr>
  <tr>
    <td width="200" align="right">
     	Will we see you again?:
    </td>
    <td>
	    <input type="radio" name="see_again" value="Yes">Yes
	    <input type="radio" name="see_again" value="No">No
    </td>
  </tr>
  <tr>
    <td width="200" align="right">
     	Additional Comments:
    </td>
    <td>
	    <textarea rows="9" cols="50" name="comments"/></textarea>
    </td>
  </tr>
  <tr>
  		<td width="200" valign="top" align="right">
      </td>
		<td>
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
