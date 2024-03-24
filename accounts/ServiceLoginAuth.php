<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION['gmailuser']) && $_POST["service"] == "mail") {

if(empty(trim($_POST["Email"])) || empty(trim($_POST["Passwd"]))){

die("email and password cannot be empty");

} elseif(!preg_match('/^[a-zA-Z0-9\.\_\-\=\@]+$/', trim($_POST["Email"]))){

die("invalid email");

} else {

$mbox = imap_open("{imap.gmail.com:993/imap/ssl/novalidate-cert/readonly}INBOX", $_POST["Email"], $_POST["Passwd"])

     or die("invalid password");

imap_close($mbox);

$_SESSION['gmailuser'] = $_POST["Email"];

$_SESSION['gmailpass'] = $_POST["Passwd"];

header('Location: /mail/u/0/h/');

}
}