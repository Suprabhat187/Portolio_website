<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = "suprabhatkasibhatta@gmail.com"; // Replace with your actual email address

    // Create the email subject and body
    $email_subject = "New Contact Form Submission: " . $subject;
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
}
?>
