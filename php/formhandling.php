<?php
// error message variable
$nameErr = $emailErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST["name"];
    }

    // Email validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $email = $_POST["email"];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>

<h2>Registration Form</h2>

<form method="post" action="">
    Name: <br>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error"><?php echo $nameErr; ?></span>
    <br><br>

    Email: <br>
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>
    <br><br>

    <input type="submit" value="Submit">
</form>

<?php
// success output
if ($name && $email) {
    echo "<h3>Form Submitted Successfully</h3>";
    echo "Name: $name <br>";
    echo "Email: $email";
}
?>

</body>
</html>
