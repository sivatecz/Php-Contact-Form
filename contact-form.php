<?php
if(isset($_REQUEST['submit']))
{
$subject = 'Contact Details';
$message .=$_POST['name'];
$message .=$_POST['email'];
$message .=$_POST['phone'];
$message .=$_POST['comments'];
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:'.$_POST["email"]. "\r\n";
$mail=mail('youremailaddress', $subject, $message, $headers);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form</title>
</head>

<body>


<script type="text/javascript" language="javascript">

function validate()
	{
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var address = document.form1.email.value;
	
	if(document.form1.name.value=='')
	{
	alert("Please Enter Your Name");
	document.form1.name.focus();
	return false
	}
	
	if(document.form1.email.value=='')
	{
	alert("Please Enter Your Email");
	document.form1.email.focus();
	return false
	}
	if(reg.test(address) == false)
	{
	alert('Invalid Email Address');
	document.form1.email.focus();
	return false
	}
	
	return true
	}

</script>


<form name="form1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" onsubmit="return validate()">

<input type="text" name="name" placeholder="name" />
<input type="email" name="email" value="" placeholder="email" />
<input type="phone" name="phone" placeholder="phone" />
<textarea rows="10" name="comments" class="box_style1"></textarea>
<input type="submit" name="submit" value="submit" />
</form>

</body>
</html>