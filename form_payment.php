<?php 
if(!isset($_POST['firstname'])){header("location:index.php");}
$MERCHANT_KEY = "rjQUPktU";
$SALT = "e5iIg1jwi8";
 $firstname =$_POST['firstname'];
 $email =$_POST['email'];
 $phone =$_POST['phone'];
 $productinfo =$_POST['productinfo'];
 $service_provider ="payu_paisa";
 $amount =$_POST['amount'];
 $txnid =$_POST['txnid'];
 $productinfo =$_POST['productinfo'];
 $surl =$_POST['surl'];
 $furl =$_POST['furl'];
 $hashseq=$MERCHANT_KEY.'|'.$txnid.'|'.$amount.'|'.$productinfo.'|'.$firstname.'|'.$email.'|||||||||||'.$SALT;
 $hash =strtolower(hash("sha512", $hashseq)); 
?>


<!DOCTYPE html>
<html>
<head>


 <script>
    function submitForm() {
      var postForm = document.forms.postForm;
      postForm.submit();
    }
</script>
</head>
<body onload="submitForm();">
<center>
<div>
<h1>LOADING</h1>
<table>
<tr><td>Transaction Id</td><td><strong><?php echo $_POST['txnid']; ?></strong></td><td>Amount: </td><td><strong>Rs. <?php echo $_POST['amount']; ?></strong></td>
</table>
</div>
<div>for live payment change https://test.payu.in/_payment to https://secure.payu.in/_payment


  <form name="postForm" action="https://test.payu.in/_payment" method="POST" >
  <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY; ?>" />
  <input type="hidden" name="hash" value="<?php echo $hash;  ?>"/>
  <input type="hidden" name="txnid" value="<?php echo $_POST['txnid'];  ?>" />
  <input type="hidden" name="amount" value="<?php echo $_POST['amount'];  ?>" />
  <input type="hidden" name="firstname" value="<?php echo $_POST['firstname'];  ?>" />
  <input type="hidden" name="email" value="<?php echo $_POST['email'];  ?>" />
  <input type="hidden" name="phone" value="<?php echo $_POST['phone'];  ?>" />
  <input type="hidden" name="productinfo" value="<?php echo $_POST['productinfo'];  ?>" />
  <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
  <input type="hidden" name="surl" value="<?php echo $_POST['surl'];  ?>" />
  <input type="hidden" name="furl" value="<?php echo $_POST['furl'];  ?>" />
 </form>
</div>
</center>
</body>
</html>