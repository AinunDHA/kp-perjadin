<?php
$connect = new mysqli("localhost", "root", "", "perjadin");
          if ($connect->connect_errno) {
            echo "Failed to connect MySQL: " . $connect->connect_error;
          }
 ?>
