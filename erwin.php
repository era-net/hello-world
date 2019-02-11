<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Erwin's page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">

    <!--Font Awesome CDN-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--Bootstrap JavaScript inkl. JQuery und Bootstrap.js-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body class="bg-light">

    <div class="container">
        <div class="py-5">
            <h2>Checkout form</h2>
            <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form
                group has a validation state that can be triggered by attempting to submit the form without completing
                it.</p>

            <?php

            print_r($_GET);

            ?>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                        </div>
                        <span class="text-success">-$5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate action="erwin.php" method="GET">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required name="firstName">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="" value="" required name="lastName">
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="text" class="form-control" id="username" placeholder="Username" required name="userName">
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Choose...</option>
                                <option>United States</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" id="state" required>
                                <option value="">Choose...</option>
                                <option>California</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my
                            billing address</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>

                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked
                                required>
                            <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required>
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                </form>
            </div>
        </div>

<br>
<br>
<br>
<h2>31.01.2019 erwin</h2>
        <!-- ========= 31.01.2019 ========= -->
<!-- OUTPUT VARIABLES -->
<?php
  $txt = "blubb";
  echo "i love $txt!"; // output text
?>

<br>

<?php
  $hey = "w3schools";
  echo "i love " . $hey . "!";  // same as above
?>

<br>

<?php
  $x = 5;
  $y = 4;
  echo $x + $y; // puts out the sum of the two variables $x + $y
?>

<br>

<!-- GLOBAL AND LOCAL SCOPE -->
<?php
  $x = 5; // global scope CAN ONLY BE ACCESSED OUTSIDE A FUNCTION !
  function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x (==== ERROR created on purpose, to see the result.)</p>"; // ERROR =========== !
  }
  myTest(); // this line is just to call the function, so the browser displays the error
    //echo "<p>Variable x inside function is: $x</p>"; ========= THIS LINE WOULD NOT DISPLAY AS AN ERROR BECAUSE THE VARIABLE WAS DECLARED BEFORE THE FUNCTION !
?>

<br>
<!-- HOW TO ACCESS VARIABLES OUTSIDE FUNCTIONS THAN??? -->
<?php
  $x = 5;
  function getVar() {
    global $x; // keyword to access variables outside functions is «global» !

    echo "<p>2 + 3 = " . $x . " !</p>";
  }
  getVar();
?>
<br>

<!-- Learning by doing... -->
<?php
  $txt = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
  echo "<h2>Manual</h2>";
  echo "<p>text is: " . $txt . " !</p>";
$num = 5;
$num2 = 4;
  echo "hello there, how are you $num";
  echo "<br>";
  echo $num + $num2;
  echo "<br>";
  echo "<p class=\"red\" id=\"blubb\">hello there</p>"; // Attributes "class" and "id" seems to not work here...
  echo "<p title=\"blubb\">hey there</p>"; // Attribute "title" seems to work!
?>

<!-- ========= NEW CHAPTER ========= -->
<!--=============================================================================================-->
<br><br><br><br>
<h2 class="orange">hello new chapter</h2>
<!-- Repetition GLOBAL KEYWORD -->
<?php
  $y = 4;
  $z = 6;
  function go() {
    global $y, $z, $o;
    $o = $y + $z;
  }
  go();
  echo $o; // Var $o could not be accessed without the "global" keyword
?>
<br><br>
<?php
  // PHP stores all GLOBAL variables in an array wich can be accessed as follow:
  $num1 = 20; // var num1 with the value of 20
  $num2 = 30; // var num2 with the value of 30
  $num3 = 120; // var num3 with the value of 120
  function getVars() {        // create a function
    $GLOBALS["num1"];         // num1 converted to global
    $GLOBALS["num2"];         // num2 converted to global
    $GLOBALS["num3"];         // num3 converted to global
  }
  getVars();                  // call function getVars
  echo $num1 . "<br>";        // output the value of num1
  echo $num2 . "<br>";        // output the value of num2
  echo $num3;                 // output the value of num3

  // We could also create calculations like this:
  $num4 = 10;
  $num5 = 5;
  $outpt;
  function calculate() {
    $GLOBALS["outpt"] = $GLOBALS["num4"] + $GLOBALS["num5"];
  }
  calculate();
  echo "<br><br>";
  echo "<h4>Calculation with PHP</h4>";
  echo "$num4 + $num5 = $outpt";

  // and the whole thing again for learning
  echo "<br><br>";
  $num6 = 120;
  $num7 = 80;
  $outpt2;
  function calculate2() {                                         // ANALYZE THE ERROR
    $GLOBALS["$outpt2"] = $GLOBALS["$num6"] + $GLOBALS["$num7"];  // BIG MISTAKE!! (don't write "$" here, when you calculate like this !!)
  }                                                               // I mixed this up with the "global" key word.
  calculate2();                                                   // In the "global"-method is "$" needed ! Here it is not !
  echo "<br><br>";
  echo $outpt2; // Unknown Error ! ========= Error solved (see below and komment above)



  // again
  echo "<br><br>";
  $num8 = 5;
  $num9 = 5;
  $outpt3;
  function calculate3() {
    $GLOBALS["outpt3"] = $GLOBALS["num8"] + $GLOBALS["num9"];
  }
  calculate3();
  echo $outpt3;



  // again
  echo "<br><br>";
  $num10 = 11;
  $num11 = 9;
  $outpt4;
  function calculate4() {
    $GLOBALS["outpt4"] = $GLOBALS["num10"] + $GLOBALS["num11"];
  }
  calculate4();
  echo $outpt4; // Success, it worked !!


  // one more time
  echo "<br><br>";
  $num12 = 5;
  $num13 = 5;
  $outpt5;
  function calculate5() {
    $GLOBALS["outpt5"] = $GLOBALS["num12"] + $GLOBALS["num13"];
  }
  calculate5();
  echo $outpt5; // it worked again, nice !!


  // now without watching
  echo "<br><br>";
  $endNum = 15;
  $endNum2 = 20;
  $mainOutpt;
  function mainCalc() {                                     // - don't forget the quotation marks...
    $GLOBALS["mainOutpt"] = $GLOBALS["endNum"] + $GLOBALS[endNum2]; // result should be 25
  }
  mainCalc();
  echo $mainOutpt; // ERROR again: forgot the quotation marks.


  // try again
  echo "<br><br>";
  $ex = 13;
  $ex2 = 7;
  $exout;
  function exCalc() {
    $GLOBALS["exout"] = $GLOBALS["ex"] + $GLOBALS["ex2"];
  }
  exCalc();
  echo $exout; // now it worked again !!


  // try again without watching
  echo "<br><br>";
  $nextEx = 15;
  $nextEx2 = 5;
  $nextExOut;
  function nextExCalc() {
    $GLOBALS["nextExOut"] = $GLOBALS["nextEx"] + $GLOBALS["nextEx2"];
  }
  nextExCalc();
  echo $nextExOut; // it worked without watching! Well done !!


  // now let's repeat the global key word again without watching
  echo "<br><br>";
  $x = 5;
  $z = 7;
  $b;
  function repeatGl() {
    global $x, $z, $b; // result should be 12
    $b = $x + $z;
  }
  repeatGl();
  echo $b; // SUCCESS, it worked perfectly !!
