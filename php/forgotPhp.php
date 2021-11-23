<?php
  include ("connect.php")
  ?>



<?php   

$confirm = $_POST["confirm"];
$emailRst = $_POST["reset"];

$update = "UPDATE users
SET password = '$confirm'
WHERE email = '$emailRst'";




$conn->query($update); 


?>
