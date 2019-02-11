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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


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


<a href="erwin.php" class="btn btn-primary mt-3 ml-5"><i class="far fa-caret-square-left"></i> back</a>

<div class="container">
<h4 class="mt-5 mb-5 text-center">PHP $_REQUEST - own example</h4>
<form class="mr-5 ml-5" action="request.php" method="get">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="input-firstname">Firstname</label>
      <input type="text" class="form-control" name="firstname" id="input-firstname" placeholder="Firstname">
    </div>
    <div class="form-group col-md-6">
      <label for="input-lastname">Lastname</label>
      <input type="text" class="form-control" name="lastname" id="input-lastname" placeholder="Lastname">
    </div>
  </div>
  <div class="form-group">
    <label for="input-street">Street</label>
    <input type="text" class="form-control" name="street" id="input-street" placeholder="Street">
  </div>
  <div class="form-group">
    <label for="input-city">City</label>
    <input type="text" class="form-control" name="city" id="input-city" placeholder="City">
  </div>
  <button class="btn btn-primary" onclick="check();">Submit</button>
</form>
</div>
<?php
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $fn = $_REQUEST["firstname"];
        $ln = $_REQUEST["lastname"];
        $str = $_REQUEST["street"];
        $city = $_REQUEST["city"];
        if(empty($fn) || empty($ln) || empty($str) || empty($city)) {
            echo "<p class='text-center mt-5'><span class='red'>All inputs must be filled...!!</span></p>";
        } else {
            echo "<div class='text-center mt-5'>";
            echo "<h4>Result</h4>";
            echo "Firstname: " . "<strong>" . $fn . "</strong>";
            echo "<br>";
            echo "Lastname: " . "<strong>" . $ln . "</strong>";
            echo "<br>";
            echo "Street: " . "<strong>" . $str . "</strong>";
            echo "<br>";
            echo "City: " . "<strong>" . $city . "</strong>";
            echo "</div>";
        }
    }
?>



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