?>




<!-- NEW CHAPTER | Repetition global Variables [01.02.2019]-->
<!--=============================================================================================-->
<br><br><br><br>
<h2 class="orange">NEW CHAPTER repetition global variables [01.02.2019]</h2>
<?php
  $someNum = 5;
  $someNum2 = 5;
  $someOutpt;
  function someCalc() {
    global $someNum, $someNum2, $someOutpt;
    $someOutpt = $someNum + $someNum2;
  }
  someCalc();
  echo $someOutpt; // correct !

  $someNumGl = 5;
  $someNum2Gl = 7;
  $someOutptGl;
  function someCalcGl() {
    $GLOBALS["someOutptGl"] = $GLOBALS["someNumGl"] + $GLOBALS["someNum2Gl"];
  }
  echo "<br><br>";
  someCalcGl();
  echo $someOutptGl; // correct !
?>


<br><br>
<h4>Static Keyword</h4> <!-- STATIC KEYWORD -->
<?php
/*
    Normally when a function is executed/ completed, all of its variables are deleted.
    Use the keyword «static» to prevent that from happening.
*/

// Example
function myExample() {
  static $x = 0;
  echo $x . "<br>";
  $x++; // similar to javascript!
}
myExample();
myExample();
myExample();
myExample();


// learning
echo "<br><br>";
function myTestStatic() {
  static $y = 5;
  echo $y . "<br>";
  $y++;
}
myTestStatic();
myTestStatic();
myTestStatic();


// now without watching
echo "<br><br>";
function myTestStatic2() {
  static $h = 10;
  echo $h . "<br>";
  $h++;
}
myTestStatic2(); 
myTestStatic2();
myTestStatic2(); // it worked !

?>
<br><br>
<h2>Conclusion Variables</h2>
<ol>
  <li>A variable is created with «$». Think of it as containers wich store data.</li>
  <li>Variable declaration: <span class="b">$</span><i><span class="orange">"variable name"</span></i> = <i><span class="v">"declaration"</i></span>;</li>
  <li><p>There are three different scopes of variables: local, global & static.</p>
    <p><strong>local</strong>: a variable declared <strong>within</strong> a function has a LOCAL scope and can only be accessed within that function.</p>
    <p><strong>global</strong>: a variable declared <strong>outside</strong> a function has a GLOBAL scope and can only be accessed outside a function.</p>
    <p><strong>static</strong>: a variable with a STATIC scope prevents deleting the variables after executing a function, so they can be accessed multiple times.</p></li>
</ol>



<!-- NEW CHAPTER | echo and print Statements [02.02.2019]-->
<!--=============================================================================================-->
<br><br><br><br>
<h2 class="orange">NEW CHAPTER echo and print Statements [02.02.2019]</h2>
<h4>PHP echo and print difference</h4>
<p><span class="v">echo</span> and <span class="v">print</span> are more or less the same. They are both used to output data to the screen.</p>
<p>The differences are small: <span class="v">echo</span> has no return value while <span class="v">print</span> has a return value of 1 so it
can be used in expressions. <span class="v">echo</span> can take multiple parameters (although such usage is rare)
while <span class="v">print</span> can take one argument. <span class="v">echo</span> is marginally faster than <span class="v">print</span>.</p>

<h4>Display Text with the echo Statement</h4>

<?php
    echo "<h2>PHP is Fun !</h2>";
    echo "Hello world! <br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    // The echo statement can be used with or without parentheses: echo or echo().
?>
<br><br>
<h4>Display Variables with the echo Statement</h4>
<?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y; // 5 + 4 = 9
?>


<br><br>
<h4>Display Text with the print Statement</h4>

<?php
    print "<h2>PHP is Fun!</h2>";
    print "Hello world<br>";
    print "I'm about to learn PHP!";
    // the print statement cam be used with or without parentheses: print or print().
?>
<br><br>
<h4>Display Variables with the print Statement</h4>
<?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print $x + $y; // 5 + 4 = 9
?>




<!-- NEW CHAPTER | PHP Data Types [03.02.2019]-->
<!--=============================================================================================-->
<br><br><br><br>
<h2 class="orange">NEW CHAPTER PHP Data Types [03.02.2019]</h2>
<p>Variables can store data of different types, and differrent data types can do different Things.</p>
<p>PHP supports the following data types:</p>
<ul>
    <li>String</li>
    <li>Integer</li>
    <li>Float (floating point numbers - also called double)</li>
    <li>Boolean</li>
    <li>Array</li>
    <li>Object</li>
    <li>NULL</li>
    <li>Resource</li>
</ul>

<h4 class="orange">PHP String</h4>
<p>A string is a sequence of characteres, like "Hello world!".</p>
<p>A string can be any text inside quotes. You can use single or double quotes.</p>

<h4>String example</h4>
<?php
    $x = "Hello world!";
    $y = 'Hello world!';

    echo $x;
    echo "<br>";
    echo $y;
?>

<br><br>
<h4 class="orange">PHP Integer</h4>
<p>An integer data type is a non-decimal number between -2,147,483,648 and<br>
2,147,483,647.</p>

<p>Rules for integers:</p>
<ul>
    <li>An integer must have at least one digit</li>
    <li>An integer must not have a decimal point</li>
    <li>An integer can be either positive or negative</li>
    <li>Integers can be specified in three formats: decimal(10-based),<br>
    hexadecimal (16-based-prefixed with 0x) or octal (8-based-prefixed with 0)</li>
</ul>
<p>* digit = Ziffer</p>

<p>in the following example $x is an integer. The PHP var_dump() function returns the data type and value:</p>

<h4>Integer example</h4>
<?php
    $x = 5985;
    var_dump($x); // returns data type and value
?>


<br><br>
<h4 class="orange">PHP Float</h4>
<p>A float (float point number) is a number with a decimal point or a number in exponential form.</p>
<p>In the following example $x is a float. The PHP var_dump() function returns the data type and value:</p>

<h4>Float example</h4>
<?php
    $x = 10.365;
    var_dump($x); // returns data type and value
?>


<br><br>
<h4 class="orange">PHP Boolean</h4>
<p>A Boolean represents two possible states: TRUE or FALSE.</p>

<p>$x = true;<br>$y = false;</p>

<p>Booleans are often used in conditional testing. You will learn more about conditional testing in a later chapter of this tutorial.</p>

<h4>Boolean example</h4>
<?php
    $x = true;
    $y = false;

    var_dump($x);
    echo "<br>";
    var_dump($y);
?>


<br><br>
<h4 class="orange">PHP Array</h4>
<p>An array stores multiple values in one single variable.</p>
<p>In the following example $cars is an array. The PHP var_dump() function returns the data type and value:</p>

<h4>Array example</h4>
<?php
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
?>

