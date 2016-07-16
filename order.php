<?php session_start(); ?>
<html>
<head>
<title> </title>

</head>
<body>
<!-- Menu -->
<form name="orderform" action="order_response.php" method="post">
<input name="UNIQUE_ID" value="" type="hidden"><!-- Unique identifier for the member or dependent record -->
<input name="PAYMENT_PROCESS" value="Y" type="hidden">
<input name="PAYMENT_TYPE" value="CC" type="hidden">


<table>
<tr><td colspan=4><h2>Personal Information</h2></td></tr>
<tr><td>First Name</td><td><input name="FIRST_NAME" type="text"></td><td>Last Name</td><td><input name="LAST_NAME" type="text"></td></tr>
<tr><td>Address</td><td colspan=3><input name="ADDRESS_1" type="text" size=60 rows=2></td></tr>
<tr><td>City</td><td><input name="CITY" type="text"></td><tr><td>State</td><td><input name="STATE"  size=10 type="text"></td>
<td>Zip code</td><td colspan=2><input name="ZIP_CODE" size=10 type="text"><input name="COUNTRY" value="USA" type="hidden"> </td></tr>
<tr><td>Contact Phone#</td><td><input name="DAYPHONE" maxlength="10" type="text"><!-- 10 digit phone number --></td></tr>
<tr><td>Email</td><td><input name="EMAIL" type="text"></td></tr>

<tr><td>Plan</td><td><select name="PLAN_SUBSCRIBED">
	<option selected="selected" value=""></option>
	<option value="myhealthpass">$24.95 Monthly - MyHealthPass</option>
	<option value="healthmd">$14.95 Monthly - HealthPass MD</option>
</select></td></tr>

<tr><td colspan=4><h2>Billing Information</h2></td></tr>

<tr><td>Credit Card Type</td><td><select name="CC_TYPE">
	<option selected="selected" value=""></option>
	<option value="Visa">Visa</option>
	<option value="Mastercard">Mastercard</option>
	<option value="Amex">Amex</option>
	<option value="Discover">Discover</option>
</select></td></tr>
<tr><td>Credit Card Number</td><td><input name="CC_NUMBER" maxlength="16" type="text" size="16"></td></tr>
<tr><td>Credit Card Expiration</td><td><input name="CC_EXP_MONTH" maxlength="2" type="text" size="2"> / <input name="CC_EXP_YEAR" maxlength="4" type="text" size="4"></td></tr>
<tr><td>Credit Card CVV2</td><td><input name="CC_CVV2" maxlength="4" size=5 type="text"></td></tr>

<tr><td colspan=4 align=center><input name="USERNAME" type="hidden"><br><input name="PASSWORD" type="hidden">
<br>
<button type="submit" name="Process" value="submit"><img src="images/submit.jpg"></button>
</td>
</tr></table>
</form>
</body>
</html>


























