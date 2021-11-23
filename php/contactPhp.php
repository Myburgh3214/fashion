<?php
  include ("connect.php");
?>

<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

   if (isset($_POST["submitBtn"])){
      $sql = "INSERT INTO contact_form (name, email, message) VALUES ('$name', '$email', '$message')";
      $conn->query($sql); 
    
  }

?>
