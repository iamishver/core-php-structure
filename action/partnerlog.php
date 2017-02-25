<?php
if (isset($_POST)) {
    $success_msg = 'error';
    if ($_POST['password'] == $norlinxpassword) {
        $password = $_POST['password'];
        $_SESSION['partnerData'] = '1';
        $success_msg = 'success';
    }
    echo $success_msg;
}
