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

  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="store.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Store Page</a>
    <a href="signUp.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sign Up</a>
    <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <a href="forgot.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Forgot Password</a>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Profile</a>
    <a href="gallleryPage.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Gallery</a>
    <a href = "basket.php" style="font-size:24px" i class="fa fa-shopping-cart"></a>

    </div>
  </div>s
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

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
  <h2>Our Work</h2>
  <p>We make handmade crochet products, making sure we put as much care into our products as we possibly can.</p>
</div>

<div class="w3-quarter">
<div class="card">
  <img src="images/mini-backpack.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Backpack</h1>
  <p class="price">R120</p>
  <p>Backpack is reusable and contains skincare products.</p>
  <p><button>Add to Cart</button></p>
  
</div>
  </div>
  <div><div class="w3-quarter">
<div class="card">
  <img src="images/greyBeanie.jpg" alt="Denim Jeans" style="width:100%">
  <h1>Grey Beanie</h1>
  <p class="price">R80</p>
  <p>A high quality grey beanie. Made from 100% Acylic.</p>
  <p><button>Add to Cart</button></p>
</div>
  </div>
  <div class="w3-quarter">
<div class="card">
  <img src="images/sack.jpg" alt="sack" style="width:100%">
  <h1>Sack</h1>
  <p class="price">R120</p>
  <p>Contains skincare products, and the sack is reusable.</p>
  <button class="add-to-cart" id='test'>ADD TO CART</button>
</div>
  </div>
  </div>
</div>
  </div>
</div></div>
  </div>
</div>
<div class = "basket">
<div>
        <h2>Shop With Ease</h2>
        
        <button id='cart-button' class="trigger cart-button-style">Show Cart</button>
        
        
        <div id="shop">
            
            <div class="products ios apple" id="iphone-x">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">iPhone X</p>
                <p class="product-description">A 5.5" beast of processing power from Apple.</p>
                <p class="product-price" value='999'>999</p>
                <button class="add-to-cart" id='test'>ADD TO CART</button>
            </div>
            
            <div class="products android samsung" id="samsung-s9">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">Samsung S9</p>
                <p class="product-description">The most powerful Android device on the planet.</p>
                <p class="product-price" value='789'>789</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
            
            <div class="products android google" id="pixel-2">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">Pixel 2</p>
                <p class="product-description">The perfect phone for a clean Android experience</p>
                <p class="product-price" value='876'>876</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
            
            <div class="products android oneplus" id="oneplus-6">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">Oneplus 6</p>
                <p class="product-description">The latest from a long line of affordable premium devices by Oneplus</p>
                <p class="product-price" value='799'>799</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
            
            <div class="products ios apple" id="iphone-8">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">iPhone 8</p>
                <p class="product-description">The little, less-stylish brother of the iPhone X.</p>
                <p class="product-price" value='719'>719</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
            
            <div class="products android huawei" id="huawei-p20">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">Huawei P20</p>
                <p class="product-description">A solid performer from the chinese giant Huawei.</p>
                <p class="product-price" value='769'>769</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
            
            <div class="products android lg" id="lg-g7">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">LG G7 ThinQ</p>
                <p class="product-description">The latest and most powerful smartphone from LG.</p>
                <p class="product-price" value='699'>699</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
            
            <div class="products android huawei" id="huawei-mate-10-pro">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">Huawei Mate 10 Pro</p>
                <p class="product-description">The most powerful Android device yet from Huawei.</p>
                <p class="product-price" value='899'>899</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
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
                                
                                <td>
                                    <button id="ks" class="keep-shopping">Keep Shopping</button>
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



</body>
</html>

<script src="script/basket.js"></script>