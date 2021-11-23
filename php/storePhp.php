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
