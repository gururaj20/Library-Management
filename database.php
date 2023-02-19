<!-- save it in C:/xampp/htdocs -->
<?php

  // HTML reciving data
  $Book = $_POST['BookName'];
  $Author = $_POST['AuthorName'];
  $Publi = $_POST['PublicationName'];

  // database credentials
  $host = 'localhost';
  $dbname = 'mydatabase';
  $user = 'myusername';
  $password = 'mypassword';

  // create a database connection
  try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to the database.";
  }
  catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
    
?>