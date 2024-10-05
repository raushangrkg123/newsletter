<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'raushankumargupta7564@gmail.com'; // Change to your email
        $mail->Password   = 'atglinwkpuekhqac';         // Change to your password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('rkg1338@gmail.com', 'Raushan'); // Change to your name
        $mail->addAddress($email); // Add subscriber's email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Welcome to SesIT Newsletter!';
        $mail->Body    = file_get_contents('template.php'); // Load the HTML template

        if ($mail->send()) {
            $_SESSION['status'] = "Thank you for subscribing!";
        } else {
            $_SESSION['status'] = "Sorry, there was an issue sending the email.";
        }
    } catch (Exception $e) {
        $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    // Redirect back to the form page
    header("Location: newsletter.php");
    exit();
} else {
    header('Location: newsletter.php');
    exit();
}
?>
