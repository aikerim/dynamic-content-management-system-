<?php

  define("DB_SERVER", "localhost");
  define("DB_USER", "admin1");
  define("DB_PASS", "admin1");
  define("DB_NAME", "widget_corp");
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
