<!DOCTYPE html>
<html lang="en">
<head>
  <title>IaC 2022/23</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .vertical-center {
      margin: 0;
      position: absolute;
      top: 50%;
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
    }
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }
    
    li {
      float: left;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    li a:hover:not(.active) {
      font-size: 20px;
      font-weight: bold;
    }

    .btn-warning {
      width: 50px;
      height: 30px;
    }
    
    </style>
</head>
<?php
require '403.php';
?>
<body>

  <!-- Navigation -->
  <ul>
    <li><a class="active" href="#"><img src="img/HESSO-logo.png" height="30px" width="100px" alt=""></a></li>
    <li><a href="index.php">Home</a></li>
    <li><a href="words.php">Data</a></li>
  </ul>
  
<div class="container">
  <h2>Projet IaC Monitoring - ID-2a 2022/2023 </h2>
  <h5> by Carlo Bogni, Hugo Varenne, André Filipe Quintas Gervásio </h5>

  <div class="content">

  <!-- Word form-->
  <h5> Insert your word to db: </h5>
<form class="vertical-center" action="addWord.php" method="post">
  <fieldset>
    <input type="text" name="word" placeholder="Insert a word" />
    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
  </fieldset>
</form>
<br>
<h4> Generate an HTTP error: </h4>
<div class="btn-group btn-group-justified">
<form action="404.php" method="post">
    <input class="btn btn-warning" type="submit" name="err404" id="err404" value="404"/><br/>
</form>
<form action="403.php" method="post">
  <input class="btn btn-warning" type="submit" name="err403" id="err403" value="403"/><br/>
</form>
<form action="403.php" method="post">
  <input class="btn btn-warning" type="submit" name="err403" id="err403" value="403"/><br/>
</form>
</div>
  </div>
</div>

</body>
</html>