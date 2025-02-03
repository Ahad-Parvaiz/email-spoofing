<?php
$to = "islamicguidanve786.0@gmail.com"; // recipient's email address
$subject = "Test Email"; // subject of the email
$message = "Hello, this is a test email."; // message body

// Sender's details
$senderName = "HackTivists"; // Sender's name
$senderEmail = "islamicguidance786.0@gmail.com"; // Sender's email address

// Set the "From" header with sender's name and email
$headers = "From: $senderName <$senderEmail>"; 

// Send the email
if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
