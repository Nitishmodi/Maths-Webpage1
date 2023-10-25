<?php
// Handle user registration and save user data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Save user data to a database or file
    // You should use a secure method to store passwords (e.g., hashing)
    
    // Send an email to nitishmodi200@gmail.com
    $to = "nitishmodi200@gmail.com";
    $subject = "New User Registration";
    $message = "Username: $username\nEmail: $email\n";
    
    // You may want to use a library like PHPMailer to send the email
    // mail($to, $subject, $message);
}
?>
