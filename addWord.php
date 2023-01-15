
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

    //If connection failed, show the error
    if (mysqli_connect_errno())
    {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
    }

    // Taking word from form
    $word = $_REQUEST['word'];

    //INSERT INTO users_words(text) VALUES ('TIO');

    $sql = "INSERT INTO $table(text) VALUES ('$word')";
    
     // Check if the query is successful
     if(mysqli_query($conn, $sql)){
      echo "<h3>OK!data stored in database successfully</h3>";
  } else{
      echo mysqli_error($conn);
  }
  ?>