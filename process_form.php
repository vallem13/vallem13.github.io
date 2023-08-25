<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Sanitize and process data as needed
    // ...

    $to = "alexandra.valle.work@gmail.com"; // Your email address
    $headers = "From: $email\r\n";

    // Send the email
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>
