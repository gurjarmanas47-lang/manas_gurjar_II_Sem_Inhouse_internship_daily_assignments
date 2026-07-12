<?php

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($conn, $_POST["confirm_password"]);

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "All fields are required!";
    }
    elseif ($password != $confirm_password) {
        echo "Passwords do not match!";
    }
    else {

        // Check if email already exists
        $check = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $check);

        if (mysqli_num_rows($result) > 0) {
            echo "Email already exists!";
        } else {

            // Insert new user
            $insert = "INSERT INTO user(username, email, password)
                       VALUES('$username', '$email', '$password')";

            if (mysqli_query($conn, $insert)) {
                echo "Registration Successful!";
                header("Location: login.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}
?>