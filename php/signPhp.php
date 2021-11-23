<?php
  include ("connect.php");
?>
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