<html>
<head>
<title> ME foundation</title>
</head>
<body bgcolor="#b3ffff">
<h1 style="color:blue;width:250px;height:20px;margin:auto;padding:10px;text-decoration:underline">Me Foundation</h1>
<hr>
<h2 style="color: #4d94ff"><i>Me Foundation</i>, we serve the orphans .We collect money as funds from the donations and we them to the orphanages
.For donations fill the from and click donate</h2>
<center>
<div style="padding:10px;width:300px;height:200px;background:#99e6e6;">
<table>
 <form name="postForm" action="form_payment.php" method="POST"  >
 <tr><td></td><td><input type="hidden" name="txnid" value="<?php echo $txnid=time().rand(1000,99999); ?>"></td></tr>
 <tr><td></td><td></td></tr>
 <tr><td>Amount:</td><td><input type="text" name="amount" value="" ></td></tr>
 <tr><td></td><td></td></tr>
 <tr><td>Name:</td><td><input type="text" name="firstname" value="" ></td></tr>
 <tr><td></td><td></td></tr>
 <tr><td>Email:</td><td><input type="text" name="email" value=""> </td></tr>
 <tr><td></td><td></td></tr>
 <tr><td>Phone:</td><td><input type="text" name="phone" value="" ></td></tr>
 <tr><td></td><td></td></tr>
 <tr><td>Purpose:</td><td><input type="text" name="productinfo" value="Donations" ></td></tr>
 <tr><td></td><td></td></tr>
 <tr><td></td><td><input type="hidden" name="surl" value="http://localhost/payment/success.php" size="64" ></td></tr>
 <tr><td></td><td></td></tr>
 <tr><td></td><td><input type="hidden" name="furl" value="http://localhost/payment/fail.php" size="64" ></td></tr>
 <tr><td></td><td></td></tr>
 <tr><td></td><td><input type="submit"  value="Donate"/></td><tr>
 </form>
</table>
</div>
</center>

<form  style="background:white;padding:20px;width:250px;height:100px" >
<caption><u>Test card details</u><caption>
<table border="0px">
<tr><td>Card no:</td><td>5123456789012346</td></tr>
<tr><td>Expiry date:</td><td>05/20</td></tr>
<tr><td>CVV:</td><td>123</td></tr>
<tr><td>Name:</td><td>Test</td></tr>
</table>
</form>
</body>
</html>