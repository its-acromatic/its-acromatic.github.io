<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "acromatic121@gmail.com";
    $subject = "New Contact Form Submission";
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    $body = "You have received a new message from $name.\n\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
