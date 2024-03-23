<?php
session_start();
if(isset($_GET['v']) && $_GET['v'] == "tz") {
header('Content-Type: image/gif');
die();
} elseif (!isset($_SESSION['gmailuser']) && !isset($_GET['login']) && $_SERVER["REQUEST_METHOD"] != "POST") {
header('Location: /maildemo.php?login');
die();
}
if (isset($_GET['login'])) {
?>
<!DOCTYPE html>
<html>
<body>
<h1>gmail demo (proof of concept)</h1>
<form action="maildemo.php" method="post">
your gmail address:
<input name="email" id="email" type="text" size="20" value="">
your gmail app password (how to get one? do a google search on it):
<input name="password" id="password" type="password" size="20" value="">
<input type="submit" name="login" value="login">
</form>
</body>
</html>
<?
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION['gmailuser'])) {
if(empty(trim($_POST["email"])) || empty(trim($_POST["password"]))){
die("email and password cannot be empty");
} elseif(!preg_match('/^[a-zA-Z0-9\.\_\-\=\@]+$/', trim($_POST["email"]))){
die("invalid email");
} else {
$mbox = imap_open("{imap.gmail.com:993/imap/ssl/novalidate-cert/readonly}INBOX", $_POST["email"], $_POST["password"])
     or die("invalid password");
imap_close($mbox);
$_SESSION['gmailuser'] = $_POST["email"];
$_SESSION['gmailpass'] = $_POST["password"];
header('Location: /maildemo.php');
}
} else {
$mbox = imap_open("{imap.gmail.com:993/imap/ssl/novalidate-cert/readonly}INBOX", $_SESSION['gmailuser'], $_SESSION['gmailpass'])
     or die("can't connect: " . imap_last_error());

$recentnum = imap_num_recent($mbox);
$MC = imap_check($mbox);
$msgsminus50 = $MC->Nmsgs - 50;
if($msgsminus50 < 1) {
$msgsminus50 = 1;
}

$result = imap_fetch_overview($mbox,"$msgsminus50:{$MC->Nmsgs}",0);
usort($result, function($a, $b) {
  return($b->udate-$a->udate);
});
function shorten($text, $number, $symbols = '...') {
    $new = (strlen($text) > $number) ? substr($text, 0, $number) . $symbols : $text;
    return $new;
}
?>
<html lang="en">
    <pre style="font-size: 0;display: none;visibility: hidden;">


</pre>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Gmail - Inbox</title><link rel="canonical" href="https://mail.google.com/mail/"/><link rel="shortcut icon" href="https://ssl.gstatic.com/ui/v1/icons/mail/rfr/gmail.ico" type="image/x-icon"><link rel="stylesheet" type="text/css" href="https://mail.google.com/mail/u/1/h/_//?&amp;name=c&amp;ver=6wrl3yi4mm9e&amp;v=ss" nonce="boEx14cBlaMkkZGCxMW5kA"><style type="text/css" nonce="boEx14cBlaMkkZGCxMW5kA">
            @import url("https://mail.google.com/mail/u/1/h/_//?&name=a&ver=1sthyqjwgl8hj&v=ss");
            #gbar,
            #guser {
                font-size: 13px;
                padding-right: 8px;
                padding-top: 4px !important;
            }
            #gbar {
                padding-left: 8px;
                height: 22px
            }
            #guser {
                padding-bottom: 7px !important;
                text-align: right
            }
            .gbh,
            .gbd {
                border-top: 1px solid #c9d7f1;
                font-size: 1px
            }
            .gbh {
                height: 0;
                position: absolute;
                top: 24px;
                width: 100%
            }
            @media all {
                .gb1 {
                    height: 22px;
                    margin-right: 0.5em;
                    vertical-align: top
                }
                #gbar {
                    float: left
                }
            }
            a.gb1,
            a.gb4 {
                text-decoration: underline !important
            }
            a.gb1,
            a.gb4 {
                color: #00c !important
            }
            .gbi .gb4 {
                color: #dd8e27 !important
            }
            .gbf .gb4 {
                color: #900 !important
            }
        </style><base href="/maildemo.php"><script type="text/javascript" nonce="fhoi2ywldN-yJ0o1YooxIw">
            (function () {
                try {
                    var win = this;
                    while (true) {
                        if (win.parent == win) 
                            break;
                        
                        win
                            .frameElement
                            .src
                            .substr(0, 1);
                        win = win.parent
                    }
                    if (win.frameElement != null) 
                        throw "busted";
                    
                } catch (e) {
                    document.write("--\x3e\x3cplaintext style\x3ddisplay:none\x3e\x3c!--");
                    try {
                        if (!open(location, "_top")) 
                            alert("This content cannot be framed");
                        
                        top.location = location
                    } catch (d) {}
                }
            })();
        </script>
        <script type="text/javascript" nonce="fhoi2ywldN-yJ0o1YooxIw"></script>
    </head>
    <body bgcolor="#ffffff">
        <div id="gbar">
            <nobr>
                <a target="_blank" class="gb1" href="https://www.google.com/webhp?tab=mw&authuser=1">Search</a>
                <a target="_blank" class="gb1" href="https://www.google.com/imghp?hl=en&tab=mi&authuser=1">Images</a>
                <a target="_blank" class="gb1" href="https://maps.google.com/maps?hl=en&tab=ml&authuser=1">Maps</a>
                <a target="_blank" class="gb1" href="https://play.google.com/?hl=en&tab=m8&authuser=1">Play</a>
                <a target="_blank" class="gb1" href="https://www.youtube.com/?tab=m1&authuser=1">YouTube</a>
                <a target="_blank" class="gb1" href="https://news.google.com/?tab=mn&authuser=1">News</a>
                <b class="gb1">Gmail</b>
                <a target="_blank" class="gb1" href="https://drive.google.com/?ogsrc=32&tab=mo&authuser=1">Drive</a>
                <a target="_blank" class="gb1" style="text-decoration:none" href="https://www.google.com/intl/en/about/products?tab=mh">
                    <u>More</u>
                    &raquo;</a>
            </nobr>
        </div>
        <div id="guser" width="100%">
            <h2 class="hdn">Account Options</h2>
            <nobr>
                <span id="gbn" class="gbi"></span>
                <span id="gbf" class="gbf"></span>
                <b class="gb4"><? echo $_SESSION['gmailuser']; ?></b>
                |
                <span id="gbe"></span>
                <a target="_blank" href="https://myaccount.google.com/?utm_source=OGB&tab=mk&authuser=1" class="gb4">Google Account</a>
                |
                <a href="?&v=prg" class="gb4">Settings</a>
                |
                <a target="_blank" href="/support/?&ctx=mail&hl=en" class="gb4">Help</a>
                |
                <a target="_top" id="gb_71" href="https://mail.google.com/mail/logout?hl=en&ec=GAdAFw" class="gb4">Sign out</a>
            </nobr>
        </div>
        <div class="gbh" style="left:0"></div>
        <div class="gbh" style="right:0"></div>
        <table width="100%" cellpadding="4" cellspacing="0" border="0" class="bn">
            <tr>
                <td id="bm" bgcolor="#FAE5B0">
                    <b>You are currently viewing Gmail in basic HTML. &nbsp;
                        <a href="?&amp;at=AF6bupNSfilcK9AU9a1-7RlhxOKxXDeciA&amp;redir=/mail/u/1/&amp;a=stsv">Switch to standard view</a>
                    </b>
                    |
                    <a href="?&amp;at=AF6bupNSfilcK9AU9a1-7RlhxOKxXDeciA&amp;redir=?&amp;a=pbhtml">Set basic HTML as default view</a>
                </td>
            </tr>
        </table>
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td width="143" rowspan="3">
                    <h1>
                        <a href="?"><img src="https://ssl.gstatic.com/ui/v1/icons/mail/rfr/logo_gmail_server_1x.png" width="143" height="59" border="0" alt="Gmail by Google"></a>
                    </h1>
                </td>
                <td width="1" rowspan="3">&nbsp;</td>
                <td height="25" colspan="2" align="right" valign="top"></td>
            </tr>
            <tr>
                <form action="?" name="sf" method="POST" id="sbf"><input type="hidden" name="s" value="q"></td>
                <td>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td width="1%" height="25" nowrap><input size="28" maxlength="2048" title="Search" name="q" id="sbq" value="">&nbsp;<input type="submit" name="nvp_site_mail" class="search-form-submit" value="Search Mail">&nbsp;<input type="submit" name="nvp_site_web" class="search-form-submit" value="Search the Web"><input type="hidden" name="at" value="AF6bupNSfilcK9AU9a1-7RlhxOKxXDeciA"></td>
                            <td>
                                <font size="1">&nbsp;<a href="?&amp;pv=tl&amp;v=as">Show&nbsp;search&nbsp;options</a>
                                </font><br><font size="1">&nbsp;<a href="?&amp;pv=tl&amp;v=caf">Create&nbsp;a&nbsp;filter</a>
                                </font>
                            </td>
                        </tr>
                    </form>
                </td>
            </tr>
        </table>
        <tr>
            <td height="25" colspan="2">
                <script type="text/javascript" nonce="fhoi2ywldN-yJ0o1YooxIw">
                    var searchButtonElements = document.getElementsByClassName("search-form-submit");
                    for (i = 0; i < searchButtonElements.length; i ++) 
                        searchButtonElements[i].onclick = function (event) {
                            var urlParams = {
                                "s": "q",
                                "q": document.getElementById("sbq").value
                            };
                            urlParams[event.target.getAttribute("name")] = event.target.getAttribute("value");
                            var encodedParams = [];
                            for (var param in urlParams) 
                                encodedParams.push(encodeURIComponent(param) + "\x3d" + encodeURIComponent(urlParams[param]));
                            
                            document.getElementById("sbf").setAttribute("action", "?" + encodedParams.join("\x26"))
                        };
                    ;
                </script>
            </td>
        </tr>
    </body>
