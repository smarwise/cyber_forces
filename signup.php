<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("config/database.php");
require_once("config/setup.php");
// my code will be here
$redirecturl = "http://localhost:82/cyber_forces/fb_callback.php";
// $redirecturl = $_SERVER['SERVER_NAME']."/fb_callback.php";
$permissions = ['email'];
$loginurl = $helper->getLoginUrl($redirecturl, $permissions);

$gloginurl = $client->createAuthUrl();
?>

<html>
<head>
	<title>Cyberforces</title>
	<link rel="stylesheet"  href="stylesheets/signup.css">
</head>
<body>

<button class="tablink" onclick="openPage('Sign-in', this, '#96cdff')" id="defaultOpen">Sign-in</button>
<button class="tablink" onclick="openPage('Sign-up', this, '#96cdff')">Sign-up</button>

<div id="Sign-in" class="tabcontent">
  <br /><br /><br /><br /><br /><br />
  <div class="container">
  <form action="login.php" method="POST">
    <div class="row">
      <h2 style="text-align:center">Sign-in with Social Media or Manually</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="<?php echo $loginurl ?>" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Sign-in with Facebook
         </a>
        <a href="<?php echo $gloginurl ?>" class="google btn"><i class="fa fa-google fa-fw">
          </i> Sign-in with Google
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or Sign-in manually:</p>
        </div>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Sign-in">
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="#" style="color:black" class="btn">Sign-up</a>
    </div>
    <div class="col">
      <a href="#" style="color:black" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
</div>

<div id="Sign-up" class="tabcontent">
  <br /><br /><br /><br /><br /><br />
  <div class="container">
  <form action="register.php" method="POST">
    <div class="row">
      <h2 style="text-align:center">Sign-up with Social Media or Manually</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="<?php echo $loginurl ?>" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Sign-up with Facebook
         </a>
        <a href="<?php echo $gloginurl ?>" class="google btn"><i class="fa fa-google fa-fw">
          </i> Sign-up with Google
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or Sign-up manually:</p>
        </div>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" placeholder="First Name" name="first_name" required>
        <input type="text" placeholder="Last Name" name="last_name" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password2" placeholder="Repeat Password" required>
        <input type="submit" value="Sign-up">
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="#" style="color:black" class="btn">Sign-in</a>
    </div>
    <div class="col">
      <a href="#" style="color:black" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
<!-- please put your html code here -->
<!-- put your css code in stylesheets/signup.css -->
</html>
