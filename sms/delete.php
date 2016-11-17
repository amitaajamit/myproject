<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

include('connection.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['id']) && is_numeric($_GET['id']))

{

// get id value

$id = $_GET['id'];



// delete the entry
$sql   = "DELETE FROM `login_detail` WHERE id=$id";

$result = mysqli_query($conn,$sql)

or die(mysql_error());



// redirect back to the view page

header("Location: view.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: view.php");

}



?>