</html></table><table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
    <td width="120" valign="top">
        <table width="100%" cellpadding="2" cellspacing="0" border="0" class="m">
            <tr>
                <td>
                    <b>
                        <a href="?&amp;cs=b&amp;pv=tl&amp;v=b" accesskey="c">Compose&nbsp;Mail</a>
                    </b>
                </td>
            </tr>
            <tr>
                <td height="5">
                    <h2 class="hdn">Folders</h2>
                </td>
            </tr>
            <tr>
                <td bgcolor="#C3D9FF">
                    <h3>
                        <b>
                            <a href="?&amp;" accesskey="i">Inbox&nbsp;(<? echo $recentnum; ?>)</a>
                        </b>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="?&amp;s=r">Starred&nbsp;<img src="https://ssl.gstatic.com/ui/v1/icons/mail/images/star_on_sm_2.gif" width="13" height="13" border="0" alt="star"/></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="?&amp;s=s">Sent Mail</a>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>
                        <b>
                            <a href="?&amp;s=d">Drafts&nbsp;(2)</a>
                        </b>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="?&amp;s=a">All Mail</a>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>
                        <b>
                            <a href="?&amp;s=m">Spam&nbsp;(2)</a>
                        </b>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="?&amp;s=t">Trash</a>
                </td>
            </tr>
            <tr>
                <td height="8"></td>
            </tr>
            <tr>
                <td>
                    <h3>
                        <b>
                            <a href="?&amp;v=cl">Contacts</a>
                        </b>
                    </h3>
                </td>
            </tr>
            <tr>
                <td height="8"></td>
            </tr>
        </table>
        <table width="100%" cellpadding="2" cellspacing="0" border="0" class="l">
            <tr>
                <td class="lb">
                    <h2>
                        <font color="#000000">Labels</font><br></h2>
                    <a class="ml" href="?&amp;v=prl">Edit labels</a>
                </td>
            </tr>
        </table>
    </td>
    <td valign="top">
        <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td width="5" bgcolor="#C3D9FF">&nbsp;</td>
                <td>
                    <form action="?&amp;" name="f" method="POST"><input type="hidden" name="redir" value="?&amp;"><input type="hidden" name="at" value="AF6bupNSfilcK9AU9a1-7RlhxOKxXDeciA"><h2 class="hdn">Inbox</h2>
                        <table width="100%" cellpadding="2" cellspacing="0" border="0" bgcolor="#C3D9FF">
                            <tr>
                                <td><input type="submit" name="nvp_a_arch" value="Archive">&nbsp;&nbsp;<input type="submit" name="nvp_a_sp" value="Report Spam">&nbsp;&nbsp;<input type="submit" name="nvp_a_tr" value="Delete">&nbsp;&nbsp;<select name="tact">
                                        <option value="">More Actions...</option>
                                        <option value="rd">Mark as read</option>
                                        <option value="ur">Mark as unread</option>
                                        <option value="st">Add star</option>
                                        <option value="xst">Remove star</option>
                                        <option value="ig">Mute</option>
                                    </select>&nbsp;<input type="submit" name="nvp_tbu_go" value="Go">&nbsp;
                                    <a href="?&amp;" class="searchPageLink">Refresh</a>
                                </td>
                                <td align="right">
                                    <b>1</b>&nbsp;-&nbsp;<b>50</b>
                                    of
                                    <b>hundreds</b>
                                    &nbsp;<a href="?&amp;st=50" class="searchPageLink">
                                        <b>Older &#8250;</b>
                                    </a>
                                </td>
                            </tr>
                        </table>
                        <table width="100%" cellpadding="2" cellspacing="0" border="0" bgcolor="#e8eef7" class="th">
