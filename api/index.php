<?php

$error = '';
$successMessage = '';

if ($_POST) {


    if (!$_POST['name']) {
        $error .= 'Name is required.<br>';
    }
    if (!$_POST['email']) {
        $error .= 'An email address is required.<br>';
    }
    if (!$_POST['subject']) {
        $error .= 'Subject is required.<br>';
    }
    if (!$_POST['message']) {
        $error .= 'Message is required.<br>';
    }

    if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        $error .= 'The email address is invalid.';

    }

    if ($error != '') {
        $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' . $error . '</div>';
    } else {
        $to = 'fidenki1429@gmail.com';

        $subject = $_POST['subject'];

        $message = $_POST['message'];

        $headers = 'From: '.$_POST['email']   . "\r\n" .
                 'Reply-To: '.$_POST['email']  . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();


        mail($to, $subject, $message, $headers);

        // if (mail($to, $subject, $message, $headers)) {
        //     $successMessage = '<div class="alert alert-success" role="alert"><p>Your message was sent successfully.</p>' . $error . '</div>';
        // } else {
        //     $error = '<div class="alert alert-danger" role="alert"><p>Sorry, message could not be sent, please try again later.</p>' . $error . '</div>';

        // }
    }
  
}



    // $to      = 'nobody@example.com';
    // $subject = 'the subject';
    // $message = 'hello';
    // $headers = 'From: webmaster@example.com'       . "\r\n" .
    //              'Reply-To: webmaster@example.com' . "\r\n" .
    //              'X-Mailer: PHP/' . phpversion();

    // mail($to, $subject, $message, $headers);


?>
 