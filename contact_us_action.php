<?php
include "connection.php";
$name=$_REQUEST['name'];
$subject=$_REQUEST['subject'];
$email=$_REQUEST['email'];
$contact_number=$_REQUEST['contact_number'];
$description=$_REQUEST['description'];
date_default_timezone_set('Philippines/Manila');
$date = date('M d, Y');
//inserting values into the db
$query = "insert into contact_us values('','" . $name . "','" . $subject . "','" . $email . "','" . $contact_number . "','" . $description . "','".$date."')";
mysqli_query($conn, $query);
header("location:view_menu.php?q=1");
