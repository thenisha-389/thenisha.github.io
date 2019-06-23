<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['oname']) && isset($_POST['cpassword1'])){
        $oname = $_POST['oname'];
				$owname = $_POST['owname'];
				$address = $_POST['address'];
				$city = $_POST['city'];
				$state = $_POST['state'];
				$zip = $_POST['zip'];
				$email = $_POST['email'];
	$phno = $_POST['phno'];
	$fno = $_POST['fno'];
	$mono = $_POST['mono'];
   $bankname = $_POST['bankname'];
  $branchname = $_POST['branchname'];
  $branchaddress = $_POST['branchaddress'];
  $taccount = $_POST['taccount'];
  $accountno = $_POST['accountno'];
  $ifsc = $_POST['ifsc'];
    $regid = $_POST['regid'];

  $sid = $_POST['sid'];
  $password1 = $_POST['password1'];
  $cpassword1 = $_POST['cpassword1'];


        $query1 = "INSERT INTO `seller` (oname, owname, address, city, state, zip, email, phno, fno, mono, bankname, branchaddress, taccount, accountno, ifsc, regid, sid, password1, cpassword1) VALUES ('$oname', '$owname', '$address', '$city', '$state', '$zip', '$email', '$phno', '$fno', '$mono', '$bankname', '$branchname', '$branchaddress', '$taccount', '$accountno', '$ifsc','$regid', '$sid', '$password1', '$cpassword1')";
         /*$query1 = "INSERT INTO `seller` (branchname, branchaddress, taccount, accountno, ifsc, regid, pancard, sid, password1, cpassword1) VALUES ('$branchname', '$branchaddress', '$taccount', '$accountno', '$ifsc', '$regid', '$pancard', '$sid', '$password1', '$cpassword1')";*/
        $result1 = mysqli_query($con, $query1);
        if($result1){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
        /*$result1 = mysqli_query($con, $query1);
        if($result1){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }*/
    }
    ?>
