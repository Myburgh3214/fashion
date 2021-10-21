<?php
  include ("connect.php");
?>
<!DOCTYPE html>
<html>
<title>Online Store</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/stylesheet.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="store.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Store Page</a>
    <a href="signUp.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sign Up</a>
    <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Profile</a>
    <a href="gallleryPage.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Gallery</a>
    <a href = "basket.php" style="font-size:24px" i class="fa fa-shopping-cart"></a>
s




  </form>
    </div>
  </div>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Team</a>
    <a href="#work" class="w3-bar-item w3-button">Work</a>
    <a href="#pricing" class="w3-bar-item w3-button">Price</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>

<!-- Registration Form -->
<div class="w3-container w3-padding-64 w3-center" id="team">
   <img src="images/koekieblom.jpg">
   <h1>Registration Form: </h1>
  <form action="signUp.php" method="POST">
    <div>
    <label><h2>Email:</h2></label>
    <input type="text" name="name">
    </div>
    
    <div>
    <label><h2>Password:</h2></label>
    <input type="text" name="email">
    </div>
    <div>
    <label><h2>message:</h2></label>
    <input type="text" name="message">
    </div>
    <div>
    <br>
    <button type="submit" name="submitBtn">Confirm</button>
    </div>
</form>
</div>
</div>
</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.144331123383!2d18.625727815157376!3d-31.793816181280032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1c33d0a295b659c5%3A0xaab776170b0bce89!2sKlawer%20Wine%20Cellars%20(Pty)%20Ltd!5e0!3m2!1sen!2sza!4v1632388604629!5m2!1sen!2sza" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  
</footer>

</body>
</html>
<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

   if (isset($_POST["submitBtn"])){
      $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
      $conn->query($sql); 
    
  }

?>
https://goo.gl/maps/KVNvtK8uTPSQcrt47
