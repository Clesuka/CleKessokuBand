<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $keyUsername = "clesuka";
    $keyPassword = "12345678";

    if ($username == $keyUsername && $password == $keyPassword) {
        // Login success, redirect to index.html
        header("Location: index.html");
        exit;
    } else {
        // Login failed, redirect back to the login page with an error message
        header("Location: form.html");
        exit;
    }
}
?>
