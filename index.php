<?php 

require 'func.php';
if(isset($_POST['submit'])){
  var_dump($_POST);
  // if(voting($_POST) > 0){
  //   echo 'voting berhasil';
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="vote" id="inlineRadio1" value="1">1
          </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="vote" id="inlineRadio2" value="2">2
        </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="vote" id="inlineRadio3" value="3">3
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Vote</button>
    </form>
    </div>
    </div>
    </div>


</body>
</html>