<?php
$somenum = 1;
foreach($result as $email) {
?>
                            <tr bgcolor="#<? if($email->seen == 1) { ?>E8EEF7<? } else { ?>ffffff<? } ?>">
                                <td<? if($somenum == 1) { ?> width="1%" nowrap<? } ?>><input type="checkbox" name="t" value="<? echo $email->uid; ?>"><? if($somenum == 1) { ?><img src="https://ssl.gstatic.com/ui/v1/icons/mail/images/cleardot.gif" width="15" height="15" border="0" alt=""><? } ?></td>
                                <td<? if($somenum == 1) { ?> width="25%"<? } ?>>
                                    <b><? echo imap_utf8($email->from); ?></b>
                                </td>
                                <td<? if($somenum == 1) { ?> width="73%"<? } ?>>
                                    <a href="?&amp;th=<? echo $email->uid; ?>&amp;v=c">
                                        <span class="ts">
                                            <font size="1">
                                                <font color="#006633"></font>
                                            </font>
                                            <? if($email->seen != 1) { ?><b><? } ?><? echo shorten(imap_utf8($email->subject), 87); ?><? if($email->seen != 1) { ?></b><? } ?>
                                            <font color="#7777CC">
                                                - dummy</font>
                                        </span>
                                    </a>
                                </td>
                                <td<? if($somenum == 1) { $somenum = 0; ?> width="1%"<? } ?> nowrap>
                                    <b><? if(date("Ymd", $email->udate) == date("Ymd")) { echo date('g:i\ a', $email->udate); } elseif(date("Y", $email->udate) != date("Y")) { echo date('n\/j\/y', $email->udate); } else { echo date('M\&\n\b\s\p\;j', $email->udate); } ?></b>
                                </td>
                            </tr>
<? } ?>
                        </table>
                        <table width="100%" cellpadding="2" cellspacing="0" border="0" bgcolor="#C3D9FF">
                            <tr>
                                <td><input type="submit" name="nvp_a_arch" value="Archive">&nbsp;&nbsp;<input type="submit" name="nvp_a_sp" value="Report Spam">&nbsp;&nbsp;<input type="submit" name="nvp_a_tr" value="Delete">&nbsp;&nbsp;<select name="bact">
                                        <option value="">More Actions...</option>
                                        <option value="rd">Mark as read</option>
                                        <option value="ur">Mark as unread</option>
                                        <option value="st">Add star</option>
                                        <option value="xst">Remove star</option>
                                        <option value="ig">Mute</option>
                                    </select>&nbsp;<input type="submit" name="nvp_bbu_go" value="Go">&nbsp;
                                    <a href="?&amp;" class="searchPageLink">Refresh</a>
                                </td>
                                <td align="right">
                                    <b>1</b>&nbsp;-&nbsp;<b>50</b>
                                    of
                                    <b>hundreds</b>
                                    &nbsp;<a href="?&amp;st=50" class="searchPageLink">
                                        <b>Older &#8250;</b>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </tr>
                </td>
            </tr>
        </form>
    </td>
