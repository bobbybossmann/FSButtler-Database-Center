<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'password');
   //define('DB_USERNAME', 'james');
   //define('DB_PASSWORD', 'Eqb2@8b8');
   define('DB_DATABASE', 'fsbuttler');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>