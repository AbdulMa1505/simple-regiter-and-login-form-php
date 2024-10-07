<?php
include 'dbcon.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password securely using password_hash()
    $hash = password_hash($password, PASSWORD_BCRYPT);

    // Insert the user into the database
    $query = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$hash')";

    // Check if the query was successful
    if (mysqli_query($conn, $query)) {
        echo "Registration successful!";
        header("Location: login.php"); // Redirect to login page
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Username:</label>
        <input type="text" name="name" required><br><br>
        <label for="">Email</label>
        <input type="email" name="email" required><br><br>
        <label for="">Password</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