<br><br>
<h4 class="v">Repetition Arrays</h4>
<p>Create an array and put it out.</p>
<?php
    $nums = array("num1", "num2", "num3", "num4");
    echo "with <span class='red'>var_dump()</span> = ";
    var_dump($nums);
    echo "<br>";
    echo "with <span class='red'>print_r()</span> = ";
    print_r($nums);
?>

<br><br>
<h4 class="orange">PHP Object</h4>
<p>An object is a data type wich stores data and information on how to process that data.</p>
<p>In PHP, an object must be explicitly declared.</p>
<p>First we must declare a class of object. For this, we use the class keyword. A<br>
class is a structure that can contain properties and methods:</p>

<h4>Object example</h4>
<?php
    class car {
        function Car() {
            $this->model = "VW";
        }
    }
// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>


<br><br>
<h4 class="orange">PHP NULL Value</h4>
<p>Null is a special data type wich can hhave only the value: NULL.</p>
<p>A variable of data type NULL is a variable that has no value assigned to it.</p>
<p><strong>Tip:</strong> If a variable is created without a value, it is automatically assigned a value of NULL.</p>
<p>Variables can also be emptied by setting the value to NULL:</p>

<h4>NULL example</h4>
<?php
    $x = "Hello world!";
    $x = null;
    var_dump($x);
?>


<br><br>
<h4 class="orange">PHP Resource</h4>
<p>Thhe special resource type is not an actual type. It is the storing of a reference to functions and resources external to PHP.</p>
<p>A common example of usinng the resource data type is a database call.</p>
<p>We will not talk about the tesource type here, since it is an advanced topic.</p>


<br><br>
<h4 class="v">Learning, exploring and testing</h4>
<h4>Float</h4>
<?php
    $x = 2.5;
    var_dump($x); // float is just a number with a decimal
?>

<br><br>
<h4>Array</h4>
<?php
    $nums = array("num1", "num2", "num3", "num4", "num5", "num6", "num7", "num8", "num9", "num10");

    print_r($nums);
    echo "<br><br>";
    var_dump($nums);
    echo "<br><br>";
    echo $nums[4] . " this is the 5th array value";
?>


<br><br>
<h4>Object</h4>
<?php
    class Nums {
        function Nums() {
            $this->value = "5";
            $this->name = "num5";
            $this->state = "true";
        }
    }

// create a new object
$num = new Nums();

// show object properties
echo "Value = " . $num->value . "<br>";
echo "Name = " . $num->name . "<br>";
echo "Status = " . $num->state;
?>


<br><br>
<h4 class="orange">PHP 5 Strings</h4>
<h4>Get The Length of a String</h4>
<p>The PHP <span class="red">strlen()</span> function returns the lenght of a string.</p>

<h4>Get String length example</h4>
<?php
    echo "hello world! = " . strlen("hello world!"); // returns 12
    echo "<br>";
    $s = "hello there, how are you";
    echo $s . " = " . strlen($s);
?>

<br><br>
<h4>Count The Number of Words in a String</h4>
<p>The PHP <span class="red">str_word_count()</span> function counts the number of words in a string.</p>

<h4>Get number of words example</h4>
<?php
    echo "hello world! = " . str_word_count("hello world!") . " words";
    echo "<br>";
    $x = "hello there, how are you?";
    echo $x . " = " . str_word_count($x) . " words";
?>

<br><br>
<h4>Reverse a String</h4>
<p>The PHP <span class="red">strrev()</span> function reverses a string.</p>

<h4>Reverse a string example</h4>
<?php
    echo strrev("hello world!"); // returns !dlrow olleh
    echo "<br>";
    $x = "hey there, how are you?";
    echo "the reverse of " . $x . " is: " . strrev($x);
?>


<br><br>
<h4>Search for a specific Text within a string</h4>
<p>The PHP <span class="red">strpos()</span> function searches for a specific text within a string.</p>
<p>If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.</p>

<h4>Search for a specific Text example</h4>
<?php
    echo "String = Hello world! <br>";
    echo "world is on characterposition: " . strpos("Hello world!", "world"); // returns 6
              // 0123456
?>




<br><br>
<h4>Replace Text within a string</h4>
<p>The PHP <span class="red">str_replace()</span> replaces some characteres with some other characteres in a string.</p>


<h4>Replace Text example</h4>
<?php
    echo "String = Hello world! rplacement = Dolly <br>";
    echo str_replace("world", "Dolly", "Hello world!"); // returns Hello Dolly!
?>



<br><br>
<h4 class="v">Let's go back to PHP Objects a little bit [05.01.2019]</h4>
<h4>Let's create an Object</h4>
<?php
    class Keyboard{
        function Keyboard() {
            $this->model = "Korg";
            $this->type = "pax4";
            $this->keys = "32";
        }
    }
    $class1 = new Keyboard();

    echo $class1->keys . "<br>";

    class Audi {
        function Audi() {
            $this->model = "RS5";
            $this->ps = "450";
            $this->year = "2011";
            $this->seats = "4";
        }
    }

    $class2 = new Audi ();

    echo $class2->ps . "<br>";


    class Person {
        function Person() {
            $this->firstname = "Marc";
            $this->lastname = "Zuckerberg";
            $this->age = "34";
            $this->kids = "5";
        }
    }

    $class3 = new Person();

    echo $class3->firstname . "<br>";
    echo $class3->lastname . "<br>";
    echo $class3->age . "<br>";
?>




<br><br>
<h4 class="orange">String repetition</h4>
<?php
    echo $str = "this is my string!";
    echo "<br>";
    echo "my string has " . strlen($str) . " characteres <br>"; // string length
    echo "my string has " . str_word_count($str) . " words <br>"; // word count
    echo "if i would reverse my string, it would look like this: " . strrev($str) . "<br>"; // reverse string
    echo "the word 'string' is on " . strpos($str, "string") . "th position <br>"; // string position
    echo "i could replace a word like this: '" . str_replace("my", "marc's", $str) . "'<br>"; // string replace

    echo "<br>";

    echo $str2 = "how are you?";
    echo "<br>";
    echo "the word 'are' is on: " . strpos($str2, "are") . "th position <br>"; // first write the variable and than the word wich should be counted
    echo "replace a word: '" . str_replace("are", "is", $str2) . "'<br>";   // here first write the word, wich should be replaced, than the word
                                                                            // wich should be displayed instead and then the variable
?>
<br><br>
<h4>Example string count</h4>
<p>1. <span class="red">red</span> = string variable</p>
<p>2. <span class="v">violet</span> = the word wich is searched</p>
<p>strpos(<span class="red">$str2</span>, <span class="v">"are"</span>);</p>

<br><br>
<h4>Example string replace</h4>
<p>1. <span class="v">violet</span> = the word wich should be replaced</p>
<p>2. <span class="b">blue</span> = the word wich should be displayed instead</p>
<p>3. <span class="red">red</span> = string variable</p>
<p>str_replace(<span class="v">"are"</span>, <span class="b">"is"</span>, <span class="red">$str2</span>);</p>

