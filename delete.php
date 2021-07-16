<?php
  include_once('connection.php');

  $id=$_REQUEST['id'];

  $q="DELETE FROM blog where id=".$id;
  
  $qs=mysqli_query($link,$q);

  if($qs){
      header("Refresh:5; url=home.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="container">
<div class="h-100 p-5 bg-light border rounded-3">
          <h2>Recored has been deleted</h2>
          <p>We are going back in a few seconds</p>
        </div>
</body>
</html>
