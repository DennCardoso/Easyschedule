<?php
//session_start();
include('login.php'); // includes login script
//include('register.php'); // includes registration script
if(isset($_SESSION['login_email'])){
header("location: myschedule.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>EasySchedule</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="container">
    <div id="header"><h1>EasySchedule</h1></div>
  <div id="menu"> <a href="index.php">HOME</a> &nbsp; &nbsp; &nbsp; &nbsp; 
                  <a href="aboutus.php">ABOUT US</a> &nbsp; &nbsp; &nbsp; &nbsp; 
                  <a href="login_start.php">LOGIN</a> &nbsp; &nbsp; &nbsp; &nbsp;
                  <a href="signup.php">SIGN UP</a>
  </div>
  <div id="sidebar">
    <h1>Welcome</h1>
  </div>
  <div id="main">
      <div id="loginbox"><h2>Login</h2>
	<form action="" method="post">
            <table>
                <tr>
                    <td><input type="text" placeholder="E-mail" name="email"><td>
                </tr>
                <tr>
                    <td><input type="password" placeholder="Password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Log-in" name="loginsubmit"></td>
                </tr>
            </table>
	</form>
	        <span><?php echo $loginerror; ?></span>
      </div>
  </div>
  <div id="footer"> &copy;2007 Keep it Simple &nbsp;<span class="separator">|</span>&nbsp; Design by <a href="http://www.realitysoftware.ca">Reality Software</a> </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