<?php
    echo $str3 = "How is it going?";
    echo "<br>";
    echo "the word going is on: " . strpos($str3, "going") . "th position <br>";
    echo "replace: " . str_replace("is", "was", $str3) . "<br>";
    echo "<br>";
    echo $str4 = "Hello there, how were your holidays?";
    echo "<br>";
    echo "the word 'how' is on: " . strpos($str4, "how") . "th position <br>";
    echo "replace: " . str_replace("your", "you guys", $str4);
?>

<br><br>
<h4>Object repetition</h4>
<?php
    class Vw {
        function Vw() {
            $this->type = "Caddy";
            $this->ps = "150";
            $this->seats = "5";
        }
    }
    $car = new Vw();

    echo $car->type; // it worked !
?>

<br><br>
<h4>String repetition</h4>
<?php
    echo $str = "this is my string to work with...";
    echo "<br>";
    echo "the word 'my' is on: " . strpos($str, "my") . "th position <br>";
    echo "replacement: " . str_replace("my", "our", $str);
    echo "<br><br>";
    echo $str2 = "Marc was fishing";
    echo "<br>";
    echo "the word 'was' is on: " . strpos($str2, "was") . "th position <br>";
    echo "replace: " . str_replace("Marc", "Frank", $str2);
?>


<br><br>
<h4>String repetition (other functions)</h4>
<?php
    echo $str = "Yesterday i played the guitar!";
    echo "<br>";
    echo "this String has " . strlen($str) . " characteres <br>"; // worked
    echo "this String has " . str_word_count($str) . " words <br>"; // worked
    echo "reverse: " . strrev($str) . "<br>"; // worked
?>


<br><br>
<h4 class="orange">PHP 5 Constants</h4>
<p>Constants are like variables except that once they are defined they cannot be changed or undefined.</p>
<p><strong>Note:</strong> Unlike variables, constants are automatically global across the entire script.</p>

<br><br>
<h4>Create a PHP Constant</h4>
<p>To create a Constant, use the <span class="red">define()</span> function.</p>
<br><br>
<h4>PHP constant Syntax</h4>
<pre class="text-muted">define(name, value, case-insensitive)</pre>
<p>Parameters</p>
<ul>
    <li>name: Specifies the name of the constant</li>
    <li>value: Specifies the value of the constant</li>
    <li>case-sensitive: Specifies wheter the constant name should be caseinsensitive. Default is false</li>
</ul>

<br><br>
<h4>Example PHP Constant <strong>(case-sensitive)</strong></h4>
<?php
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;
?>
<br><br>
<h4>Example PHP Constant <strong>(case-insensitive)</strong></h4>
<?php
    define("GREETING", "Welcome to W3Schools.com!", true); // default is false so true means: case-insensitive
    echo greeting; // case-insensitive
?>
<br><br>
<h4>Constants are Global</h4>
<p>Constants are automatically global and can be used across the entire script.</p>
<br><br>
<h4>Example Constants global</h4>
<?php
    define("GREETING2", "Welcome to W3Schools.com!");

    function myTestConst() {
        echo GREETING2; // Works through the entire script
    }

    myTestConst();
?>

<br><br>
<h4>Testing, learning and exploring constants</h4>
<?php
    define("txt", "Some text.. Some text... Some text... Some text...");
    echo txt . "<br>";
    define("TXT2", "Hello there, hello there, hello there", true);
    echo txt2;
?>

<br><br>
<h4>Object repetition</h4>
<?php
    class Computer {
        function Computer() {
            $this->name = "acer";
            $this->type = "xy";
            $this->storage = "1tb";
        }
    }

    $acer = new Computer();

    echo $acer->type . "<br>"; // worked !
    echo $acer->name . "<br>"; // worked !
    echo $acer->storage; // worked !
?>

<br><br>
<h4>Repetition Constants</h4>
<?php
    define("hello", "heheheheeh");
    echo hello; // worked !
    echo "<br>";
    define("HEY", "hahahahaahah", true);
    echo hey; // worked !
?>

<br><br>
<h4>String repetition</h4>
<?php
    $s = "Peter was fishing yesterday!";
    echo "string = " . $s . "<br>"; // worked
    echo "chars = " . strlen($s) . "<br>"; // worked
    echo "words = " . str_word_count($s) . "<br>"; // worked
    echo "reverse = " . strrev($s) . "<br>"; // worked
    echo "word position = " . strpos($s, "fishing") . "<br>"; // worked
    echo "replace = " . str_replace("Peter", "Marc", $s) . "<br>"; // worked
?>



<br><br>
<h4>Repetition Constants</h4>
<?php
    define("dog", "Husky");
    echo dog . "<br>"; // worked!
    define("DOG2", "Labrador", true); // case-insensitive
    echo dog2; // worked!
?>




<br><br>
<h4 class="orange">PHP 5 Operators</h4>
<p>Operators are used, to perform operations on variables and values.</p>

<p>PHP divides the operators in the following groups:</p>
<ul>
<li>Arithmetic operators</li>
<li>Assignment operators</li>
<li>Comparison operators</li>
<li>Increment/ Decrement operators</li>
<li>Logical operators</li>
<li>String operators</li>
<li>Array operators</li>
</ul>

<p><strong>Note:</strong> Operators in PHP are mostly the same as in JavaScript but there are a few exeptions.</p>

<p>Link to a detailed operator list: <a href="https://www.w3schools.com/php/php_operators.asp">PHP Operators</a></p>



<br><br>
<h4 class="orange">PHP 5 if...else...elseif Statements</h4>
<p>Conditional statements are used to perform different actions based on different conditions.</p>

<p>Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.</p>

<p>In PHP we have the following conditional statements:</p>
<ul>
    <li><span class="red">if</span> statement - executes some code if one condition is true</li>
    <li><span class="red">if...else</span> statement - executes some code if a condition is true and another code if that condition is false</li>
    <li><span class="red">if...elseif...else</span> statement - executes different codes for more than two conditions</li>
    <li><span class="red">switch</span> statement - selects one of many blocks of code to be executed</li>
</ul>


<br><br>
<h4>PHP - The if Statement</h4>
<p>The <span class="red">if</span> statement executes some code if one condition is true.</p>

<br><br>
<h4>The if Statement example</h4>
<?php
    $t = date("H");
    echo $t;
    echo "<p>Learn more about the <a href='https://www.w3schools.com/php/php_date.asp'>PHP date function</a> here.</p>";
    if ($t < "20") { // if hours less than 20
        echo "Have a good day!"; // display this
    } // else, automatically nothing will be displayed (in JavaScript it's the same concept)

    echo "<br><br>";

    echo "<h4>The if Statement my example</h4>";
    $b = 12;
    if ($b > 10) { // if $b is higher than 10
        echo "12 is higher than 10"; // true, display this
    }
    echo "<br><br>";
    $g = 17;
    if ($g < 20) { // if $g is less than 20
        echo "17 is less than 20"; // true, display this
    }
    echo "<br><br>";
    $z = 5;
    if ($z < 2) { // if $z is less than 2
        echo "5 is less than 2"; // false, nothing will be displayed !
    }

    echo "<br><br>";
    $j = 100;
    if ($j > 125) { // if $j is bigger than 125
        echo "125 is less than 100"; // false, nothing will be displayed !
    }
