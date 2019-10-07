<?php include('header.php'); ?>
<?php
$postdata = $_POST;
$msg = '';
$msg = "Transaction Successful";
if (isset($postdata ['key'])) {
	$key				=   $postdata['key'];
	$salt				=   $postdata['salt'];
	$txnid 				= 	$postdata['txnid'];
    $amount      		= 	$postdata['amount'];
	$productInfo  		= 	$postdata['productinfo'];
	$firstname    		= 	$postdata['firstname'];
	$email        		=	$postdata['email'];
	$udf5				=   $postdata['udf5'];
	$mihpayid			=	$postdata['mihpayid'];
	$status				= 	$postdata['status'];
	$resphash			= 	$postdata['hash'];
	//Calculate response hash to verify	
	$keyString 	  		=  	$key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'|||||';
	$keyArray 	  		= 	explode("|",$keyString);
	$reverseKeyArray 	= 	array_reverse($keyArray);
	$reverseKeyString	=	implode("|",$reverseKeyArray);
	$CalcHashString 	= 	strtolower(hash('sha512', $salt.'|'.$status.'|'.$reverseKeyString));
	
	
	if ($status == 'success'  && $resphash == $CalcHashString) {
		
        $msg = "Transaction Successful...";
		
        $odt = date('d-m-Y');
        $uid = $_SESSION['uid'];
        $mdt = $_SESSION['dt'];
         $tm = $_SESSION['time'];
        $movie = $_SESSION['movie'];
        $seats = $_SESSION['seats'];
        $amt = $_SESSION['amt'];

        $cmd = "insert into booking_tbl (uid, odate, mdate, mtime, movie, seats, amount, txnid) values('$uid','$odt','$mdt','$tm', '$movie','$seats','$amt', '$txnid')";
	}
	else {
		//tampered or failed
		$msg = "Payment failed for Hasn not verified...";
	} 
}
else exit(0);
?>



<div class="col-md-12 text-center" >
    
    <h3 style="color:#666; margin-top:150px;"><?php echo $msg; ?></h3>
    <br><br>
    <a href="index.php" class="btn btn-info">Back to Home</a>
</div>
<!-- <div class="main">
	<div>
    	<img src="images/payumoney.png" />
    </div>
    <div>
    	<h3>PHP7 BOLT Kit Response</h3>
    </div>
	
    <div class="dv">
    <span class="text"><label>Merchant Key:</label></span>
    <span><?php //echo $key; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Merchant Salt:</label></span>
    <span><?php //echo $salt; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Transaction/Order ID:</label></span>
    <span><?php //echo $txnid; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Amount:</label></span>
    <span><?php //echo $amount; ?></span>    
    </div>
    
    <div class="dv">
    <span class="text"><label>Product Info:</label></span>
    <span><?php //echo $productInfo; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>First Name:</label></span>
    <span><?php //echo $firstname; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Email ID:</label></span>
    <span><?php //echo $email; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Mihpayid:</label></span>
    <span><?php //echo $mihpayid; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Hash:</label></span>
    <span><?php //echo $resphash; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Transaction Status:</label></span>
    <span><?php //echo $status; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Message:</label></span>
    <span><?php //echo $msg; ?></span>
    </div>
</div> -->




<?php include('footer.php'); ?>