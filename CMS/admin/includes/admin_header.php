<?php include "../includes/db.php";?>
<?php include "../includes/functions.php";?>
<?php session_start(); ?>


<!--Checking if the user is admin, if not, redirecting to index page-->
<?php     

checkingSession();

?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>CMS Page</title>
<link rel="stylesheet" href="../css/css.css" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="cogwheel-g052d9f0cd_1280.png">    
</head>
  
<body> 
   <div class="navbar">
<header>
    
<nav>       
<ul>

    <li><a href="index.php">Home - Admin</a></li>
    <li ><a href="postOptionsTable.php">Edit/Delete</a></li>
    <li ><a href="./addPost.php">Add Posts</a></li>
    <li ><a href="../index.php">Index Page</a></li>

    <li style="float: right"><a href="../includes/logOut.php">Log Out</a></li>
<!--    <li style="float: right"><a href="Login.php">Login</a></li>    -->

</ul>
</nav> 
</header>
</div>