?>


<br><br>
<h4>PHP - The if...else Statement</h4>
<p>The <span class="red">if...else</span> statement executes some code if a condition is true and another code if that condition is false.</p>

<br><br>
<h4>The if...else Statement example</h4>
<?php
    $t = date("H");

    if ($t < "20") {                // if $t less than 20
        echo "Have a good day!";    // display this !
    } else {                        // else
        echo "have a good night!";  // display this !
    }
?>


<br><br>
<h4>The if...else Statement my example</h4>
<?php
    echo "<p>s = 50</p>";
    $s = 50;
    echo "<p>if s is higher than 10, do something</p>";

    if ($s > 52) {
        echo "<p class='red'>s is higher than 10. Do this</p>";
    } else {
        echo "<p class='red'>s is smaller than 60. Do this</p>";
    }
?>


<br><br>
<h4>The if...elseif...else Statement</h4>
<p>The <span class="red">if...elseif...else</span> statement executes different codes for more than two conditions.</p>


<br><br>
<h4>The if...elseif...else Statement example</h4>
<?php
    $t = date("H");

    if ($t < "10") {
        echo "have a good morning!";
    } elseif ($t < "20") {
        echo "have a good day!";
    } else {
        echo "have a good night!";
    }
?>



<br><br>
<h4>Repetition if...elseif...else Statement</h4>
<?php
    $f = 23;

    if ($f < 20) {
        echo "17 is less than 20!"; // worked
    } elseif ($f == 17) {
        echo "17 is equal to 17!"; // worked
    } else {
        echo "none..."; // worked
    }
?>



<br><br>
<h4 class="orange">PHP 5 switch Statement</h4>
<p>The <span class="red">switch</span> statement is used to perform different actions based on different conditions.</p>
<p>Use the <span class="red">switch</span> statement to <strong>select one of many blocks of code to be executed.</strong></p>

<br>
<p>This is how it works: First we have a single expression (most often a variable), that is evaluated once. The value of
the expression is then compared with the values for each case in the structure. If there is a match, the block of code 
associated with that case is executed. Use <span class="red">break</span> to prevent the code from running into the next case automatically.<br>
The <span class="red">default</span> statement is used, if no match is found.</p>

<br><br>
<h4>Switch Statement example</h4>
<?php
    $favcol = "red";

    switch ($favcol) {
        case "red":
            echo "your favourite color is red!";
            break;
        case "blue":
            echo "your favourite color is blue!";
            break;
        case "green":
            echo "your favourite color is green!";
            break;
        default:
            echo "your favourite color is neither red, blue, nor green!";
    }
?>


<br><br>
<h4>Repetition Switch Statement</h4>
<?php
    $dog = "Labrador";

    switch($dog){
        case "Husky":
            echo "you have a Husky";
            break;
        case "Labrador":
            echo "you have a Labrador";
            break;
        case "German Shep.":
            echo "you have a German Shep.!";
        default:
            echo "you have none of the available types...";
    }

echo "<br><br>";


    $car = "Audi";

    switch($car) {
        case "Audi":
            echo "you have an Audi";
            break;
        case "Mercedes":
            echo "you have a Mercedes";
            break;
        case "BMW":
            echo "you have a BMW";
            break;
        default:
            echo "you have none of these cars";
    }

echo "<br><br>";
// without watching
    $day = date("l");
    
    switch($day) {
        case "Thursday":
            echo "today is " . $day; // works !
            break;
        case "Friday":
            echo "today is " . $day; // works !
            break;
        case "Saturday":
            echo "today is " . $day; // works !
            break;
        case "Sunday":
            echo "today is " . $day; // works !
            break;
        case "Monday":
            echo "today is " . $day; // works !
            break;
        case "Tuesday":
            echo "today is " . $day; // works !
            break;
        case "Wednesday":
            echo "today is " . $day; // works !
            break;
        default:
            echo "<p class='red'>unknown error occured! please try later</p>"; // works !
    }
?>






<br><br>
<h4 class="orange">Repetition [08.02.2019]</h4>
<br><br>
<h4>if...else...elseif Statement</h4>
<?php
    $g = date("H");
    
    if ($g > 20) {
        echo "Good night!"; // worked !
    } else {
        echo "have a great day!";   // worked !
    }
    echo "<br><br>";

    if ($g < 12) {
        echo "Good morning!";   // worked !
    } elseif ($g > 20) {
        echo "Good night!"; // worked !
    } else {
        echo "Have a great day!";   // worked !
    }
?>



<br><br>
<h4>Switch Statement</h4>
<?php
    $cars = "Audi";

    switch ($cars) {
        case "Audi":
            echo "I have an Audi"; // worked !
            break;
        case "BMW":
            echo "I have a BMW"; // worked !
            break;
        case "Mercedes":
            echo "I have a Mercedes"; // worked !
            break;
        default:
            echo "I have none of these cars..."; // worked !
    }
?>





<br><br>
<h4 class="orange">PHP 5 while Loops</h4>
<p>PHP While loops execute a block of code while the specified condition is true.</p>
<p>Often when you write code, you want the same block of code to run over and over again in a row. 
Instead of adding several almost equal code-lines in a script, we can use loops to perform a task like this.</p>
<p>In PHP, we have the following looping statements:</p>

<ul>
    <li><span class="red">while</span> - loops through a block of code as long as the specified condition is true</li>
    <li><span class="red">do...while</span> - loops through a block of code once, and then repeats the loop as long as the specified condition is true</li>
    <li><span class="red">for</span> - loops through a block of code a specified number of times</li>
    <li><span class="red">foreach</span> - loops through a block of code for each element in an array</li>
</ul>

<br><br>
<h4>The PHP while Loop</h4>
<p>The <span class="red">while</span> loop executes a block of code as long as the specified condition is true.</p>

<br><br>
<h4>While Loop example</h4>
<?php
    $x = 1;

    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }

    echo "<br><br>";

    $s = 0;
    while ($s < 10) {
        echo "Hello World ! <br>";
        $s++;
    }

    echo "<br><br>";

    $f = 1;
    while ($f < 11) {
        echo "$f. " . "blubb <br>";
        $f++;
    }
?>


<br><br>
<h4>While Loop repetition (without watching)</h4>
<?php
    $h = 1;
    while ($h < 6) {
        echo "$h. " . "hehe <br>"; // worked !
        $h++;
    }
?>




<br><br>
<h4 class="orange">PHP 5 do...while loop</h4>
<p>The <span class="red">do...while</span> loop will always wxecute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.</p>

<br><br>
<h4>do...while Loop example</h4>
<?php
    $x = 1;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5); 
?>


<br><br>
<h4>Difference between <span class="red">while</span> and <span class="red">do...while</span></h4>
<p>The difference between the <span class="red">while</span> and <span class="red">do...while</span> loop is, 
that the <span class="red">do...while</span> loop will run the code 1 time no matter if the condition is true or not. The 
<span class="red">while</span> loop will not run any code, if the condition is false.</p>

