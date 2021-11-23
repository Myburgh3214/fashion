<?php
  include ("connect.php")
?>
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/stylesheet.css">
</head>

<style>
  body,h1 {font-family: "Raleway", sans-serif}
  body, html {height: 100%}
  body {
      background-image: url(images/crochet.jpg);
  }
</style>
<!-- Navbar -->
<div class="w3-top">
<div class="w3-bar w3-theme-d2 w3-left-align">

  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="signUp.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sign Up</a>
  <a href="forgot.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Forgot Password</a>

 </div>
</div>
<div>

<form action="#" method="POST">
  <div class="container" contenteditable="false">
      <h1><b>Log In Form</b></h1>
    <br>
  <div>
      <label for="email"><h4><b>Email:</b></label>
      <input type="text" placeholder="Enter Email" name="email" required><h4>
    </div>
    <div class="passwordFld">
      <label for="psw"><h4><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required></h4>
    </div>
    
<div class="btns">
  <div>
      <button type="submit" class="cancelbtn">Cancel</button>
  </div>
  <div>

  <form action= "forgot.php">

    <button type="submit" class="forgot">Forgot Password</button>

  </div>
  <div>
      <button type="submit" name="login">Confirm</button>
  </div>
    </div>
</form>
</div>

<?php
  if ( isset( $_POST['login'] ) ) { 
    $email = $_POST["email"];
    $loginPassword = $_POST["psw"];
    $sqlTargets = "SELECT * FROM users WHERE email = '$email' AND password = '$loginPassword' ";
    $result = $conn->query($sqlTargets);

    if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
           header("Location: store.php");
        }

    } else {
        echo "Invalid user or password";
    }
    $conn->close();
    }
  
    session_start(); 
     $_SESSION['email'] = "$email";

?>
<script>
  const users = "https://jsonplaceholder.typicode.com/users/1";

let userFetch = fetch(users, {
   method: 'GET'});
let results = userFetch.then(response => {
  return response.json();
}).then(data => {
 linkUser(data.email)////call data.users
});

</script>
<?php
  if ( isset( $_POST['login'] ) ) { 
    $email = $_POST["email"];
    $loginPassword = $_POST["psw"];
    $sqlTargets = "SELECT Email FROM users WHERE Email = '$email' AND Password = '$loginPassword' ";
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
     $_SESSION['email'] = "$email";

?>

