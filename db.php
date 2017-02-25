<?php

if($_SERVER['HTTP_HOST']=='192.168.1.24' || $_SERVER['HTTP_HOST']=='localhost')
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "norlinx";
$baseURL="http://192.168.1.24/norlinx/";
} else {
$servername = "localhost";
$username = "root";
$password = "wazir@password123";
$dbname = "norlinx";
$baseURL="http://norlinxhtml.wazirapp.com/";
}

$conn = new mysqli($servername, $username, $password, $dbname);
$partnerSliderText="Customer Sample:";
$contactUs="Contact Us";
$followUsOn="Follow us on";
$footerLogoText="Master Your Data Center";
$copyRight="© NORLINX 2000-2017. All rights reserved.";
$linkedin="https://www.linkedin.com/company/norlinx-inc.";
$twitter="https://twitter.com/NorlinxDCIM";
$facebook="https://www.facebook.com/NorlinxDCIM/";
/*Contact Us Page*/
$contactPageText="We look forward to hearing from you<span>.</span>";
$ifrmaMap="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3226.501452207679!2d-78.5003785847315!3d36.03246598011392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89ac52eab26d35c5%3A0xfec0cbf9f2d5d75d!2s130+Mosswood+Blvd%2C+Youngsville%2C+NC+27596%2C+USA!5e0!3m2!1sen!2sin!4v1482497871730";
$addressText="130 Mosswood Blvd., Youngsville NC, 27596";
$telephone="919-556-6638";
$fax="919-554-8513";
$salesEmail="sales@norlinx.com";
$supportEmail="technical.support@norlinx.com";
$fromEmail="info@norlinx.com";
$successMsg="Your information has been stored. We get back to you in next 24 hours.";
$norlinxpassword="goforJesus17771";
/*Contact Us Page*/

?>