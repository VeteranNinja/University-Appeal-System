<?php
error_reporting(E_ALL ^ E_DEPRECATED);

// Start a PHP session

session_start();


// Extract the information from the form

$id = $_POST['id'];
$password = $_POST['password'];

// Connect to database server

$dbserver="localhost";
$dbusername="nh9amt";                              // Remember that logging in as the MySQL root user is a security risk
$dbuserpassword="1304464";                             // A MySQL root user without a password is also a security risk.  Used here though for simplicity of demonstration
$connection = mysql_connect($dbserver,$dbusername,$dbuserpassword) or die("Couldn't connect to the database server.");

// Select database

$dbname="boltonappeals";            // Use your own database name
$dbselectok = mysql_select_db($dbname,$connection) or die("Couldn't select database.");

// Execute SQL query to read the database table to see if the user's account details are there

$result = mysql_query("SELECT * FROM students WHERE id='$id'  AND  password='$password'");

// Check if $result holds one record, if it does then the user's details have been found and the user is already a registered member of the website

if (mysql_num_rows($result) == 1)
{
  $_SESSION['id'] = $id;  // Create a session variable named username that can be checked in other pages
  echo "Welcome <a href='memberpage.php'>Enter the member's page</a>";
}
else
{
  echo "Incorrect login attempt - Please try again<br />";
  echo "<a href='index.html'>Login</a>";
}


?>







    