<br><br>
<h4>Difference between <span class="red">while</span> and <span class="red">do...while</span> example</h4>
<?php
    $x = 0;

    while ($x < 0) {
        echo "<p class='v'>While example</p>"; // code will not be run !
        $x++;
    }

    do {
        echo "<p class='v'>Do...while example</p>"; // code will be run 1 time although the condition is false !
    } while ($x < 0);
?>




<br><br>
<h4 class="orange">PHP 5 for loops</h4>
<p>The <span class="red">for</span> loop in PHP is built in the same way as in JavaScript so i don't have to do this again.</p>




<br><br>
<h4 class="orange">The PHP 5 foreach Loop</h4>
<p>The <span class="red">foreach</span> loop works only on arrays, and is used to loop through each key/ value pair in an array.</p>




<br><br>
<h4>PHP foreach Loop Syntax</h4>
<pre class="text-muted">
foreach ($array as $value) {
<span class="ml-3">// code to be executed;</span>
}
</pre>
<p>For every loop iteration, the value of the current array element is assigned to $value and the array<br>pointer is moved by one, until it reaches the last array element.</p>


<br><br>
<h4>PHP foreach Loop example</h4>
<?
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }
?>




<br><br>
<h4>PHP foreach Loop learning</h4>
<?php
    $colors = array("yellow", "green", "blue", "red");

    foreach ($colors as $value) {
        echo "$value <br>";
    }

    echo "<br><br>";

    $cars = array("BMW", "Audi", "Mercedes");

    foreach ($cars as $value) {
        echo "$value <br>";
    }

    echo "<br><br>";

    $somVal = array("P", "H", "p", "i", "s", "f", "u", "n", ":)", ":)", ":P", ":)");

    foreach ($somVal as $value) {
        echo "$value <br>";
    }
?>




<br><br>
<h4>PHP foreach Loop learning (without watching)</h4>
<?php
    $cols = array("green", "red", "blue", "yellow", "brown", "black", "blue");
    $x = 1;

    foreach ($cols as $value) {
        echo "$x. $value <br>";
        $x++; // just figured out, how you can add numbers in front too...
    }
?>




<br><br>
<h4 class="orange">PHP 5 Functions</h4>
<p>The real power of PHP comes from its functions. PHP has mor than 1000 built-in functions.</p>

<br><br>
<h4>Create a User Defined Function in PHP</h4>
<p>A user-defined function declaration starts with the word <span class="red">function</span>. (same in JavaScript)</p>
<p><mark><strong>Note:</strong> Function names are not case sensitive!</mark></p>


<br><br>
<h4>User Defined Function example</h4>
<?php
    function writeMsg() {
        echo "Hello world!";
    }

writeMsg(); // call the function
?>




<br><br>
<h4>PHP foreach repetition</h4>
<?php
    $cars = array("BMW", "Mercedes", "Audi");

    foreach ($cars as $value) {
        echo "$value <br>"; // worked !
    }
?>




<br><br>
<h4>PHP Function Arguments</h4>
<p>Information can be passed to functions through arguments. An argument is just like a variable.</p>
<p>Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.</p>


<br><br>
<h4>PHP Function Arguments example</h4>
<?php
    function familyName($fname) {
        echo "$fname Refsnes.<br>";
    }
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>


<br><br>
<p>Same with 2 Arguments</p>
<?php
    function listFnameYear($fname, $year) {
        echo "Mr./ Mrs. $fname. Born in $year <br>";
    }

listFnameYear("Mc Gregor", "1985");
listFnameYear("Heeb", "1999");
listFnameYear("Brown", "1968");
?>


<br><br>
<h4>PHP Default Argument Value</h4>
<p>The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:</p>

<br><br>
<h4>PHP Default argument Value example</h4>
<?php
    function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
    }
setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>




<br><br>
<h4>User defined function repetition</h4>
<?php
    function myFunction($name, $year) {
        echo "My name is $name, i'm born in $year ! <br>";
    }
myFunction("Marc", "1995"); // worked !
myFunction("Lilly", "1998"); // worked !
myFunction("Brandon", "1963"); // worked !
myFunction("Amanda", "1996"); // worked !
myFunction("John", "1977"); // worked !
?>

<br><br>
<p>Let's try the same with a default name and default year...</p>

<?php
    function theFunction($name = "John", $year = "1993") {
        echo "My name is $name, i'm born in $year! <br>";
    }
theFunction(); // perfect, it worked !
?>




<br><br>
<h4>Switch statement repetition</h4>
<?php
    $someval = "grey";
    switch ($someval) {
        case "black":
            echo "Your color is $someval !"; // works !
            break;
        case "grey":
            echo "Your color is $someval !"; // works !
            break;
        case "green":
            echo "Your color is $someval !"; // works !
            break;
        default:
            echo "None of these colors is your color..."; // works !
    }
?>




<br><br>
<h4>PHP Functions - Returning values</h4>
<p>To let a function return a value, us the <span class="red">return</span> statement.</p>

<br><br>
<h4>Returning values example</h4>
<?php
    function sum($x, $y) {
        $z = $x + $y;
        return $z;
    }
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>




<br><br>
<h4>Returning values own example</h4>
<?php
    function calc($length, $width) {
        $m2 = $length * $width;
        return $m2;
    }
    echo "m2 = " . calc(5, 5) . "<br>"; // worked
    echo "m2 = " . calc(50, 30) . "<br>"; // worked
?>




<br><br>
<h4 class="orange">PHP 5 Arrays</h4>
<p>An array stores multiple values in one single variable:</p>
<br><br>
<h4>Example</h4>
<pre class="text-muted">
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
</pre>

<br><br>
<h4>Result from example above</h4>
<?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>




<br><br>
<h4>Create an Array in PHP</h4>
<p>In PHP, the <span class="red">array()</span> function is used to create an array.</p>
<p>In PHP, there are three types of arrays:</p>
<ul>
    <li><strong>indexed arrays</strong> - Arrays with a numeric index</li>
    <li><strong>Associative arrays</strong> - Arrays with named keys</li>
    <li><strong>Multidimensional arrays</strong> - Arrays containing one or more arrays</li>
</ul>


<br><br>
<h4>PHP Indexed Arrays</h4>
<p>There are two ways to create indexed arrays:</p>
<h4>Method 1</h4>
<p>Here the index is assigned automatically:</p>
<pre class="text-muted">
    $cars = array("Volvo", "BMW", "Toyota");
</pre>

<h4>Method 2</h4>
<p>Here the index is assigned manually:</p>
<pre class="text-muted">
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";
</pre>




<br><br>
<h4>Get The Length of an Array - The count() Function</h4>
<p>The <span class="red">count()</span> function is used to return the length (the number of elements) of an array:</p>


<br><br>
<h4>count() Function example</h4>
<?php
    $cars = array("Volvo", "BMW", "Audi", "Toyota", "VW");
    echo count($cars);
