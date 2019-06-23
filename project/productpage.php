
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.add-to-cart__add-btn {
    background-color: #fff;
    border-radius: 68px;
    color: #e96125;
    font-size: 12px;
    top:10px;
}
.add-to-cart__add-btn {

    background-color: #e96125;
    border: 1px solid #e96125;
    color: #fff;
    cursor: pointer;
    font-family: inherit;
    font-size: 14px;
    display: inline-block;
    height: inherit;
    margin: 0;
    outline: 0;
    padding: 5px;
    text-align: center;
    vertical-align: middle;
}
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
.wrap{padding:10px;}
/** CSS Mobile Reset **/
html,body{height:100%}
*{font-style:normal}
* {box-sizing:border-box}
body,p,h1,h2,h3,h4,h5,h6,ul,ol,li,dl,dt,dd,table,th,td,form,fieldset,legend,input,textarea,button,select{margin:0;padding:0}
body{line-height:1.2em;background-color:#fff;color:#303030;font-size:16px;font-family:Dotum,"돋움",Gulim,"굴림",Verdana,Helvetica,Tahoma,sans-serif;
font-weight:normal;-webkit-text-size-adjust:none;word-wrap:break-word}
h1,h2,h3,h4,h5,h6{font-size:1.3em;font-weight:normal}
section,nav,article,aside,hgroup,header,footer{display:block}
img,input,select,textarea{vertical-align:middle}
fieldset,img{border:0}
ul,ol,li{list-style:none}
caption,hr,legend{overflow:hidden;visibility:hidden;width:0;height:0;line-height:0;font-size:0;color:transparent !important;text-indent:-9999em}
table{border-spacing:0;border-collapse:collapse;word-break:break-all;font-size:1em}
a,a:link,a:visited,a:active,a:hover{color:inherit;text-decoration:none}
th,strong,em{font-weight:normal;font-style:normal}
a{-webkit-tap-highlight-color:transparent}
input,select, textarea{-webkit-appearance:none;-moz-appearance:none;outline:none;border:none}
select, input[type="text"], textarea{background-color:transparent;border:none}
a:active, a:hover{outline:0}

