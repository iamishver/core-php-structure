<?php
ob_start();
session_start();
require_once 'db.php';
date_default_timezone_set('UTC');
$p = 'home';

if (isset($_SERVER['REDIRECT_URL']) && !empty($_SERVER['REDIRECT_URL'])) {
    $p = $_SERVER['REDIRECT_URL'];
    $p = explode('/', $p);
    $first_p = $p[1];
    if (!empty($p[2]) && strlen($p[2]) > 2) {
        $p = $p[2];
    } else {
        $p = $first_p;
    }
}
?>

<?php

if ($p != '' && $p == 'logout') {
    unset($_SESSION['userData']);
    session_destroy();
    header('Location:home');
}
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="en-US">
    <!--<![endif]-->

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Norlinx | Master Your Data Center</title>
        <link rel="icon" href="<?php echo $baseURL; ?>images/favicon.ico" type="image/x-icon" />
        <link href='https://fonts.googleapis.com/css?family=Karma:400,300,500,600,700' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="<?php echo $baseURL; ?>fonts/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $baseURL; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $baseURL; ?>css/owl.carousel.css" type="text/css" rel="stylesheet" />
        <link href="<?php echo $baseURL; ?>css/style.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo $baseURL; ?>css/fancybox.css">
        <link href="<?php echo $baseURL; ?>css/responsive.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <?php if ($p == 'partner-activity-log') {
    $p = 'partner-activity-log-page';
}?>
        <?php
        if ($conn->connect_error || !file_exists('view/'.$p.'.php')) {
            ?>
            <?php include 'view/header.php'; ?>
            <?php include 'view/404.php'; ?>
            <?php include 'view/footer.php'; ?>
        <?php
        } else {
            ?>
            <div id="page" class="site">
                <?php include 'view/header.php'; ?>
                <?php include 'view/'.$p.'.php'; ?>
                <?php include 'view/footer.php'; ?>
                <a class="scrollup" href="#colophon" style="display: block;"></a>
            </div>
        <?php
        } ?>
    </body>
</html>