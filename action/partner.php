<?php

include '/db.php';

if (isset($_POST)) {
//    print_r($_POST);
//    exit;
//    print_r($_SESSION);
//    exit;
    if ($_POST['captcha-118'] == $_SESSION['code']) {
        $post = $_POST;
        $FundedProject = $post['FundedProject'];
        $comapnyName = $post['CompanyName'];
        $Address = $post['Address'];
        $City = $post['City'];
        $State = $post['State'];
        $PostalCode = $post['PostalCode'];
        $FullName = $post['FullName'];
        $EmailAddress = $post['EmailAddress'];
        $phone = $post['phone'];
        $comments = $post['comments'];
        $PartnerName = $post['PartnerName'];
        $PartnerContactName = $post['PartnerContactName'];
        $partnerPhone = $post['partnerPhone'];
        $partnerEmail = $post['partnerEmail'];
        $partnerComments = $post['partnerComments'];
        $date = date('Y-m-d H:i:s');
        $query = 'INSERT INTO `nx_partner`(`var_company`, `var_city`, `var_address`, `var_state`, `var_post_code`, `var_code_name`, `var_email`, `var_phone`, `txt_comment`, `var_partner_name`, `var_partner_contact_name`, `var_partner_phone`, `var_partner_email`, `txt_partner_comment`, `var_funded_project`, `dt_created_date`, `dt_updated_date`) VALUES ('
                ."'$comapnyName',"
                ."'$City',"
                ."'$Address',"
                ."'$State',"
                ."'$PostalCode',"
                ."'$FullName',"
                ."'$EmailAddress',"
                ."'$phone',"
                ."'$comments',"
                ."'$PartnerName',"
                ."'$PartnerContactName',"
                ."'$partnerPhone',"
                ."'$partnerEmail',"
                ."'$partnerComments',"
                ." '$partnerComments',"
                ."'$date',"
                ."'$date')";
        if ($conn->query($query) === true) {
            echo 'success';
            exit;
        } else {
            echo 'Error';
            exit;
        }
    } else {
        echo 'not match';
        exit;
    }
}
