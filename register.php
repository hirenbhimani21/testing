<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Store data in a file
    $file = fopen("registrations.txt", "a");
    fwrite($file, "Name: $name, Email: $email\n");
    fclose($file);

    // Email data to you
    $to = "hirenbhai2003@gmail.com"; // Replace with your email
    $subject = "New Registration";
    $body = "Name: $name\nEmail: $email";
    mail($to, $subject, $body);

    echo "Thank you for registering!";
} else {
    echo "Invalid request.";
}
?>