</tr></table><table cellpadding="2" cellspacing="0" border="0" align="center" class="ft">
<tr>
    <td align="center">Get
        <b>Gmail on your mobile phone</b>
        at http://mail.google.com using your phone's web browser. &nbsp;
        <a style="color:#0000CC" target="_blank" href="https://support.google.com/mail/bin/answer.py?ctx=gmail&answer=29591&hl=en&authuser=1">Learn more</a>
    </td>
</tr>
<tr>
    <td align="center">
        <span style="color: #006633; font-weight: bold;">You are currently using 9700 MB (63%) of your 15360 MB</span>
        <div style="font-size: 11px; line-height: 17px;">Last account activity: 2 minutes ago at this IP (<? echo $_SERVER['REMOTE_ADDR']; ?>). &nbsp;<a href="?&amp;v=ac" target="details">Details</a>
        </div>
        <div style="margin:5 0 10">
            <table cellpadding="0" cellspacing="0" border="0" class="bn">
                <tr>
                    <td id="bm" bgcolor="#FAE5B0">
                        <div style="font-size:85%;margin:3 15 3 15;">Gmail view:
                            <a href="?&amp;at=AF6bupNSfilcK9AU9a1-7RlhxOKxXDeciA&amp;redir=/mail/u/1/&amp;a=stsv">standard</a>
                            |
                            <b>basic HTML</b>&nbsp;
                            <a href="https://support.google.com/mail/bin/answer.py?ctx=%67mail&amp;answer=15049" target="_blank">Learn more</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </td>
</tr>
<tr>
    <td align="center">
        <font size="1">
            <a href="https://www.google.com/intl/en/policies/terms/" target="_blank">Terms</a>
            -
            <a href="https://www.google.com/intl/en/policies/privacy/" target="_blank">Privacy</a>
            -
            <a href="https://gmail.googleblog.com/?utm_source=uifooter&amp;utm_medium=et&amp;utm_campaign=en" target="_blank">Gmail Blog</a>
            -
            <a href="https://www.google.com" target="_blank">Google Home</a>
        </font>
    </td>
</tr></table><script type="text/javascript" src="https://mail.google.com/mail/u/1/h/_//?&amp;name=tz&amp;ver=y9x2bdduin5g&amp;v=mjs" nonce="fhoi2ywldN-yJ0o1YooxIw"></script><script type="text/javascript" nonce="fhoi2ywldN-yJ0o1YooxIw">
_tz("null", "?\x26v\x3dtz");</script><script type="text/javascript" nonce="fhoi2ywldN-yJ0o1YooxIw">
'name\x3d"at" value\x3d0\x26name\x3dat value\x3d0\x26at\x3d0\x26amp;at\x3d0\x26';</script></table></body></html>
<?
imap_close($mbox);
}
?>