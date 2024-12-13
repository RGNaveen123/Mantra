<?php
    $name = $_POST['name'];
    $vistors_email = $_POST['email'];
    $phone_no = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = 'rgnaveenyt1234@gmail.com';

    $email_subject = 'New Enquriy';

    $email_body = "User Name: $name.\n".
                    "User Phone Number: $phone .\n".
                    "User Email: $email .\n".
                    "User Message: $message .\n";


    $to = 'naveenmanoj02@gmail.com';

    $header = "From $email_from \r\n";

    $header .= "Reply-To: $vistors_email \r\n";


    mail($to, $email_subject, $email_body, $header);

    header("location: Contact_Us.html");


?>