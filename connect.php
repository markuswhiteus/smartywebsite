<?php
          $username = "1428269";
          $password = "k17273";
          $hostname = "localhost";
          $db = "db1428269";
          
        // Create connection
          $conn = mysqli_connect($hostname, $username, $password, $db);

      // Check connection
            if (!$conn) {
              die("Connection failed: ");
              }
?>