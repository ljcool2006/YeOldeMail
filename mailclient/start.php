<?php
$hostname = "your.domain.here";
session_start();

if (!isset($_SESSION['gmailuser'])) {

header('Location: /accounts/ServiceLogin?service=mail&passive=true&rm=false&continue=http%3A%2F%2F'. $hostname .'%2Fmail%2F%3Fui%3Dhtml%26zy%3Dl&ltmpl=wsad&ltmplcache=2');

die();

}

if(isset($_GET['s'])) {
switch($_GET['s']) {
	case "r":
	$gmailtitle = "Starred";
	$gmailmbox = "{imap.gmail.com:993/imap/ssl/novalidate-cert/readonly}[Gmail]/Starred";
	break;
	default:
	$gmailtitle = "Inbox";
	$gmailmbox = "{imap.gmail.com:993/imap/ssl/novalidate-cert/readonly}INBOX";
	break;
}
} else {
$gmailtitle = "Inbox";
$gmailmbox = "{imap.gmail.com:993/imap/ssl/novalidate-cert/readonly}INBOX";
}

$mbox = imap_open($gmailmbox, $_SESSION['gmailuser'], $_SESSION['gmailpass'])

     //or die("can't connect: " . imap_last_error());
	 or require "../errors/temperror.php";

$mboxunread = imap_open("{imap.gmail.com:993/imap/ssl/novalidate-cert/readonly}", $_SESSION['gmailuser'], $_SESSION['gmailpass'])

     //or die("can't connect: " . imap_last_error());
	 or require "../errors/temperror.php";


//$recentnum = imap_num_recent($mbox);
$recentnum = imap_status($mboxunread, "{imap.gmail.com:993/imap/ssl/novalidate-cert/readonly}INBOX", SA_ALL);
$recentnum = $recentnum->unseen;

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
function randomId() {

    $randomid = base_convert(bin2hex(random_bytes(8)), 16, 36);

    return $randomid;

}
?>
<html lang="en">

    <pre style="font-size: 0;display: none;visibility: hidden;">





</pre>

    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Gmail - <?= $gmailtitle; ?></title><link rel="canonical" href="https://<?= $hostname; ?>/mail/"/><link rel="shortcut icon" href="https://ssl.gstatic.com/ui/v1/icons/mail/rfr/gmail.ico" type="image/x-icon"><link rel="stylesheet" type="text/css" href="https://<?= $hostname; ?>/mail/u/0/h/_//?&amp;name=c&amp;ver=6wrl3yi4mm9e&amp;v=ss" nonce="boEx14cBlaMkkZGCxMW5kA"><style type="text/css" nonce="boEx14cBlaMkkZGCxMW5kA">

            @import url("https://<?= $hostname; ?>/mail/u/0/h/_//?&name=a&ver=1sthyqjwgl8hj&v=ss");

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

        </style><base href="/mail/u/0/h/<?= randomId(); ?>/"><script type="text/javascript" nonce="fhoi2ywldN-yJ0o1YooxIw">

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

                <a target="_top" id="gb_71" href="https://<?= $hostname; ?>/mail/logout?hl=en&ec=GAdAFw" class="gb4">Sign out</a>

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

                                <font size="1">&nbsp;<a href="?&amp;pv=tl&amp;v=as<? if(isset($_GET['s'])) { ?>&amp;s=<?= htmlspecialchars($_GET['s']); ?><? } ?>">Show&nbsp;search&nbsp;options</a>

                                </font><br><font size="1">&nbsp;<a href="?&amp;pv=tl&amp;v=caf<? if(isset($_GET['s'])) { ?>&amp;s=<?= htmlspecialchars($_GET['s']); ?><? } ?>">Create&nbsp;a&nbsp;filter</a>

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

                        <a href="?&amp;cs=b&amp;pv=tl&amp;v=b<? if(isset($_GET['s'])) { ?>&amp;s=<?= htmlspecialchars($_GET['s']); ?><? } ?>" accesskey="c">Compose&nbsp;Mail</a>

                    </b>

                </td>

            </tr>

            <tr>

                <td height="5">

                    <h2 class="hdn">Folders</h2>

                </td>

            </tr>

            <tr>

                <td<? if(!isset($_GET['s'])) { ?> bgcolor="#C3D9FF"<? } ?>>

                    <h3>

                        <b>

                            <a href="?&amp;" accesskey="i">Inbox&nbsp;(<? echo $recentnum; ?>)</a>

                        </b>

                    </h3>

                </td>

            </tr>

            <tr>

                <td<? if(isset($_GET['s']) && $_GET['s'] == "r") { ?> bgcolor="#C3D9FF"><b<? } ?>>

                    <a href="?&amp;s=r">Starred&nbsp;<img src="https://ssl.gstatic.com/ui/v1/icons/mail/images/star_on_sm_2.gif" width="13" height="13" border="0" alt="star"/></a>

                </<? if(isset($_GET['s']) && $_GET['s'] == "r") { ?>b></<? } ?>td>

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