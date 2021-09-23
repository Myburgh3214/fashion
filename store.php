<?php
  include ("connect.php")
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
  <a href="index.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Logo</a>
  <a href="store.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Store Page</a>
    <a href="signUp.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sign Up</a>
    <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>


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

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
   <img src="images/koekieblom.jpg">
  
</div>

<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
<div class="w3-display-middle" name="hidden">
  <h2><b>Login Form:</b></h2>
  
<form action="index.php" method="POST">

</div>

  <div class="container">
  <div class="userName">
    <label for="userName"><h4><b>Username:</b></h4></label>
    <input type="text" placeholder="Enter Email" name="email">
  </div>
  <div class="passWord">
    <label for="passWord"><h4><b>Password:</b></h4></label>
    <input type="password" placeholder="Enter Password" name="psw">
  </div>
  <div>   
    <button type="submit" name="login">Login</button>
  </div>
  </form>
  <form action="forgot.php" method="POST">
    <button type="submit">Forgot Password</button>
  </form>
  <form action="update.php" method="POST">
    <button type="submit">Sign Up</button>
  </form>
  
</div>
</div>
</body>
</html>
<?php
if ( isset( $_POST['signUpbtn'] ) ) {
 $_SESSION['signUpbtn'] = $_POST['signUpbtn'];
}
?>
<?php
  if ( isset( $_POST['login'] ) ) { 



    $email = $_POST["email"];
    $loginPassword = $_POST["psw"];

    $sqlTargets = "SELECT email FROM users WHERE email = '$email' AND password = '$loginPassword' ";
    $result = $conn->query($sqlTargets);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          header("Location: signin.php");
        }
    } else {
      echo "Invalid user or password";
    }
    $conn->close();
    }
  
    session_start(); 
    $_SESSION["email"] = "$email";
    $_SESSION["psw"] = "$loginPassword";
    echo $_SESSION["email"];
    die()


?>
