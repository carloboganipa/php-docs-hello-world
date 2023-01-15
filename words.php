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

    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }

    .center {
      margin-left: auto;
      padding: 10px;
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
  <!-- End navbar-->
  
<div class="container vertical-center">
  <div class="content center">
    <?php
    $host = 'mariadbprojiac.mariadb.database.azure.com';
    $username = 'project_admin@mariadbprojiac';
    $password = 'I]nfrastructure23';
    $db_name = 'iac';
    $table = 'users_words';

    //Initializes MySQLi
    $conn = mysqli_init();

    // Establish the connection
    mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);

    $query = "SELECT * FROM users_words;"; //You don't need a ; like you do in SQL
    $result = mysql_query($query);

    echo "<table>"; // start a table tag in the HTML

    while($row = mysql_fetch_array($conn,)){   //Creates a loop to loop through results
    echo "<tr><td>" . htmlspecialchars($row['word']) . "</tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>"; //Close the table in HTML

    mysql_close(); //Make sure to close out the database connection
    ?>
  </div>
</div>

</body>
</html>
