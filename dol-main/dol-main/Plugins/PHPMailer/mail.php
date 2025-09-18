<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address!";
        exit;
    }

    // Customized Welcome Email
    $subject = "Welcome to Task App!";
    $message = "Hello, " . htmlspecialchars($email) . ",\n\n";
    $message .= "Thank you for signing up to our application. We're excited to have you onboard!";

    $headers = "From: no-reply@taskapp.com";

    if (mail($email, $subject, $message, $headers)) {
        echo "Welcome email sent successfully to " . htmlspecialchars($email);
    } else {
        echo "Failed to send welcome email.";
    }
}
?>
