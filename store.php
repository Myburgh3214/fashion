<!DOCTYPE html>
<html>
<title>Online Store</title>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <a href="logIn.php" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Login</a>
    <a href="store.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Store Page</a>
    <a href="signUp.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sign Up</a>
    <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <a href="forgot.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Forgot Password</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Profile</a>
    <a href="galleryPage.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Gallery</a>

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


<div class = "basket">
<div>
  <?php
    class ExampleClass {

    public $method = "<h2>Welcome";

    public function TestMethod() {
      
        echo $this->method;
  }

}

$welcome = new ExampleClass();

// Adding a new property to the object
$welcome->myName = " to our product page</h2>";

$welcome->TestMethod(); // expected output: Test string

echo $welcome->myName; //expected output: Nicholas
?>
<?php

class messageClass {
  function __construct() {
    echo "<h2> Enjoy your stay and feel free to contact us if you want a special order of handmade crochet products.</h2>";
  }
}

$newMessage = new messageClass();

//expected output New object made!


?>
<script>
  ///owners of this website
function User(firstname, lastname, username, email) {
  this._firstname = firstname;
  this._lastname = lastname;
  this._username = username;
  this._email = email;
}

let user1 = new User("Jim", "Doe", "jimmyBoy", "jim@google.com");
let user2 = new User("Tim", "Reece", "superTim", "tim@yahoo.com");




</script>


        <h2>Shop With Ease</h2>
        
        
        
        <div id="shop">
            
            <div class="greyBeanies">
             
            

            <div class="Backpack" id="mini-backpack">
                <p class="product-name">Mini-Backpack</p>
                <p class="product-description">Mini-Backpack containing skincare products</p>
                <p class="product-price" value='R120'>R120</p>
                <button class="add-to-cart">ADD TO CART</button>

            </div>
            

           
        
    </div>
        <div id='cart-wrapper' class="slider close">
            <div id='cart'>
                <div id="cart-products-wrapper">
                    <table id="cart-table">
                    <thead id="cart-table-header">
                         <th class="name-col">Product Name</th> 
                         <th class="quantity-col">Quantity</th>       
                         <th class="price-col">Price</th>
                         <th class="updated-price-col">Updated Price</th>
                         <th class="update-col">Update</th>
                         <th class="remove-col">Remove</th>
                    </thead>
                    <tbody id="cart-table-body"></tbody>
                    </table>
                </div>
            </div>
            
            <div id='amount-controls'>
                <div id="cart-amount-wrapper">
                    <table>
                        <tbody>
                            <tr id='subtotal-wrappper'>
                                <td id="subtotal-label">Subtotal:</td>
                                <td id="subtotal">0.00</td>
                            </tr>

                            <tr id='total-wrapper'>
                                <td id="total-label">Total:</td>
                                <td id="total">0.00</td>
                            </tr>

                            <tr id="promo-checkout">
                                <td id="promo-wrapper">
                                    <input id="promo" placeholder="Input Promo Code">
                                    <button id="apply-promo">Apply Promo</button>
                                </td>

                                <td>
                                    <button id="checkout">Checkout</button>
                                </td>
                                
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



</div>
<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>
<br>

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
<script>

 

</script>
<script src="script/basket.js"></script>
<script src="script/storeApi.js"></script>

</body>
</html>

