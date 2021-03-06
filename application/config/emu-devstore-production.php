<?php

// PayPal settings
$config['paypal'] = array(
"sandbox" => false,
"receiver" => "paypal@domain.com",
"postback" => "http://localhost/postback",
"return" => "http://localhost/buy/success",
"donation_currency" => "USD",
"launch" => true
);

//Global
$config['site-title'] = "Your site title";
$config['site-slogan'] = "Short description about your website such a slogan</br> </br>html allowed :)"; // allowed html
$config['contact-email'] = "mail@example.com";
// ranks: 0 buyer, 1 vendor, 2 manager, 3 admin
$config['register_rank'] = 1; // default rank when user register new account

// CDN
$config['ftp_hostname'] = "ftp";
$config['ftp_username'] = "username";
$config['ftp_password'] = "password";
$config['sender_mail'] = "no-reply@domain.com";
$config['admin_mail'] = "admin@domain.com";

?>