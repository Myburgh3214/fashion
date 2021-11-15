<?php
  include ("connect.php");
?>
<!DOCTYPE html>
<html>
<title>Online Store</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/stylesheet.css">
</head>
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
  <a href="signUp.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sign Up</a>
  <a href="galleryPage.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Gallery</a>

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
    <input type="text" name="email">
    </div>
    
    <div>
    <label><h2>Password:</h2></label>
    <input type="text" name="passWord">
    </div>

    <div>
    <br>
    <button type="submit" id="submitBtn" name="submitBtn">Confirm</button>
    </div>

</form>
</div>
</div>
</div>

<?php
  $email = $_POST["email"];
  $passWord = $_POST["passWord"];

   if (isset($_POST["submitBtn"])){
    if($passWord == "koekieblom1234"){
      $sql = "INSERT INTO users (email, password, role) VALUES ('$email', '$passWord', 'admin')";
      $conn->query($sql); 
    }
    else{
      $sql = "INSERT INTO users (email, password, role) VALUES ('$email', '$passWord', 'member')";
      $conn->query($sql); 
    }
  }

?>
<script>

const data = {'title': 'go study', 'completed': 'false'};
  fetch('https://jsonplaceholder.typicode.com/todos/1', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
  },
  body: JSON.stringify(data),
})
.then(response => response.json())//translating the returned object to json
.then(data => {
  console.log('Success:', data);//logging a success message on success
})
.catch((error) => {
  console.error('Error:', error);//logging a success message in a promise catch
});
    
;</script>