?>




<br><br>
<h4>Loop Through an Indexed Array</h4>
<p>To loop through and print all the values of an indexed array, you could use a <span class="red">for</span> loop, like this:</p>
<h4>Example</h4>
<?php
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);
    for ($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
?>



<br><br>
<h4>Loop through an Indexed Array (for-method) - selfmade example</h4>
<?php
    $drinks = array("Ice Tea", "Vodka", "Whisky", "Coca Cola", "Fusetea", "Arizona", "Capri-sun");
    $drlen = count($drinks);
    for ($x = 0; $x < $drlen; $x++) {
        echo $drinks[$x] . "<br>"; // worked !
    }
?>

<br><br>
<h4>Loop through an Indexed Array (foreach-method) - selfmade example</h4>
<?php
    $drinks = array("Ice Tea", "Vodka", "Whisky", "Coca Cola", "Fusetea", "Arizona", "Capri-sun");
    foreach ($drinks as $value) {
        echo $value . "<br>"; // worked !
    }
?>


<br><br>
<h4>PHP Associative Arrays</h4>
<p>Associative arrays are arrays that use named keys that you assign to them.</p>
<p>There are two ways to create an associative array.</p>
<h4>Method 1</h4>
<pre class="text-muted">
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
</pre>
<h4>Method 2</h4>
<pre class="text-muted">
    $age["Peter"] = "35";
    $age["Ben"] = "37";
    $age["Joe"] = "43";
</pre>
<p>The named keys can be used in a script.</p>
<h4>Example</h4>
<?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    echo "Peter is " . $age["Peter"] . " years old.";
?>



<br><br>
<h4>PHP Associative Arrays - selfmade example</h4>
<?php
    echo "<h4>Method 1</h4>";
    $element = array("width" => "30", "length" => "50", "height" => "40");
    echo "<p>Element Information</p>";
    echo "width = " . $element["width"] . "<br>";
    echo "length = " . $element["length"] . "<br>";
    echo "height = " . $element["height"] . "<br><br>";

    echo "<h4>Method 2</h4>";
    $element2["width"] = "30";
    $element2["length"] = "50";
    $element2["height"] = "40";
    echo "width = " . $element2["width"] . "<br>";
    echo "length = " . $element2["length"] . "<br>";
    echo "height = " . $element2["height"];

    echo "<br><br>";
    echo "<h4>Loop through</h4>";
    $el2len = count($element2);
    $x = 0;
    for ($x; $x < $el2len; $x++) {
        echo $element2[$x] . "<br>"; // oops...!
    }
    // what went wrong?
    echo $element2[1]; // this is, what went wrong. It is not a indexed array any more. $x is not a numeric value, wich can't be read.
    echo "<br><br>";
    echo $element2["length"]; // this works, because i gave it the correct value to look for. There's a reason, why it's called ASSOCIATIVE ARRAY !
?>
<p>As soon as you declare an array the ASSOCIATIVE-way, there is no numeric index numbers any more. The arrays are then called by the value you gave it.</p>
<p>To loop through an ASSOCIATIVE ARRAY, you have to use the <span class="red">foreach</span> method wich will be seen in the next chapter!</p>




<br><br>
<h4>Loop Through an Associative Array</h4>
<p>To loop through and print all the values of an associative array, you could use a <span class="red">foreach</span> loop, like this:</p>
<h4>Syntax</h4>
<pre class="text-muted">
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "&lt;br&gt;";
    }
</pre>

<br>
<h4>Example</h4>
<?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
?>


<br><br>
<h4>Own Example</h4>
<?php
    $cars = array("BMW" => "300ps", "Mercedes" => "450ps", "Audi" => "500ps");

    foreach($cars as $key => $key_value) {
        echo "Key = " . $key . ", Value = " . $key_value;
        echo "<br>";
    }
    echo "<br><br>";

    echo "<h4>Own Example 2</h4>";
    $drinks = array("Vodka" => "35% vol", "Whiskey" => "45% vol", "Coca Cola" => "0% vol");
    foreach ($drinks as $drinksKey => $drinksKey_value) {
        echo "Key = " . $drinksKey . ", Value = " . $drinksKey_value . "<br>";
    }
?>




<br><br>
<h4>Multidimensional Arrays</h4>
<p><a href="https://www.w3schools.com/php/php_arrays_multi.asp">Multidimensional arrays</a> will be explained in the PHP advanced section.</p>




<br><br>
<h4 class="orange">PHP 5 Sorting Arrays</h4>
<p>The Elements in an array can be sorted in alphabetical or numerical order, descending or ascending.</p>
<p><mark><strong>Note:</strong> ascending = aufsteigend</mark></p>
<p><mark><strong>Note:</strong> descending = absteigend</mark></p>




<br><br>
<h4>PHP - Sort Functions For Arrays</h4>
<p>In this chapter, we will go through the following PHP array sort functions:</p>
<ul>
    <li><span class="red">sort()</span> - sort arrays in ascending order</li>
    <li><span class="red">rsort()</span> - sort arrays in descending order</li>
    <li><span class="red">asort()</span> - sort associative arrays in ascending order, according to the value</li>
    <li><span class="red">ksort()</span> - sort associative arrays in ascending order, according to the key</li>
    <li><span class="red">arsort()</span> - sort associative arrays in descending order, according to the value</li>
    <li><span class="red">krsort()</span> - sort associative arrays in descending order, according to the key</li>
</ul>




<br><br>
<h3 class="red">======== <strong>IMPORTANT: </strong>This part needs more efficient repetition !!! ========</h3>
<br>
<h4>Sort Array in Ascending Order - sort()</h4>
<p>The following example sorts the elements of the $cars array in ascending alphabetical order:</p>
<h4>Syntax</h4>
<pre class="text-muted">
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
</pre>
<h4>Example</h4>
<?php
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);

    $carlen = count($cars);

    for ($x = 0; $x < $carlen; $x++) {
        echo $cars[$x] . "<br>"; // ascending alphabetical output !
    }
?>
<br><br>
<p>The following example sorts the elements of the $nums array in ascending numerical order:</p>
<?php
    $nums = array(4, 5, 2, 8, 9, 10);
    sort($nums);

    $numlen = count($nums);

    for ($x = 0; $x < $numlen; $x++) {
        echo $nums[$x] . "<br>";
    }
?>




<br><br>
<h4>Testing, exploring and learning the sort() function</h4>
<?php
    $names = array("Brandon", "Eddie", "Marcus", "Brad", "Halie", "Marie", "Asmir", "Joe", "John", "Alissa", "Muhammad");
    sort($names);

    $namlen = count($names);

    for($x = 0; $x < $namlen; $x++) {
        echo $names[$x] . "<br>"; // worked !
    }

    echo "<br><br>";

    $drinks = array("Vodka", "Coca Cola", "Whiskey", "Ice-Tea");
    sort($drinks);

    $drilen = count($drinks);

    for ($x = 0; $x < $drilen; $x++) {
        echo $drinks[$x] . "<br>"; // worked !
    }

    echo "<br><br>";

    $nums = array(5, 6, 7 , 3, 1, 9, 10, 20, 120, 200, 250, 3059);
    sort($nums);

    $numlen = count($nums);

    for($x = 0; $x < $numlen; $x++) {
        echo $nums[$x] . "<br>"; // worked !
    }
