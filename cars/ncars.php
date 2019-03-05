<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nermin's Cars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link 
        rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" 
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" 
        crossorigin="anonymous">
    
    <!-- FontAwesome CDN -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
        rel="stylesheet" 
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
        crossorigin="anonymous">

    <!-- Bootstrap JavaScript inkl. jQuery und Bootstrap.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    
</head>
<body class="bg-light">


    <div class="container">
  <div class="py-1">
    <h2>Car registration form</h2>

    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    
    <?php
      //var_dump($_GET);

      require "nconnect.php";

      if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (!empty($_GET['brand']) && !empty($_GET['car_type']) && !empty($_GET['body_type']) && !empty($_GET['fuel']) && empty($_GET['delete'])) 
        {
          // If data for new entry provided
          if(!empty($_GET['update'])) 
          {
            require "nupdate.php";
          } 
          else 
          {
            require "ncreate.php";
          }
        } 
        else if(!empty($_GET['delete'])) 
        {
          // Else if delete button pressed
          require "ndelete.php";
        } 
        else if(!empty($_GET['edit'])) 
        {
          // Else if edit button pressed
          require "nedit.php";
        }
      }


    ?>


  </div>

  <div class="row">

    <div class="col-md-12">
      <h4 class="mb-3">Basic data of <?=@$car['brand']?> <?=@$car['car_type']?> #<?=@$car['id']?></h4>
      <form class="needs-validation" novalidate action="ncars.php" method="GET" id="car_form">

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="brand">Brand * </label>
            <input type="text" class="form-control" id="brand" placeholder="e.g. Audi" value="<?=@$car['brand']?>" required name="brand">
            <div class="invalid-feedback">
              Valid brand is required.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="car_type">Car type *</label>
            <input type="text" class="form-control" id="car_type" placeholder="e.g. A6" value="<?=@$car['car_type']?>" required name="car_type">
            <div class="invalid-feedback">
              Valid car type is required.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="body_type">Body type * </label>
            <input type="text" class="form-control" id="body_type" placeholder="e.g. Coupe" value="<?=@$car['body_type']?>" required name="body_type">
            <div class="invalid-feedback">
              Valid body type is required.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="fuel">Fuel *</label>
            <input type="text" class="form-control" id="fuel" placeholder="e.g. Diesel" value="<?=@$car['fuel']?>" required name="fuel">
            <div class="invalid-feedback">
              Valid car fuel is required.
            </div>
          </div>
        </div> 

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" placeholder="e.g. Black" value="<?=@$car['color']?>" required name="color">
            <div class="invalid-feedback">
              Valid car color is required.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cubic">Cubic capacity</label>
            <input type="text" class="form-control" id="cubic" placeholder="e.g. 3000" value="<?=@$car['cubic']?>" required name="cubic">
            <div class="invalid-feedback">
              Valid cubic capacity is required.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="hp">Horse power</label>
            <input type="text" class="form-control" id="hp" placeholder="e.g. 180" value="<?=@$car['hp']?>" required name="hp">
            <div class="invalid-feedback">
              Valid car hp is required.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="mileage">Mileage</label>
            <input type="text" class="form-control" id="mileage" placeholder="e.g. 15659" value="<?=@$car['mileage']?>" required name="mileage">
            <div class="invalid-feedback">
              Valid mileage capacity is required.
            </div>
          </div>
        </div>    
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="update" value="<?=@$car['id']?>">Continue the registration PHP</button>
        <button class="btn btn-warning btn-lg btn-block" type="button" name="update" id="update_button">Continue the registration JS</button>
        <hr class="mb-4">
      </form>
    </div>
  </div>

  <?php //require "nread.php"; ?>

  <div class="row">
    <div class="col-md-12" id="car_table">
      
    </div>
  </div>

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