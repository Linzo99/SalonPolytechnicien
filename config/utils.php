<?php
function sendActivationEmail($email, $activationCode) {
    // create the email message
    $to = $email;
    $subject = 'Activate Your Account';
    $message = "Dear User,\r\n";
    $message .= "Thank you for creating an account with us. To activate your account, please click the link below:\r\n";
    $message .= "http://example.com/activate?code=$activationCode\r\n";
    $message .= "\r\n";
    $message .= "Regards,\r\n";
    $message .= "Your Website Team";

    // send the email using PHPMailer library
    require 'vendor/autoload.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'your-username';
    $mail->Password = 'your-password';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('noreply@example.com', 'Your Website');
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $message;

    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
}
?>
