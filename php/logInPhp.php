<?php
  include ("connect.php")
?>
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