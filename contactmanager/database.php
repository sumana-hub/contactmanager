<?php
  session_start();
  $dsn = 'mysql:host=localhost;dbname=contact_manager';
  $username = 'root';
  $password = '13579';

  try {
    $db = new PDO ($dsn, $username, $password); //creates the connection
  }
  catch (PDOException $e) {
    $_SESSION["database_error"] = $e->getMessage();
    $url = "database_error.php";
    header("Location: " . $url);
    exit();
  }