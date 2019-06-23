<!DOCTYPE html>
<html>
<head><title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link rel="stylesheet" href="min.css">
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
/*slideshow*/
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  font-weight: bolder;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
/*flex box*/
.flex-container {
  display: flex;
  flex-wrap: wrap;
  background-color: #f1f1f1;

}
.flex-container > div {
  /*background-color:white ;
  width: 300px;
  margin: 5px;
  text-align: center;
  line-height: 400px;
  font-size: 30px;*/
  background-color: #fff;
    border-radius: 3px;
    border: 1px solid #eee;
    cursor: pointer;
    display: block;
    margin: 5px 15px;
    padding: 8px 0;

}
.store-categories-list__item {
    background-color: #fff;
    border-radius: 3px;
    border: 1px solid #eee;
    cursor: pointer;
    display: block;
    margin: 5px 15px;
    padding: 8px 0;
}
.store-categories-list__item .category-image {
    height: 100%;
    vertical-align: middle;
    width: 116px;
    background-position: 50%;
    background-repeat: no-repeat;
    display: inline-block;
    text-align: center;
    background-size: 168px 160px;
}
.store-categories-list__item .category-next-icon {
    border: none;
    font-size: 16px;
    float: right;
    height: auto;
    margin: 0;
    margin-right: 20px;
    width: 10px;
    margin-top: 69px;
}
.store-categories-list__item .category-image__img {
    margin-left: 20px;
    margin-right: 15px;
    width: 168px;
}
img {
    border-style: none;
}
.store-categories-list__item .category-name__description {
    color: #888;
    font-size: 13px;
    font-weight: 200;
    line-height: 1.6;
    max-height: 3.2em;
    overflow: hidden;
    font-size: 11px;
}
.store-categories-list__item .category-name__name {
    color: #333;
    margin-bottom: 10px;
}
.store-categories-list__item .category-name__description {
    color: #888;
    font-size: 13px;
    font-weight: 200;
    line-height: 1.6;
  }
  /* footer */
  /* REMOVE THIS, USE YOUR OWN  */
html,body {
  margin: 0;
  padding: 0;
  font-family: Arial, Helvetica, Sans-serif;

}

/* STYLES SPECIFIC TO FOOTER  */
.footer {
  width: 100%;
  position: relative;
  height: auto;
  background-color: #003300;

}
.footer .col {
  width: 190px;
  height: auto;
  float: left;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  padding: 0px 20px 20px 20px;
}
.footer .col h1 {
  margin: 0;
  padding: 0;
  font-family: inherit;
  font-size: 12px;
  line-height: 17px;
  padding: 20px 0px 5px 0px;
  color: rgba(255,255,255,0.2);
  font-weight: normal;
  text-transform: uppercase;
  letter-spacing: 0.250em;
}
.footer .col ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.footer .col ul li {
  color: #999999;
  font-size: 14px;
  font-family: inherit;
  font-weight: bold;
  padding: 5px 0px 5px 0px;
  cursor: pointer;
  transition: .2s;
  -webkit-transition: .2s;
  -moz-transition: .2s;
}
.social ul li {
  display: inline-block;
  padding-right: 5px !important;
}

.footer .col ul li:hover {
  color: #ffffff;
  transition: .1s;
  -webkit-transition: .1s;
  -moz-transition: .1s;
}
.clearfix {
  clear: both;
}
@media only screen and (min-width: 1280px) {
  .contain {
    width: 1200px;
    margin: 0 auto;
  }
}
@media only screen and (max-width: 1139px) {
  .contain .social {
    width: 1000px;
    display: block;
  }
  .social h1 {
    margin: 0px;
  }
}
@media only screen and (max-width: 950px) {
  .footer .col {
    width: 33%;
  }
  .footer .col h1 {
    font-size: 14px;
  }
  .footer .col ul li {
    font-size: 13px;
  }
}
@media only screen and (max-width: 500px) {
    .footer .col {
      width: 50%;
    }
    .footer .col h1 {
      font-size: 14px;
    }
    .footer .col ul li {
      font-size: 13px;
    }
}
@media only screen and (max-width: 340px) {
  .footer .col {
    width: 100%;
  }
}
</style>
</head>
<body>

