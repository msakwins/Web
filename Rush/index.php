<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/signinindex.css">
    <link rel="stylesheet" href="../css/registerindex.css">
    <link rel="stylesheet" href="../css/accountindex.css">
    <title>Hello</title>
</head>
<body>
    <div class="topnav">
		<form method="get" action="select_per_type.php">
        	<input type="text" placeholder="Search.." value="" name="search">
		</form>
    </div>
    <!-- SIGN IN BUTTON -->
	<?php
	if ($_SESSION['logged_on_user'] == NULL)
		echo ("<button class=\"butt\" onclick=\"document.getElementById('id01').style.display='block'\">Sign in</button>\n
		<div id=\"id01\" class=\"modal\">");
	else
		echo ("<button class=\"none\" onclick=\"document.getElementById('id01').style.display='block'\">Sign in</button>\n
		<div id=\"\" class=\"none\">");?>
        <form class="modal-content animate" action="login.php" method="post">
            <div class="signin">Sign in</div>
            <div class="user"><label><b>Username</b></label></div>
			<div class="userbox"><input type="text" name="uname" required value=""></div>
            <div class="pswd"><label><b>Password</b></label></div>
            <div class="pswdbox"><input type="password" name="passwd" required value=""></div>
            <label>
                <div class="remember"><input type="checkbox" checked="checked"> Remember me</div>
            </label>
            <button class="butt2" type="submit" value="OK">Login</button>
            <button class="cancelbutt" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw"><a href="#">Forgot password?</a></span>
        </div>
    </form>
</div>
<!-- REGISTER BUTTON -->
<?php
if ($_SESSION['logged_on_user'] == NULL)
	echo ("<button class=\"registerbutt\" onclick=\"document.getElementById('id02').style.display='block'\">Register</button>\n
	<div id=\"id02\" class=\"registermodal\">");
else
	echo ("<button class=\"none\" onclick=\"document.getElementById('id02').style.display='block'\">Register</button>\n
	<div id=\"\" class=\"none\">");?>
    <form class="registermodal-content animate" action="create.php" method="post">
		<div class="signin2">Register</div>
        <div class="name"><label><b>First Name</b></label></div>
        <div class="namebox"><input type="text" name="fname" required></div>
        <div class="lname"><label><b>Last Name</b></label></div>
        <div class="lnamebox"><input type="text" name="lname" required></div>
        <div class="mail"><label><b>E-mail</b></label></div>
        <div class="mailbox"><input type="text" name="mail" required></div>
        <div class="user2"><label><b>Username</b></label></div>
        <div class="userbox2"><input type="text" name="uname" required></div>
        <div class="pswd2"><label><b>Password</b></label></div>
        <div class="pswdbox2"><input type="password" name="passwd" required></div>
        <button class="register2" type="submit">Register</button>
        <label>
            <div></div>
        </label>
        <button class="registercancel" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw2"><a href="#">Need help?</a></span>
    </div>
</form>
</div>
<!-- ACCOUNT BUTTON -->
<?php
if ($_SESSION['logged_on_user'] != NULL)
	echo ("<button class=\"display\" onclick=\"document.getElementById('id03').style.display='block'\">My account</button>\n
	<div id=\"id03\" class=\"accountmodal\">");
else
	echo ("<button class=\"none\" onclick=\"document.getElementById('id03').style.display='block'\">My account</button>\n
	<div id=\"\" class=\"none\">");?>
        <span onclick="document.getElementById('id03').style.display='none'"
        class="close" title="Close Modal">&times;</span>
    <span onclick="document.getElementById('id03').style.display='none'"></span>
    <form class="accountmodal-content" action="/action_page.php">
        <img src="../img/user.png" alt="" class="pic"></a>
        <div class="myaccount">My profile</div>
        <div class="userinfo">
            <div class="user" style="font-size:2.5em;" ><label><b><?php echo $_SESSION['logged_on_user']?></b></label></div>
			<div class="user" ><label><b><?php echo $_SESSION['fname']?></b></label></div>
			<div class="user" ><label><b><?php echo $_SESSION['lname']?></b></label></div>
			<div class="user" ><label><b><?php echo $_SESSION['mail']?></b></label></div>
        </div>
        <span class="psw"><a href="./modif.php">Update my informations</a></span>
        <button class="logout" type="button"><a href="logout.php">Log out</a></button>
    </div>
</form>
</div>
<script>
var modal = document.getElementById('id02');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";}
}
var modal1 = document1.getElementById('id01');
window.onclick = function(event1) {
    if (event.target == modal1) {
        modal.style.display = "none";}
}
var modal3 = document3.getElementById('id03');
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";}
}
</script>
<!-- ACCOUNT BUTTON -->
<?php
if ($_SESSION['logged_on_user'] != NULL)
	echo ("<button class=\"display\" onclick=\"document.getElementById('id03').style.display='block'\">My account</button>\n
	<div id=\"id03\" class=\"accountmodal\">");
else
	echo ("<button class=\"none\" onclick=\"document.getElementById('id03').style.display='block'\">My account</button>\n
	<div id=\"\" class=\"none\">");
?>
<button class="display" onclick="document.getElementById('id03').style.display='block'">My account</button>
<div id="id03" class="accountmodal">
        <span onclick="document.getElementById('id03').style.display='none'"
        class="close" title="Close Modal">&times;</span>
    <span onclick="document.getElementById('id03').style.display='none'"></span>
    <form class="accountmodal-content" action="/action_page.php">
        <img src="user.png" alt="" class="pic"></a>
        <div class="myaccount">My profile</div>
        <div class="userinfo">
            <div class="user"><label><b><?php echo $_SESSION['logged_on_user']?></b></label></div>
            <div class="pswd"><label><b>Name</b></label></div>
        </div>
        <span class="psw"><a href="#">Need help?</a></span>
    </div>
</form>
</div>
<header class="header">
    <a href="/index.php" style="text-decoration:none"class="hello">Hello</a>
    <a href="/cart.php"><img src="../img/basket.png" alt="" class="basket"></a>
</header>
<header class="header2">
<ul class="niveau1">
    <li class="menu">
    Adopter
        <ul class="niveau2">
            <a href=select_per_type.php?search=Licorne><li class="sand">Licornes</li></a>
            <a href=select_per_type.php?search=Poney><li class="sand">Poneys</li></a>
            <a href=select_per_type.php?search=Lutin><li class="sand">Lutins</li></a>
        </ul>
    </li>
    <li class="carte">
    Nourriture
        <ul class="niveau2">
            <a href=select_per_type.php?search=Foin><li class="cart">Foin</li></a>
            <a href=select_per_type.php?search=Pistaches><li class="cart">Pistaches</li></a>
        </ul>
    </li>
</ul>
    </header>
</html>
<?php?>