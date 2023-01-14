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
    
    </style>
</head>
<body>

  <!-- Navigation -->
  <ul>
    <li><a class="active" href="#"><img src="img/HESSO-logo.png" height="30px" width="100px" alt=""></a></li>
    <li><a href="index.php">Home</a></li>
    <li><a href="words.php">Data</a></li>
  </ul>
  
<div class="container">
  <h3>Projet IaC Monitoring - ID-2a 2022/2023 </h3>
  <div class="content">

  <!-- Word form-->
<form id="wordform" class="vertical-center">
  <fieldset>
    <input type="text" name="word" placeholder="Insert a word" />
    <input type="button" name="next" class="next action-button" value="Send!" />
  </fieldset>
</form>

    <!-- PHP Code-->

    <?php
        /*$servername = "mariadbprojiac.mariadb.database.azure.com";
        $username = "project_admin@mariadbprojiac";
        $password = "I]nfrastructure23";
        $database = "iac";

        $con=mysqli_init(); 
        mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
        mysqli_real_connect($con, $servername, $username, $password, $database, 3306);*/

    echo "okok";

      ?>

  </div>
</div>

</body>
</html>