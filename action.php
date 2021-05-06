<?php
if (isset($_POST['send_mesasge_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message = "<html>"
    <head>
        <title>New Message from Website</title>
        </head>
    <body>
        <h1>" . $subject . "</h1>
        <p>" . $msg . "</p>
    </body>
    </html>";
    if (mail('coopermckernan@gmail.com', $subject, $message, $headers)) {
        echo "Email sent";
    }else{
        echo "Failed to send email. Please try again later";
    }
}
?>