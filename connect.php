<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page connection</title>
      
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


<!-- navbar -->
<?php
include("nav.php");
?>
<div  class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <h3 class="text-center text-success">IDENTIFIEZ-VOUS</h3>
        </div>
    </div>


    <div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col-lg-6">
    <div class="card">
     <!--  <img src="image/img1.jpg" class="card-img-top" alt="..."> -->
      <div class="card-body">
        <h5 class="card-title">CRÉEZ VOTRE COMPTE</h5>

        <!-- form -->

        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="textarea mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
        <!-- END Form -->
    
        <button class="btn1 bg-primary">CRÉEZ VOTRE COMPTE</button>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card">
      <!-- <img src="image/img2.jpg" class="card-img-top" alt="..."> -->
      <div class="card-body">
      <h5 class="card-title">DÉJAS INSCRIT ? </h5>
    
  <!-- form -->

  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="textarea mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
        <!-- END Form -->

        <button class="btn1 bg-primary">CONNECTEZ-VOUS</button>
      </div>
    </div>
  </div>
    </div>

</div>














<!-- footer -->
<?php
include("footer.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>