?>


<br><br>
<h4>Array sort() repetition</h4>
<?php
    $smtng = array("hey", "what", "where", "in", "on", "off", "crazy", "PHP", "ahaha");
    sort($smtng);

    $smtlen = count($smtng);

    for($x = 0; $x < $smtlen; $x++) {
        echo $smtng[$x] . "<br>"; // worked !
    }
?>




<br><br>
<h4>Sort Array in Descending Order - rsort()</h4>
<p>The following example sorts the elements of the $cars array in descending alphabetical order:</p>
<h4>Example</h4>
<?php
    $cars = array("Volvo", "BMW", "Toyota");
    rsort($cars);

    $carlen = count($cars);

    for ($x = 0; $x < $carlen; $x++) {
        echo $cars[$x] . "<br>";
    }
?>
<br>
<p><mark><strong>Note :</strong> practically everything is the same just instead of calling the <span class="v">sort()</span> function, call the <span class="red">rsort()</span> function</mark></p>
<p><mark><span class="v">sort()</span> = ascending order !</mark><br>
<mark><span class="red">rsort()</span> = descending order !</mark></p>




<br><br>
<h4>Sort Array (Ascending Order), According to Value - asort()</h4>
<p>The following example sorts an associative array in ascending order, according to the <mark>value</mark>:</p>
<?php
    // let's try this without looking it up first
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    asort($age);

    foreach ($age as $key => $key_value) {
        echo "key = " . $key . ", value = " . "<span class='red'>" . $key_value . "</span>"; // YES ! I did it!!!
        echo "<br>";
    }
?>


<br><br>
<h4>Sort Array (Ascending Order), According to Key - ksort()</h4>
<p>The following example sorts an associative array in ascending order, according to the <mark>key</mark>:</p>
<?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    ksort($age);

    foreach ($age as $x => $x_value) {
        echo "key = " . "<span class='red'>" . $x . "</span>, value = " . $x_value . "<br>";
    }
?>




<br><br>
<h4>Sort Array (Descending Order), According to Value - arsort()</h4>
<p>The following example sorts an essociative array in descending order, according to the <mark>value</mark>:</p>
<?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    arsort($age);

    foreach ($age as $x => $x_value) {
        echo "key = " . $x . ", value = <span class='red'>" . $x_value . "</span><br>";
    }
?>




<br><br>
<h4>Sort Array (Descending Order), According to Key - krsort()</h4>
<p>The following example sorts an associative array in descending order, according to the <mark>key</mark>:</p>
<?php
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    krsort($age);

    foreach ($age as $x => $x_value) {
        echo "key = <span class='red'>" . $x . "</span>, value = " . $x_value . "<br>";
    }
?>
<br><br>
<h3 class="red">I kind a mixed this part up in my head. Need to go back over it again some time !!</h3>




<br><br>
<h4 class="orange">PHP 5 Global Variables - Superglobals</h4>
<p>Suberglobals were introduced in PHP 4.1.0, and are built-in variables that are always available in all scopes.</p>
<p>Several predefined variables in PHP are "superglobals", wich means that they are always accessible, regardless of scope - and you can access them 
from any function, class or file without having to do anything special.</p>

<p>The PHP superglobal variables are:</p>
<ul>
<li>$GLOBALS</li>
<li>_SERVER</li>
<li>_REQUEST</li>
<li>_POST</li>
<li>_GET</li>
<li>_FILES</li>
<li>_ENV</li>
<li>_COOKIE</li>
<li>_SESSION</li>
</ul>
<p>This chapter will explain some of the superglobals, and the rest will be explained in later chapters.</p>



<br><br>
<h4>PHP $GLOBALS</h4>
<p>$GLOBALS is a PHP super global variable wich is used to access global variables from anywhere in the PHP script (also from within functions or methods).</p>
<p>PHP stores all global variables in an array called $GLOBALS[<i>index</i>].<br>
The <i>index</i> holds the name of the variable.</p>
<p>The example below shows how to use the superglobal variable $GLOBALS:</p>
<br>
<h4>Example</h4>
<?php
    $x = 75;
    $y = 25;

    function addition() {
        $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
    }
    addition();
    echo $z; // result = 100
?>
<p>In the example above, since z is a variable present within the $GLOBALS array, it is also accessible from outside the function!</p>




<br><br>
<h4>PHP $_SERVER</h4>
<p>$_SERVER is a PHP super global variable wich holds information about headers, paths, and script locations.</p>
<p>The example below shows how to use some of the elements in $_SERVER:</p>
<br>
<h4>Syntax</h4>
<pre class="text-muted">
    echo $_SERVER["PHP_SELF"];
    echo "&lt;br&gt;";
    echo $_SERVER["SERVER_NAME"];
    echo "&lt;br&gt;";
    echo $_SERVER["HTTP_HOST"];
    echo "&lt;br&gt;";
    echo $_SERVER["HTTP_REFERER"];
    echo "&lt;br&gt;";
    echo $_SERVER[HTTP_USER_AGENT];
    echo "&lt;br&gt;";
    echo $_SERVER["SCRIPT_NAME"];
</pre>

<br>
<h4>Example</h4>
<?php
    echo "PHP_SELF: " . $_SERVER["PHP_SELF"];
    echo "<br>";
    echo "SERVER_NAME: " . $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo "HTTP_HOST: " . $_SERVER["HTTP_HOST"];
    // echo "<br>";
    // echo "HTTP_REFERER: " . $_SERVER["HTTP_REFERER"]; === This cannot work, because i'm in localhost mode
    echo "<br>";
    echo "HTTP_USER_AGENT: " . $_SERVER["HTTP_USER_AGENT"];
    echo "<br>";
    echo "SCRIPT_NAME: " . $_SERVER["SCRIPT_NAME"];
?>
<br><br>
<p>Link to most important <a href="https://www.w3schools.com/php/php_superglobals.asp">$_SERVER</a> methods.</p>




<br><br>
<h4>PHP $_REQUEST</h4>
<p>PHP $_REQUEST is used to collect data after submitting an HTML form.</p>
<p>The example below shows a form with an input field and a submit button.<br>
When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the &lt;form&gt; tag. In this example,
we point to this file itself for processing form data. If you wish, to use another PHP file to process form data, replace that with the filename of your choice.
Then, we can use the super global variable $_REQUEST to collect the value of the input field:</p>

<form action="erwin.php" method="get">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // collect value of input field
        $name = $_REQUEST["fname"];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
?>

<br><br>
<p>go to my <a href="http://localhost/hello-world/request.php?firstname=Sample+Firstname&lastname=Sample+Lastname&street=Sample+Street&city=Sample+City">own $_REQUEST example</a> !</p>



        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2017-2018 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>