<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "sentrafurnish@gmail.com"; // Ganti dengan alamat email Anda
        $subject = "New Newsletter Subscription";
        $message = "A new user has subscribed to your newsletter: " . $email;
        $headers = "From: sentrafurnish@gmail.com"; // Ganti dengan alamat email Anda

        if (mail($to, $subject, $message, $headers)) {
            echo "Thank you for subscribing!";
        } else {
            echo "Failed to send email. Please try again.";
        }
    } else {
        echo "Invalid email format.";
    }
}
?>
