<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST["submitQuote"])) {
    $page=$_POST['page'];

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $service=$_POST['service'];
    $message=$_POST['message'];


    $messegeEmailBody = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Email</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            overflow: hidden;
        }
        .header {
            background-color: #ffffff;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
        .header img {
            max-width: 150px;
            height: auto;
        }
        .content {
            padding: 20px;
            color: #333333;
        }
        .content h1 {
            font-size: 24px;
            color: #004aad;
            margin-bottom: 10px;
        }
        .content p {
            font-size: 16px;
            line-height: 1.5;
        }
        .footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #555555;
        }
        .footer a {
            color: #004aad;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="email-container">
    <!-- Header Section -->
    <div class="header">
        <img src="https://besttaxexpress.com/assets/img/logo/logo-custom-dark.png" alt="Best Tax Express Logo" />
    </div>

    <!-- Content Section -->
    <div class="content">
        <h1>Thank You for Your Quote Submission!</h1>
        <p>
            Thank you for submitting your quote to Best Tax Express. Our team will review it and connect with you soon.
        </p>
        <p>
            If you need any further assistance in the meantime, feel free to contact us via email at <a href="mailto:besttaxexpress@gmail.com">besttaxexpress@gmail.com</a> or call us at (646) 253-4798.
        </p>
        <p>Best regards,</p>
        <p><strong>Best Tax Express Inc.</strong></p>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>
            Best Tax Express Inc.<br>
            1168-29 Hillside Ave. 2nd floor, Suit-2 Jamaica, NY 11432<br>
            Phone: (646) 253-4798 | Email: <a href="mailto:besttaxexpress@gmail.com">besttaxexpress@gmail.com</a>
        </p>
    </div>
</div>
</body>
</html>
';

    $sender_name = 'Best Tax Express Inc.';
    $sender_email = 'noreply@besttaxexpress.com';

    $username = 'noreply@besttaxexpress.com';
    $password = 'i%c1?2B@3eg3';

    $receiver_email = $email;


    $mail = new PHPMailer(true);
    $mail->isSMTP();

    $mail->Host = 'mail.besttaxexpress.com';

    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';

    $mail->Port = 465;

    $mail->setFrom($sender_email, $sender_name);
    $mail->Username = $username;
    $mail->Password = $password;

    $mail->Subject = 'Best Tax Express Inc.';
    $mail->msgHTML($messegeEmailBody);
    $mail->addAddress($receiver_email);


    if($mail->send()) {
        $notify_messege = '<html>
<head>
    <title>New Service Request</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .email-container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            background-color: #ffffff;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        .header img {
            max-width: 150px;
            height: auto;
        }

        .content {
            padding: 20px;
            color: #333333;
        }

        .content h1 {
            font-size: 24px;
            color: #004aad;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
        }

        table tr th {
            border: 1px solid black;
            text-align: left;
            padding: 5px;
        }

        table tr td {
            border: 1px solid black;
            padding: 5px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.5;
        }

        .footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #555555;
        }

        .footer a {
            color: #004aad;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="email-container">
    <!-- Header Section -->
    <div class="header">
        <img src="https://besttaxexpress.com/assets/img/logo/logo-custom-dark.png" alt="Best Tax Express Logo"/>
    </div>
    <!-- Content Section -->
    <div class="content">
        <h1>New Quote Request Details</h1>
        <table>
            <tr>
                <th>Name</th>
                <td>'.$name.'</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>'.$email.'</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>'.$phone.'</td>
            </tr>
            <tr>
                <th>Service</th>
                <td>'.$service.'</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>'.$message.'</td>
            </tr>
        </table>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>
            Best Tax Express Inc.<br>
            1168-29 Hillside Ave. 2nd floor, Suit-2 Jamaica, NY 11432<br>
            Phone: (646) 253-4798 | Email: <a href="mailto:besttaxexpress@gmail.com">besttaxexpress@gmail.com</a>
        </p>
    </div>
</div>
</body>
</html>';


        $sender_name = 'Best Tax Express Inc.';
        $sender_email = 'noreply@besttaxexpress.com';

        $username = 'noreply@besttaxexpress.com';
        $password = 'i%c1?2B@3eg3';

        $receiver_email = 'besttaxexpress@gmail.com';


        $mail = new PHPMailer(true);
        $mail->isSMTP();

        $mail->Host = 'mail.besttaxexpress.com';

        $mail->SMTPAuth = true;

        $mail->SMTPSecure = 'ssl';

        $mail->Port = 465;

        $mail->setFrom($sender_email, $sender_name);
        $mail->Username = $username;
        $mail->Password = $password;

        $mail->Subject = "New Service Request from $name";
        $mail->msgHTML($notify_messege);
        $mail->addAddress($receiver_email);

        if($mail->send()) {
            echo "<script>
                alert('Quote Request Sent Successfully');
                window.location.href='".$page."';
                </script>";
        }
    }
}
else if (isset($_POST["sendContact"])) {
    $page=$_POST['page'];

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];


    $messegeEmailBody = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Email</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            overflow: hidden;
        }
        .header {
            background-color: #ffffff;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
        .header img {
            max-width: 150px;
            height: auto;
        }
        .content {
            padding: 20px;
            color: #333333;
        }
        .content h1 {
            font-size: 24px;
            color: #004aad;
            margin-bottom: 10px;
        }
        .content p {
            font-size: 16px;
            line-height: 1.5;
        }
        .footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #555555;
        }
        .footer a {
            color: #004aad;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="email-container">
    <!-- Header Section -->
    <div class="header">
        <img src="https://besttaxexpress.com/assets/img/logo/logo-custom-dark.png" alt="Best Tax Express Logo" />
    </div>

    <!-- Content Section -->
    <div class="content">
        <h1>Thank You for Your Contact Submission!</h1>
        <p>
            Thank you for submitting your contact to Best Tax Express. Our team will review it and connect with you soon.
        </p>
        <p>
            If you need any further assistance in the meantime, feel free to contact us via email at <a href="mailto:besttaxexpress@gmail.com">besttaxexpress@gmail.com</a> or call us at (646) 253-4798.
        </p>
        <p>Best regards,</p>
        <p><strong>Best Tax Express Inc.</strong></p>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>
            Best Tax Express Inc.<br>
            1168-29 Hillside Ave. 2nd floor, Suit-2 Jamaica, NY 11432<br>
            Phone: (646) 253-4798 | Email: <a href="mailto:besttaxexpress@gmail.com">besttaxexpress@gmail.com</a>
        </p>
    </div>
</div>
</body>
</html>
';

    $sender_name = 'Best Tax Express Inc.';
    $sender_email = 'noreply@besttaxexpress.com';

    $username = 'noreply@besttaxexpress.com';
    $password = 'i%c1?2B@3eg3';

    $receiver_email = $email;


    $mail = new PHPMailer(true);
    $mail->isSMTP();

    $mail->Host = 'mail.besttaxexpress.com';

    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';

    $mail->Port = 465;

    $mail->setFrom($sender_email, $sender_name);
    $mail->Username = $username;
    $mail->Password = $password;

    $mail->Subject = 'Best Tax Express Inc.';
    $mail->msgHTML($messegeEmailBody);
    $mail->addAddress($receiver_email);


    if($mail->send()) {
        $notify_messege = '<html>
<head>
    <title>New Service Request</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .email-container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            background-color: #ffffff;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        .header img {
            max-width: 150px;
            height: auto;
        }

        .content {
            padding: 20px;
            color: #333333;
        }

        .content h1 {
            font-size: 24px;
            color: #004aad;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
        }

        table tr th {
            border: 1px solid black;
            text-align: left;
            padding: 5px;
        }

        table tr td {
            border: 1px solid black;
            padding: 5px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.5;
        }

        .footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #555555;
        }

        .footer a {
            color: #004aad;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="email-container">
    <!-- Header Section -->
    <div class="header">
        <img src="https://besttaxexpress.com/assets/img/logo/logo-custom-dark.png" alt="Best Tax Express Logo"/>
    </div>
    <!-- Content Section -->
    <div class="content">
        <h1>New Contact Request Details</h1>
        <table>
            <tr>
                <th>Name</th>
                <td>'.$name.'</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>'.$email.'</td>
            </tr>
            <tr>
                <th>Subject</th>
                <td>'.$subject.'</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>'.$message.'</td>
            </tr>
        </table>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>
            Best Tax Express Inc.<br>
            1168-29 Hillside Ave. 2nd floor, Suit-2 Jamaica, NY 11432<br>
            Phone: (646) 253-4798 | Email: <a href="mailto:besttaxexpress@gmail.com">besttaxexpress@gmail.com</a>
        </p>
    </div>
</div>
</body>
</html>';


        $sender_name = 'Best Tax Express Inc.';
        $sender_email = 'noreply@besttaxexpress.com';

        $username = 'noreply@besttaxexpress.com';
        $password = 'i%c1?2B@3eg3';

        $receiver_email = 'besttaxexpress@gmail.com';


        $mail = new PHPMailer(true);
        $mail->isSMTP();

        $mail->Host = 'mail.besttaxexpress.com';

        $mail->SMTPAuth = true;

        $mail->SMTPSecure = 'ssl';

        $mail->Port = 465;

        $mail->setFrom($sender_email, $sender_name);
        $mail->Username = $username;
        $mail->Password = $password;

        $mail->Subject = "New Contact Request from $name";
        $mail->msgHTML($notify_messege);
        $mail->addAddress($receiver_email);

        if($mail->send()) {
            echo "<script>
                alert('Quote Request Sent Successfully');
                window.location.href='".$page."';
                </script>";
        }
    }
}
else{
    echo "<script>
                window.location.href='error';
                </script>";
}