/* scrollbar */
::-webkit-scrollbar {width:6px}
::-webkit-scrollbar-track {background:#fff}
::-webkit-scrollbar-thumb {border-radius:10px;background:#ccc}
::-webkit-scrollbar-thumb:window-inactive {background:#ccc}

/* button */

/* modal Pop */
.modalDialog{
	position:fixed;
	top:0;
	right:0;
	bottom:0;
	left:0;
	z-index:99999;
	background:rgba(0, 0, 0, 0.7);
	opacity:0;
	transition: opacity 300ms ease-in;
	pointer-events: none;
}
.modalDialog:target{
	opacity:1;
	pointer-events:auto;
}
.popWrap{
position:fixed;
	top:50%;
	left:50%;
	width:50%;
	max-width:300px;
	min-width:280px;
	height:auto;
	background:#fff;
-webkit-transform: translateX(-50%) translateY(-50%);
transform: translateX(-50%) translateY(-50%);
}

/* custum-popup style */
.modalDialog{position:fixed;top:0;right:0;bottom:0;left:0;z-index: 99999;background:rgba(0, 0, 0, 0.7);opacity:0;
	transition: opacity 300ms ease-in;
	pointer-events: none;}
.modalDialog:target{opacity:1;pointer-events:auto;}
.popWrap{
position:fixed;top:50%;left:50%;width:50%;max-width:300px;min-width:280px;height:auto;background:#fff;
-webkit-transform: translateX(-50%) translateY(-50%);
transform: translateX(-50%) translateY(-50%);
}
.popTit{height:50px;line-height:50px;text-align:center;color:#ff7573;border-bottom:2px solid #ff7573;font-size:1.1em;}
.popCont{padding:15px;text-align:center;color:#7e7e7e;}
.popCont p{white-space:pre-line;}
.popCont.type02{text-align:left}
.popBtn{text-align:center;background-color:#eceef1;overflow:hidden}
.popBtn.type01{padding:10px 80px}
.popBtn.type02{padding:10px}
.popBtn.type02 .btnBx{display:block;float:left;width:50%}
.popBtn.type02 .btnBx .btn{display:block;padding:0 5px}
.popBtn .cmnBtn{height:35px;line-height:35px}
.cmnBtn{display:inline-block;width:100%;height:30px;line-height:30px;text-align:center;color:#7e7e7e !important;background-color:#f7f7f7;border:1px solid #d0d0d0;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px}
.cmnBtn.on{color:#ff7573 !important;background-color:#fff;border:1px solid #ff7573}

/* table style */
.tbStWrap{position:relative;margin-top:15px;color:#605e5c}
.tbStWrap .tbTit{line-height:1.0;margin-bottom:10px;color:#605e5c;text-align:left;font-size:16px;font-weight:bold;background:url('/images/table_bull.png') 0 center no-repeat}
.tbSt01{width:100%;border:1px solid #e6e6e6;/* font-size:12px */}
.tbSt01 th,.tbSt01 td{padding:10px;border-bottom:1px solid #e6e6e6}
.tbSt01 th:last-child,.tbSt01 td:last-child{border-right:none}
.tbSt01 th{background-color:#eceef1;color:#605e5c;text-align:left}
.tbSt01 td{background-color:#fff;color:#a0a0a0;text-align:left}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">


  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container">
      <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
        <i class="fa fa-remove"></i>
      </a>
      <img src="/w3images/avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br>
      <h4><b>Grocery & Staples</b></h4>

    </div>
    <div class="w3-bar-block">
      <a href="productpage.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-cart-plus" style="font-size:24px"></i>   Grocery & Staples</a>
      <a href="productpage1.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cart-plus" style="font-size:24px"></i> Biscuits, Snacks & Chocolates  </a>
      <a href="productpage2.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cart-plus" style="font-size:24px"></i>  Breakfast & Diary </a>
      <a href="productpage3.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cart-plus" style="font-size:24px"></i> Drinks and Beverages </a>
    </div>

  </nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">

      <div class="w3-container w3-white">
        <p><b></b></p>
        <h4>Chana Dal</h4>
        <img src="img.jpg" height=200 width=200 alt="Norway" style="width:100%" class="w3-hover-opacity">
        <p>Udhaiyam</p>
      <h6>1 Kg</h6>
      <p>&#8377;69</p>
      <center><button class="add-to-cart__add-btn display--inline-block" data-test-id="add-button">Add To Cart</button></center>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <h4>Aashirvaad Shudh Chakki </h4>
        <img src="img1.jpg" height=200 width=200 alt="Norway" style="width:100%" class="w3-hover-opacity">
        <p>Whole Wheat Atta</p>
      <h6>1 Kg</h6>
      <p>&#8377;46</p>
      <center><button class="add-to-cart__add-btn display--inline-block" data-test-id="add-button">Add To Cart</button></center>
      </div>
    </div>
    <div class="w3-third w3-container">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <h4>Whole Wheat Atta</h4>
        <img src="img2.jpg" height=200 width=200 alt="Norway" style="width:100%" class="w3-hover-opacity">
        <p>Udhaiyam</p>
      <h6>1 Kg</h6>
      <p>&#8377;83</p>
	<a href="#openPop14" class="pop-btn"><center><button class="add-to-cart__add-btn display--inline-block" data-test-id="add-button">Add To Cart</button></center></a>
			<div class="wrap">

			<div id="openPop14" class="modalDialog">
				<div class="popWrap" style="max-width:600px;">
					<h2 class="popTit">Cart Items</h2>
			        <div class="popCont type02">
			        	<p>Big Basket Cart Items
						</p>
						<div class="tbStWrap">
							<h2 class="tbTit">Your Cart</h2>

							        <table class="tbSt01">
											 <colgroup>
												<col width="40%" />
												<col width="*" />
											</colgroup>
											<?php
											/* Attempt MySQL server connection. Assuming you are running MySQL
											server with default setting (user 'root' with no password) */
											$link = mysqli_connect("localhost", "root", "", "foreign");

											// Check connection
											if($link === false){
											    die("ERROR: Could not connect. " . mysqli_connect_error());
											}

											// Attempt select query execution
											$sql = "SELECT * FROM buyercart";
											if($result = mysqli_query($link, $sql)){
											    if(mysqli_num_rows($result) > 0){
											echo"<tbody>";

														while($row = mysqli_fetch_array($result)){
										            echo "<tr>";
																   echo "<th>User Id</th>";
										                echo "<td>" . $row['bid'] . "</td>";
										            echo "</tr>";
																echo "<tr>";
																echo "<th>No Of Items</th>";
										                echo "<td>" . $row['pqty1'] . "</td>";
										            echo "</tr>";
																echo "<tr>";
																echo "<th>Item1 Name</th>";
										                echo "<td>" . $row['pid1'] . "</td>";
										            echo "</tr>";
																echo "<tr>";
																	echo "<th>Price</th>";
										                echo "<td>" . $row['pprice1'] . "</td>";
										            echo "</tr>";
																echo "<tr>";
																echo "<th>Item1 Name</th>";
										                echo "<td>" . $row['pid2'] . "</td>";
										            echo "</tr>";
																echo "<tr>";
																	echo "<th>Price</th>";
										                echo "<td>" . $row['pprice2'] . "</td>";
										            echo "</tr>";
										        }
														echo "</tbody>";

														// Free result set
										        mysqli_free_result($result);
										    } else{
										        echo "No records matching your query were found.";
										    }
										} else{
										    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
										}

										// Close connection
										mysqli_close($link);
										?>

										</table>


						</div>
						<!-- e: table -->
						<div class="popBtn type01">
						<a href="#submit" title="Submit" class="cmnBtn">close</a>
						</div>
			        <div class="popBtn type01">
						<a href="openpop15.php" title="Submit" class="cmnBtn">Proceed</a>



			       	</div>



			    </div>
			    </div>

			</div>
			</div>
      </div>
    </div>
  </div>

  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <h4>Sunflower Oil (Jar)</h4>
        <img src="img3.jpg" height=200 width=200 alt="Norway" style="width:100%" class="w3-hover-opacity">
        <p>Gold Winner</p>
      <h6>5 lt</h6>
      <p>&#8377;484</p>
      <center><button class="add-to-cart__add-btn display--inline-block" data-test-id="add-button">Add To Cart</button></center>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <h4>Mustard Oil</h4>
        <img src="img4.jpg" height=200 width=200 alt="Norway" style="width:100%" class="w3-hover-opacity">
        <p>Safe Harvest</p>
      <h6>100 gm</h6>
      <p>&#8377;20</p>
      <center><button class="add-to-cart__add-btn display--inline-block" data-test-id="add-button">Add To Cart</button></center>
      </div>
    </div>
    <div class="w3-third w3-container">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <h4>Salt</h4>
        <img src="img5.jpg" height=200 width=200 alt="Norway" style="width:100%" class="w3-hover-opacity">
        <p>Tata Lite</p>
      <h6>1 Kg</h6>
      <p>&#8377;31</p>
      <center><button class="add-to-cart__add-btn display--inline-block" data-test-id="add-button">Add To Cart</button></center>
      </div>
    </div>
  </div>
  <!-- Third Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <h4>Sunflower Oil (Jar)</h4>
        <img src="img8.jpg" height=200 width=200 alt="Norway" style="width:100%" class="w3-hover-opacity">
        <p>Gold Winner</p>
      <h6>5 lt</h6>
      <p>&#8377;484</p>
      <center><button class="add-to-cart__add-btn display--inline-block" data-test-id="add-button">Add To Cart</button></center>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <h4>Mustard Oil</h4>
        <img src="img7.jpg" height=200 width=200 alt="Norway" style="width:100%" class="w3-hover-opacity">
        <p>Safe Harvest</p>
      <h6>100 gm</h6>
      <p>&#8377;20</p>
      <center><button class="add-to-cart__add-btn display--inline-block" data-test-id="add-button">Add To Cart</button></center>
      </div>
    </div>
    <div class="w3-third w3-container">
      <div class="w3-container w3-white">
        <p><b></b></p>
        <h4>Salt</h4>
        <img src="img6.jpg" height=200 width=200 alt="Norway" style="width:100%" class="w3-hover-opacity">
        <p>Tata Lite</p>
      <h6>1 Kg</h6>
      <p>&#8377;31</p>
      <center><button class="add-to-cart__add-btn display--inline-block" data-test-id="add-button">Add To Cart</button></center>
      </div>
    </div>
  </div>


  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="productpage2.html" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>


<!-- End page content -->

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


</body>
</html>