<div id="navbar">
  <div class="name">
    <a href="">bigbasket</a>
  </div>
  <a class="active" href="head.php">Home</a>
  <a href="Buyerregistration.php">Buyer rEGISTRATION</a>
  <a href="Supplier registration.php">Supplier registration</a>
  <a href="openpop15.php">Buyercart</a>
</div>



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
<br><br><br><br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="pic2.jpg" height=250 width=250 style="width:100%">
  <div class="text">Grocery and staples</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="pic3.jpg" height=250 width=250 style="width:100%">
  <div class="text">Biscuits, snacks and chocolates</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 3</div>
  <img src="pic4.jpg" height=250 width=250 style="width:100%">
  <div class="text">Breakfast and Dairy</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 3</div>
  <img src="pic5.jpg"  height=250 width=250 style="width:100%">
  <div class="text">Drinks and Beverages</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
<div class="flex-container">
  <div>
  <a href="productpage.php">
  <div class="store-categories-list__item" data-test-id="l0-category">
  <div class="category-image">
  <img class="category-image__img animated fadeIn" src="img34.jpg"></div>
  <div class="category-name">
  <div class="category-name__name">Grocery &amp; Staples</div>
  <div class="category-name__description" title="Home &amp; Kitchen Best Offers, Cookware, Storage &amp; Containers, Kitchen Tools &amp; Accessories, Dining &amp; Serving, Bags &amp; Travel Accessories, Bathroom Essentials, Cleaning Equipment, Electrical Goods &amp; Accessories, Tools, Auto &amp; Sports, Stationery &amp; Magazines, Gas Stoves, Rakhi Specials">
  <div class="LinesEllipsis LinesEllipsis--clamped ">
  <!-- react-text: 11673 -->drinks &amp;
  Beverages Best Offers, Cookware, Storage &amp; Containers, Kitchen Tools &amp; Accessories, Dining &amp; Serving, Bags &amp; Travel Accessories, Bathroom Essentials, Cleaning Equipment, Electrical Goods &amp; Accessories, Tools, Auto &amp; Sports,<!-- /react-text --><wbr>
  <span class="LinesEllipsis-ellipsis">…</span>
  </div>
  </div>
  </div>
  <div class="category-next-icon"></div>
  </div>
  </a>
  </div>
  <div>
  <a href="productpage1.html">
  <div class="store-categories-list__item" data-test-id="l0-category">
  <div class="category-image">
  <img class="category-image__img animated fadeIn" src="img35.jpg"></div>
  <div class="category-name">
  <div class="category-name__name">Biscuits, Snacks &amp; Chocolates</div>
  <div class="category-name__description" title="Home &amp; Kitchen Best Offers, Cookware, Storage &amp; Containers, Kitchen Tools &amp; Accessories, Dining &amp; Serving, Bags &amp; Travel Accessories, Bathroom Essentials, Cleaning Equipment, Electrical Goods &amp; Accessories, Tools, Auto &amp; Sports, Stationery &amp; Magazines, Gas Stoves, Rakhi Specials">
  <div class="LinesEllipsis LinesEllipsis--clamped ">
  <!-- react-text: 11673 -->drinks &amp;
  Beverages Best Offers, Cookware, Storage &amp; Containers, Kitchen Tools &amp; Accessories, Dining &amp; Serving, Bags &amp; Travel Accessories, Bathroom Essentials, Cleaning Equipment, Electrical Goods &amp; Accessories, Tools, Auto &amp; Sports,<!-- /react-text --><wbr>
  <span class="LinesEllipsis-ellipsis">…</span>
  </div>
  </div>
  </div>
  <div class="category-next-icon"></div>
  </div>
  </a>
  </div>
  <div>
  <a href="productpage2.html">
  <div class="store-categories-list__item" data-test-id="l0-category">
  <div class="category-image">
  <img class="category-image__img animated fadeIn" src="img36.jpg"></div>
  <div class="category-name">
  <div class="category-name__name">Breakfast &amp; Dairy</div>
  <div class="category-name__description" title="Home &amp; Kitchen Best Offers, Cookware, Storage &amp; Containers, Kitchen Tools &amp; Accessories, Dining &amp; Serving, Bags &amp; Travel Accessories, Bathroom Essentials, Cleaning Equipment, Electrical Goods &amp; Accessories, Tools, Auto &amp; Sports, Stationery &amp; Magazines, Gas Stoves, Rakhi Specials">
  <div class="LinesEllipsis LinesEllipsis--clamped ">
  <!-- react-text: 11673 -->drinks &amp;
  Beverages Best Offers, Cookware, Storage &amp; Containers, Kitchen Tools &amp; Accessories, Dining &amp; Serving, Bags &amp; Travel Accessories, Bathroom Essentials, Cleaning Equipment, Electrical Goods &amp; Accessories, Tools, Auto &amp; Sports,<!-- /react-text --><wbr>
  <span class="LinesEllipsis-ellipsis">…</span>
  </div>
  </div>
  </div>
  <div class="category-next-icon"></div>
  </div>
  </a>
  </div>
  <div>
  <a href="productpage3.html">
  <div class="store-categories-list__item" data-test-id="l0-category">
  <div class="category-image">
  <img class="category-image__img animated fadeIn" src="https://cdn.grofers.com/app/images/category/cms_images/icon/icon_cat_12_v_3_500_1529994026.jpg"></div>
  <div class="category-name">
  <div class="category-name__name">Drinks &amp; Beverages</div>
  <div class="category-name__description" title="Home &amp; Kitchen Best Offers, Cookware, Storage &amp; Containers, Kitchen Tools &amp; Accessories, Dining &amp; Serving, Bags &amp; Travel Accessories, Bathroom Essentials, Cleaning Equipment, Electrical Goods &amp; Accessories, Tools, Auto &amp; Sports, Stationery &amp; Magazines, Gas Stoves, Rakhi Specials">
  <div class="LinesEllipsis LinesEllipsis--clamped ">
  <!-- react-text: 11673 -->drinks &amp;
  Beverages Best Offers, Cookware, Storage &amp; Containers, Kitchen Tools &amp; Accessories, Dining &amp; Serving, Bags &amp; Travel Accessories, Bathroom Essentials, Cleaning Equipment, Electrical Goods &amp; Accessories, Tools, Auto &amp; Sports,<!-- /react-text --><wbr>
  <span class="LinesEllipsis-ellipsis">…</span>
  </div>
  </div>
  </div>
  <div class="category-next-icon"></div>
  </div>
  </a>
  </div>
</div>


<!-- FOOTER START -->
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>Company</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Products</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Accounts</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Resources</h1>
    <ul>
      <li>Webmail</li>
      <li>Redeem code</li>
      <li>WHOIS lookup</li>
      <li>Site map</li>
      <li>Web templates</li>
      <li>Email templates</li>
    </ul>
  </div>
  <div class="col">
    <h1>Support</h1>
    <ul>
      <li>Contact us</li>
      <li>Web chat</li>
      <li>Open ticket</li>
    </ul>
  </div>
  <div class="col social">
    <h1>Social</h1>
    <ul>
      <li><img src="https://svgshare.com/i/5fq.svg" width="32" style="width: 32px;"></li>
      <li><img src="https://svgshare.com/i/5eA.svg" width="32" style="width: 32px;"></li>
      <li><img src="https://svgshare.com/i/5f_.svg" width="32" style="width: 32px;"></li>
    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>
<!-- END OF FOOTER -->
</body>
</html>
