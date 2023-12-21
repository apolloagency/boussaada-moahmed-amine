<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'mboussada830@gmail.com';
    $headers = "From: $email\r\nReply-To: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        $error = error_get_last();
        echo "Failed to send message. Error: " . $error['message'];
    }
}
?>
