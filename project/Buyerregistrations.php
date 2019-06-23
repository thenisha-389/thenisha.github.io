<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<style>
body {
  margin: 0;
  font-size: 28px;
}



#navbar {
  overflow: hidden;
  background-color: #003300;
}
#navbar .name a{
  float: left;
  font-family: 'Montserrat';
  text-transform: uppercase;
    font-size: 17px;
}

#navbar a {
  float: right;
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 12px;
  font-family: 'Open Sans', 'sans-serif';
  text-transform: uppercase;
  letter-spacing: 3px;

}

#navbar a:hover {
  background-color:#002200;
  border-color: #003300;
  color:#FFCC00 ;
}



.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
</style>
</head>


<body>

<div id="navbar">
  <div class="name">
    <a href="">bigbasket</a>
  </div>
  <a class="active" href="javascript:void(0)">Home</a>
  <a href="javascript:void(0)">Contact</a>
  <a href="javascript:void(0)">Sign in</a>
  <a href="javascript:void(0)">Register</a>
</div>
<tr> <td>&nbsp;</td> </tr>
<tr> <td>&nbsp;</td> </tr>
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <br><br><td><h3>BUYER REGISTRATION</h3></td>
</tr><center>

  <form name="myForm" action="buy.php"
  onsubmit="return validateForm()" method="POST">
  <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<tr>
    <td align='center'>First Name:</td>
    <td><input type='text' name='fname' id="fname"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Second Name:</td>
    <td><input type='text' name='sname' id="sname"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>house no:</td>
    <td><input type='text' name='hno' id="hno"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Street:</td>
    <td><input type='text' name='street' id="street"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>City:</td>
    <td><input type='text' name='city' id="city"></td>
</tr>

<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>State:</td>
    <td><input type='text' name='state' id="state"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Country:</td>
    <td><input type='text' name='country' id="country"></td>
</tr>

<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>ZIP Code:</td>
    <td><input type='text' name='zip' id="zip"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Contact:</td>
    <td><input type='text' name='contact' id="contact"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>E-Mail id:</td>
    <td><input type='text' name='email' id="email"></td>
</tr>

<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Buyer ID:</td>
    <td><input type='text' name='bid' id="bid"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Password:</td>
    <td><input type='text' name='password' id="password"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Confirm Password:</td>
    <td><input type='text' name='cpassword' id="cpassword"></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
  <td align='center'><input type='submit' name='register' value="submit" id="register"></td>
</tr>
</table>
</table>

</table>
</form>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("FirstName must be filled out");
        return false;
    }
    var y = document.forms["myForm"]["sname"].value;
    if (y == "") {
        alert("LastName must be filled out");
        return false;
    }
    var z = document.forms["myForm"]["hno"].value;
    if (z == "") {
        alert("House sNo must be filled out");
        return false;
    }
    var x1 = document.forms["myForm"]["street"].value;
    if (x1 == "") {
        alert("Street must be filled out");
        return false;
    }
    var x2 = document.forms["myForm"]["city"].value;
    if (x2 == "") {
        alert("City must be filled out");
        return false;
    }
    var  x3= document.forms["myForm"]["state"].value;
    if (x3 == "") {
        alert("State must be filled out");
        return false;
    }
    var x4 = document.forms["myForm"]["country"].value;
    if (x4 == "") {
        alert("Country must be filled out");
        return false;
    }
    var x5 = document.forms["myForm"]["zip"].value;
    if (x5 == "") {
        alert("zip must be filled out");
        return false;
    }
    var x6 = document.forms["myForm"]["contact"].value;
    if (x6 == "") {
        alert("Contact must be filled out");
        return false;
    }
    var x7 = document.forms["myForm"]["email"].value;
    if (x7 == "") {
        alert("Email must be filled out");
        return false;
    }
    var x8 = document.forms["myForm"]["bid"].value;
    if (x8 == "") {
        alert("Buyer Id must be filled out");
        return false;
    }
    var x9 = document.forms["myForm"]["password"].value;
    if (x9 == "") {
        alert("Password must be filled out");
        return false;
    }
    var x10 = document.forms["myForm"]["cpassword"].value;
    if (x10 == "") {
        alert("Confirm Password must be filled out");
        return false;
    }
    var emailvalid = document.forms["myForm"]["email"].value;
    var atpos = emailvalid.indexOf("@");
    var dotpos = emailvalid.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=emailvalid.length) {
        alert("Not a valid e-mail address");
        return false;
    }

        if( document.myForm.zip.value == "" ||
        isNaN( document.myForm.zip.value ) ||
        document.myForm.zip.value.length != 5 )
        {
           alert( "Please provide a zip in the format #####." );
           document.myForm.zip.focus() ;
           return false;
        }
        var passwordvalid=document.myForm.password.value;
var cpasswordvalid=document.myForm.cpassword.value;

if(passwordvalid==cpasswordvalid){
return true;
}
else{
alert("password must be same!");
return false;
}


}

</script>

</body>
</html>
