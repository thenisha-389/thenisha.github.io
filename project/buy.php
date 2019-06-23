<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['fname']) && isset($_POST['sname'])){
        $fname = $_POST['fname'];
				$sname = $_POST['sname'];
				$hno = $_POST['hno'];
				$street = $_POST['street'];
				$city = $_POST['city'];
				$zip = $_POST['zip'];
				$contact = $_POST['contact'];
	$email = $_POST['email'];
	$bid = $_POST['bid'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];


        $query = "INSERT INTO `buyerreg` (fname, sname, hno, street, city, zip, contact, email, bid, password, cpassword) VALUES ('$fname', '$sname', '$hno', '$street', '$city', '$zip', '$contact', '$email','$bid','$password','$cpassword')";
        $result = mysqli_query($con, $query);
        if($result){
            $smsg = "User Created Successfully.";
						header("location: head.php");
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
