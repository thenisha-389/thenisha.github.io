<?php
include("connect.php");
$f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=" ";
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $f1=$_POST["fname"];
     $f2=$_POST["sname"];
     $f3=$_POST["hno"];
     $f4=$_POST["street"];
     $f5=$_POST["city"];
     $f6=$_POST["state"];
     $f7=$_POST["country"];
     $f8=$_POST["zip"];
     $f9=$_POST["contact"];
     $f10=$_POST["email"];
    $query= "INSERT INTO buyerreg (fname,sname,hno,street,city,state,country,zip,contact,email) VALUES ('$f1','$f2','$f3','$f4','$f5',$f6,$f7,'$f8','$f9','$f10');";
    if(mysqli_query($con,$query))
    {
        $f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=$f9=$f10=" ";
    }

}
?>
