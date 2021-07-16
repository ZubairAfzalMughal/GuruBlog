<?php

  include_once('connection.php');
  if(isset($_POST['mytitle']) && isset($_POST['mydetail'])){
     
    $title=$_POST['mytitle'];
    $detail=$_POST['mydetail'];
    $query="INSERT INTO blog(title,detail) VALUES('$title','$detail')";

    $insert_query=mysqli_query($link,$query);
   
    if($insert_query){
    
    }else{
        echo "Failed";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru Blogging</title>
    <!-- BootStrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- Css Link -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main class="form-signin">
  <form class="form-group" method="post">
    <img class="mx-auto d-block" src="images/R.png" alt="" width="150" height="150">
    <h1 class="h2 text-center">Guru Blogging</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="title" name="mytitle">
      <label for="floatingInput">Post Title</label>
    </div>
    <div class="form-floating">
  <textarea class="form-control" placeholder="Add Details Here.." name="mydetail" id="detail" style="height: 150px;"></textarea>
  <label for="floatingTextarea2">Add Details Here..</label>
   </div>

    <button class="w-100 btn btn-lg btn-success mt-2" type="submit">Post</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021-2022 zubairafzal621@gmail.com</p>
  </form>
</main>

    <!-- BootStrap JavaScript And JQuery Links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>