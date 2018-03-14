<?php
  include('scripts/config.php');

// create db


$sql01 = "CREATE DATABASE IF NOT EXISTS fsbuttler"; 



  

 
// sql to create table
$sql02 = "CREATE TABLE user (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    vorname VARCHAR(100) NOT NULL,
    nachname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    registrierdatum TIMESTAMP
)";

//  Create table Aircraft

$sql03 = "CREATE TABLE aircraft (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    manufacturer VARCHAR(100),
    type VARCHAR(100),
    aircrafticao VARCHAR(4)
)";

//Create Table Flights

$sql04 = "CREATE TABLE flights (
    id int AUTO_INCREMENT PRIMARY KEY,
    datum DATE,
    callsign VARCHAR(100),
    departure VARCHAR(4),
    arrival VARCHAR(4),
    time TIME,
    distance FLOAT,
    landingrate  FLOAT
)";

//Create table dashboard

$sql05 = "CREATE TABLE dashboard (
    id int AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    Aircraft VARCHAR(100),
    departure VARCHAR(100),
    destination VARCHAR(100),
    duration VARCHAR(100)
)";

if ($db->query($sql01) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating table: " . $db->error;
}
if ($db->query($sql02) === TRUE) {
    echo "Table User created successfully";
} else {
    echo "Error creating table: " . $db->error;
}
if ($db->query($sql03) === TRUE) {
    echo "Table User created successfully";
} else {
    echo "Error creating table: " . $db->error;
}
if ($db->query($sql04) === TRUE) {
    echo "Table User created successfully";
} else {
    echo "Error creating table: " . $db->error;
}
if ($db->query($sql05) === TRUE) {
    echo "Table User created successfully";
} else {
    echo "Error creating table: " . $db->error;
}



$db->close();
  
  
?>
