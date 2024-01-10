<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "boromamansavisuals@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $mailBody = "Name: $name\n" .
                "Email: $email\n" .
                "Phone: $phone\n\n" .
                "Message:\n$message";

    mail($to, $subject, $mailBody, $headers);

    echo "Email sent successfully!";
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo "Method Not Allowed";
}
?>
