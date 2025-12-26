<?php
// URL দিয়ে data পাঠানো/নেওয়া
// profile.php?name=Fathma&age=21
echo $_GET['name'];
echo $_GET['age'];

// <form method="post" action="save.php">
//   <input type="text" name="username">
//   <input type="submit">
// </form>

echo $_POST['username'];

// $_SESSION

//  Server-side data store (user login info)

session_start();
$_SESSION['user'] = "Fathma";

echo $_SESSION['user'];

// $_COOKIE

// Browser-side data store

setcookie("username", "Fathma", time()+3600);



// $_GET → visible in URL

// $_POST → secure form data

// $_SESSION → login info

// $_COOKIE → remember user













?>