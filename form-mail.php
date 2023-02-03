<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    $to = "info@gurkhaprofitness.com";
    $subject = "New form submission";
    $body = "Name: $name\nEmail: $email\nService: $service\nMessage:\n$message";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Form submitted successfully!";
    } else {
        echo "Failed to submit form. Please try again later.";
    }
}