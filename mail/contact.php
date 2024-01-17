<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields values
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set up the recipient email address
    $to = "nour.eldin06@gmail.com";

    // Set up the email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Build the email content
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";

    // Set up the email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Success! Your message has been sent.";
    } else {
        echo "Error! Something went wrong and we couldn't send your message.";
    }
}
?>
