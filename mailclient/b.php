<?php
ini_set('display_errors', 0); ini_set('display_startup_errors', 0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nvp_bu_send'])) {
session_start();
if (!empty($_FILES['file0']['tmp_name']) && !is_uploaded_file($_FILES['file0']['tmp_name'])) {
die("my god, what are you doing?");
}
$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $_SESSION['gmailuser'];
    $mail->Password   = $_SESSION['gmailpass'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->addAddress($_POST['to']);
	if(!empty($_POST['cc'])){
    $mail->addCC($_POST['cc']);
	}
	if(!empty($_POST['bcc'])){
    $mail->addBCC($_POST['bcc']);
	}

	if(!empty($_FILES['file0']['tmp_name'])){
    $mail->addAttachment($_FILES['file0']['tmp_name'], strip_tags($_FILES['file0']['name']));
	}

    $mail->isHTML(false);
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['body'];

    $mail->send();
    header("Location: ?&");
} catch (Exception $e) {
    echo "Message could not be sent.";
}
} else {
require "start.php";
?>
            <td valign=top>
               <table width=100% cellpadding=0 cellspacing=0 border=0>
                  <tr>
                     <td width=5 bgcolor="#C3D9FF">&nbsp;</td>
                     <td bgcolor=#e0ecff>
                        <form action="?&amp;fv=b&amp;cs=c&amp;pv=tl&amp;cpt=c&amp;v=b" name=f enctype=multipart/form-data method=POST>
                           <input type=hidden name=redir value="?&amp;"><input type=hidden name=at value="AF6bupPN2Cux9VFxIx9TuQK0rjtqo1zLkg">
                           <table width=100% cellpadding=2 cellspacing=0 border=0 bgcolor="#C3D9FF">
                              <tr>
                                 <td><input type=submit name=nvp_bu_send value="Send">&nbsp; <input type=submit name=nvp_bu_sd value="Save Draft">&nbsp; <input type=submit name=nvp_bu_d value="Discard">&nbsp; 
                           </table>
                           <h2 class=hdn>Compose Form</h2>
                           <table width=100% cellpadding=2 cellspacing=0 border=0 class=compose>
                              <tr>
                                 <td width=1% align=right valign=top nowrap><b id=l-to>To:</b></td>
                                 <td><textarea name=to id=to rows=3 cols=55 wrap=virtual class=i autocomplete=off aria-labelledby=l-to></textarea>
                              <tr>
                                 <td align=right nowrap><b id=l-cc>Cc:</b></td>
                                 <td><input name=cc id=cc value="" type=text size=40 class=i autocomplete=off aria-labelledby=l-cc>
                              <tr>
                                 <td align=right nowrap><b id=l-bcc>Bcc:</b></td>
                                 <td><input name=bcc id=bcc value="" type=text size=40 class=i autocomplete=off aria-labelledby=l-bcc>
                              <tr>
                                 <td align=right nowrap><b id=l-s>Subject:</b></td>
                                 <td><input name=subject value="" type=text size=40 class=i aria-labelledby=l-s>
                              <tr>
                                 <td align=right nowrap><img src="https://ssl.gstatic.com/ui/v1/icons/mail/images/paperclip.gif" width=15 height=15 border=0 alt="Attachment"></td>
                                 <td valign=bottom><b>Attachments:</b>
                              <tr>
                                 <td>&nbsp;</td>
                                 <td><input name=file0 type=file size=42 aria-label="Attach File">
                              <tr>
                                 <td>&nbsp;</td>
                                 <td><input type=submit name=nvp_bu_amf value="Attach More Files">
                              <tr>
                                 <td>&nbsp;</td>
                                 <td><textarea name=body title="Message Body" rows=15 cols=50 wrap=virtual class=mi aria-label="Message Body"></textarea>
                           </table>
                           <table width=100% cellpadding=2 cellspacing=0 border=0 bgcolor="#C3D9FF">
                              <tr>
                                 <td><input type=submit name=nvp_bu_send value="Send">&nbsp; <input type=submit name=nvp_bu_sd value="Save Draft">&nbsp; <input type=submit name=nvp_bu_d value="Discard">&nbsp; 
                           </table>
<?php
require "end.php";
}
?>