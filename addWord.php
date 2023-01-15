
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

    if(isset($_POST['submit']))
    {    
        $$word = $_POST['word'];
        $sql = "INSERT INTO $table(text) VALUES ('$word')";
        if (mysqli_query($conn, $sql)) {
            echo "New record has been added successfully !";
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
  ?>