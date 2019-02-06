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