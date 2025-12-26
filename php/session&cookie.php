<?php
// Session & Cookie মানে কী?
// Session

// Data server-side এ থাকে

// Temporary (browser বন্ধ হলে শেষ)

// Cookie

// Data browser-side এ থাকে

// Time set করা যায়

session_start();
$_SESSION['user'] = "Fathma";
echo $_SESSION['user'];

setcookie("username", "Fathma", time() + 3600); // 1 hour

echo $_COOKIE['username'];
// Delete Cookie
setcookie("username", "", time() - 3600);



?>