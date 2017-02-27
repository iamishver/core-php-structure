<?php
if (isset($_POST)) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($password == $partnerpassword) {
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = date('Y-m-d H:i:s');
        $sql = "insert into users (var_email,var_ip_address,dt_created_date) values ('$username','$ip','$date')";
        if ($conn->query($sql) === TRUE) {
            $array = array("userId" => $conn->insert_id);
            $_SESSION['userData'] = $array;
            echo 'success';
            exit;
        }
    } else {
        echo "error";
        exit;
    }
}