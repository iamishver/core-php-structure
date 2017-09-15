<?php

$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$companytxt = $_REQUEST['companytxt'];
$varemail = $_REQUEST['varemail'];
$Products = $_REQUEST['Products'];
$yourmessage = $_REQUEST['yourmessage'];

    if (!empty($firstname) && !empty($lastname) && !empty($companytxt) && !empty($varemail) && !empty($Products) && !empty($yourmessage)) {
        $date_time = date('Y-m-d H:i:s');
        $sql = "INSERT INTO contact (firstname, lastname, companytxt, varemail, Products, yourmessage, date_time) VALUES ('".$firstname."','".$lastname."','".$companytxt."','".$varemail."','".$Products."','".$yourmessage."','".$date_time."')";
        $InsValue = $conn->query($sql);

        $to = $varemail;
        $file = 'mailtemplate/contact.html';
        $Body = file_get_contents($file);
        $subject = 'Contact Us From '.$varemail;
        $fullname = $firstname.' '.$lastname;

        $LogoImagepath = $baseURL.'images/logo-1.png';
        $Body = '';
        $Body = str_replace('<<fullname>>', ucfirst($fullname), $Body);
        $Body = str_replace('<<companytxt>>', $companytxt, $Body);
        $Body = str_replace('<<varemail>>', ucfirst($varemail), $Body);
        $Body = str_replace('<<Products>>', ucfirst($Products), $Body);
        $Body = str_replace('<<yourmessage>>', ucfirst($yourmessage), $Body);
        $Body = str_replace('<<LogoImagepath>>', ucfirst($LogoImagepath), $Body);

        $headers = 'From:'.$fromEmail." \r\n";
        $headers .= 'X-Mailer: PHP/'.phpversion()."\r\n";
        $headers .= 'MIME-Version: 1.0'."\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1\n'."\r\n"; //exit;
        //$Body.=$mail->Body;

        mail($to, $subject, $Body, $headers);
    }
