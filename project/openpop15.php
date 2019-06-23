<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<style>
.wrap{padding:10px;}
/** CSS Mobile Reset **/
html,body{height:100%}
*{font-style:normal}
* {-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
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
::-webkit-scrollbar-thumb {-webkit-border-radius:10px;border-radius:10px;background:#ccc}
::-webkit-scrollbar-thumb:window-inactive {background:#ccc}

/* button */
.pop-btn{display:inline-block;width:auto;height:30px;line-height:30px;padding:0 10px;color:#fff !important;text-align:center;background-color:#ccc;border-bottom:1px solid #fff;}

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
    -webkit-transition: opacity 300ms ease-in;
    -moz-transition: opacity 300ms ease-in;
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
	-moz-transform: translateX(-50%) translateY(-50%);
	-ms-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);
	}

/* custum-popup style */
.modalDialog{position:fixed;top:0;right:0;bottom:0;left:0;z-index: 99999;background:rgba(0, 0, 0, 0.7);opacity:0;
    -webkit-transition: opacity 300ms ease-in;
    -moz-transition: opacity 300ms ease-in;
    transition: opacity 300ms ease-in;
    pointer-events: none;}
.modalDialog:target{opacity:1;pointer-events:auto;}
.popWrap{
	position:fixed;top:50%;left:50%;width:50%;max-width:300px;min-width:280px;height:auto;background:#fff;
	-webkit-transform: translateX(-50%) translateY(-50%);
	-moz-transform: translateX(-50%) translateY(-50%);
	-ms-transform: translateX(-50%) translateY(-50%);
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
</head>
<body>
<div class="wrap">
<a href="#openPop14" class="pop-btn">Proceed</a> <br />
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
														 echo "<th>Total</th>";
															echo "<td>" . $row['sum'] . "</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<th>GST</th>";
															echo "<td>" . $row['tax'] . "</td>";
													echo "</tr>";
													echo "<tr>";
													echo "<th>Amount</th>";
															echo "<td>" . $row['total'] . "</td>";
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
			<a href="head.php" title="Submit" class="cmnBtn">close</a>
				</div>



		</div>
		</div>

</div>
</div>
</body>
</html>
