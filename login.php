<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
</head>

<body>
<fieldset>
<legend>Contact Form</legend>
<form name="frmContact" method="post" action="contact.php">
<p>
<label for="UserName">Username </label>
<input type="text" name="username" id="txtName">
</p>
<p>
<label for="Password">password</label>
<input type="text" name="password" id="txtEmail">
</p>
<p>
<label for="type">type</label>
<input type="text" name="type" id="txtPhone">
</p>

<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</body>
</html>
