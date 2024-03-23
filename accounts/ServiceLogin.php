<?php
if (isset($_GET['service']) && $_GET['service'] == "ig") {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Personalize Your Homepage</title>

<style type=text/css>
<!--
body,td,div,p,a,font,span {font-family: arial,sans-serif}
body {margin-top:2}

.c {width: 4; height: 4}

.bubble {background-color:#C3D9FF}

.tl {padding: 0; width: 4; text-align: left; vertical-align: top}
.tr {padding: 0; width: 4; text-align: right; vertical-align: top}
.bl {padding: 0; width: 4; text-align: left; vertical-align: bottom}
.br {padding: 0; width: 4; text-align: right; vertical-align: bottom}

.caption { font-weight: bold; COLOR: #000; white-space:nowrap; background:#eeeeee;text-align:center; margin-bottom:5}

.form-noindent {background-color: #ffffff; border: #C3D9FF 1px solid}

.footer { padding-right: 5px;
          padding-left: 5px;
          padding-bottom: 5px;
          padding-top: 5px;
          font-size: 83%;
          border-top: #ffffff 1px solid;
          border-bottom: #ffffff 1px solid;
          background: #e5ecf9;
          text-align: center;
          font-family: arial,sans-serif;
}
A:link {color:#0000cc; }
A:visited { color:#551a8b; }
A:active { color:#ff0000; }
// -->
</style>

<script type=text/javascript>
<!--
function newacct() {
  o = document.location + "";
  n = o.replace("/ServiceLogin?", "/NewAccount?");
  top.location = n;
}
// -->
</script>
</head>

<body bgcolor=#ffffff>
<table cellpadding="2" width="100%" cellspacing="0" border="0">
  <tr>
    <td colspan="2"><img width="1" alt="" height="2"></td>
  </tr>
  <tr>
    <td width="1%" valign="top"> <a href="https://www.google.com"> <img src=google_sm.gif border=0 alt=Google align=left height=59 width=143/> </a> </td>
    <td valign="top"> <table cellpadding="0" width="100%" cellspacing="0" border="0">
        <tr>
          <td colspan="2"><img width="1" alt="" height="15"></td>
        </tr>
        <tr bgcolor="#3366cc">
          <td><img width="1" alt="" height="1"></td>
        </tr>
        <tr bgcolor="#e5ecf9">
          <td style="padding-left: 4px; padding-bottom:3px; padding-top:2px; font-family:arial,sans-serif;"> <b>Personalize Your Homepage</b></td>
        </tr>
        <tr>
          <td colspan="2"><img width="1" alt="" height="5"></td>
        </tr>
      </table></td>
  </tr>
</table>
<p>

<table width=94% align=center cellpadding=5 cellspacing=1>
  <tr>
    <td valign=top>
    <b>See information you care about on your Google homepage.</b>
    <td valign=top>&nbsp;
</table>

<table width=94% align=center cellpadding=5 cellspacing=1>
  <tr>
    <td width=75% valign=top>
      <p>
      <font size="-1">
      Your personalized homepage brings together Google functionality and
      content from across the web, on a single page:
      </p>
      <ul>
        <li>
          Preview latest <b>Gmail</b> messages
        </li>
        <li style="padding-top: 5px;">
          See headlines from <b>Google News</b> and other top news sources
        </li>
        <li style="padding-top: 5px;">
          Get <b>weather</b> forecasts, <b>stock</b> quotes, and
          <b>movie</b> showtimes
        </li>
        <li style="padding-top: 5px;">
           Select from a variety of popular <b>feeds</b>
        </li>
        <li style="padding-top: 5px;">
           <b>Drag and drop</b> the sections to rearrange the page
        </li>
      </ul>
      </font>
    </td>

    <td valign=top>
      <!-- LOGIN BOX -->
      <table class=form-noindent cellspacing=3 cellpadding=5 width=100%
             bgcolor="#ffffff">
      <tr>
         <td bgcolor="#e8eefa" valign="top" style="text-align:center"
             nowrap="nowrap">
         <div id="login">
                                      <script type="text/javascript"><!--



function gaia_onLoginSubmit() {
  if (window.gaiacb_onLoginSubmit) {
    return gaiacb_onLoginSubmit();
  } else {
    return true;
  }
}

function gaia_setFocus() {
  var f = null;
  if (document.getElementById) { 
    f = document.getElementById("gaia_loginform");
  } else if (window.gaia_loginform) { 
    f = window.gaia_loginform;
  } 
  if (f) {
    if (f.Email.value == null || f.Email.value == "") { 
      f.Email.focus();
    } else {
      f.Passwd.focus();
    } 
  }
}

//--> </script> <style type="text/css"><!--

      div.errormsg { color: red; font-size: smaller; font-family:arial,sans-serif; }
      font.errormsg { color: red; font-size: smaller; font-family:arial,sans-serif; }  
  //--> </style>  <style type="text/css"><!--

.gaia.le.lbl { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.fpwd { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.chusr { font-family: Arial, Helvetica, sans-serif; font-size: 70%; }
.gaia.le.val { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.button { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.rem { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }

   
  .gaia.captchahtml.desc { font-family: arial, sans-serif; font-size: smaller; } 
  .gaia.captchahtml.cmt { font-family: arial, sans-serif; font-size: smaller; font-style: italic; }
  
//--> </style>       <!-- ServiceLoginElements.nui=logo -->  <div style="background:#E8EEFA" id="gaia_loginbox" class="body"> <form action="ServiceLoginAuth" onsubmit="return(gaia_onLoginSubmit());" id="gaia_loginform" method="post">  <input type="hidden" name="ltmpl" value="default">   <table cellpadding="1" cellspacing="0" align="center" border="0" id="gaia_table"> <tr> <td colspan="2" align="center"> <font size="-1">  Sign in to  Personalized Homepage  with your  </font> <table> <tr><td valign="top"> <img src="google_transparent.gif" alt="Google">  </td> <td valign="middle"><font size="+0"><b>Account</b></font></td></tr> </table> </td> </tr>                    <tr> <td colspan="2" align="center"> <div class="errorbox-good">  </div> </td> </tr> <tr> <td nowrap> <div align="right"> <span class="gaia le lbl"> Email: </span> </div> </td> <td>         <input type="hidden" name="continue" value="http://www.google.com/ig">    <input type="hidden" name="followup" value="http://www.google.com/ig">    <input type="hidden" name="service" value="ig">      <input type="hidden" name="nui" value="1">                          <input type="hidden" name="ltmpl" value="default">    <input type="hidden" name="hl" value="en">                                     <input type="text" name="Email" value="" class="gaia le val" id="Email" size="18">  </td> </tr> <tr> <td></td> <td align="left">  </td> </tr> <tr> <td align="right"> <span class="gaia le lbl"> Password: </span> </td> <td> <input type="password" name="Passwd" autocomplete="off" class="gaia le val" id="Passwd" size="18"> </td> </tr> <tr> <td></td> <td align="left">  </td> </tr>   <tr> <td align="right" valign="top"> <input type="checkbox" name="PersistentCookie" value="yes" checked>&nbsp; </td> <td> <span class="gaia le rem"> Remember me on this computer. </span> </td> </tr>                     <!-- LoginElementsSubmitButton.nui=default -->   <tr> <td></td> <td align="left"> <input type="submit" name="null" value="Sign in" class="gaia le button"> </td> </tr>     <tr id="ga-fprow"> <td colspan="2" align="center" height="33.0em" valign="bottom" nowrap class="gaia le fpwd"> <a href="ForgotPasswd?continue=http%3A%2F%2Fwww.google.com%2Fig&amp;followup=http%3A%2F%2Fwww.google.com%2Fig&amp;service=ig&amp;hl=en" target="_top">  Forgot your password?  </a> </td> </tr>        </table> </form> </div>    
         </div>
         </td>
      </tr>
      </table>
      <!-- END LOGIN BOX -->

      <br>
      <table class=form-noindent cellpadding=0 width=100% bgcolor=#ffffff>
           <tr bgcolor=#e8eefa>
             <td valign=top> <div align=center>
               <p><font size=-1>
               <b>Not using Gmail or other Google Account services?</b><br>
               <a href="javascript:newacct()"> <b>Create an account now</b> </a>
               </font></p>
             </div>
      </table>

  </tr>
</table>
<br>

<br>
<div align="center" class="footer">
    <font size=-1 color=#666666>
      &copy;2005 Google -
      <a href="http://groups-beta.google.com/group/Google-Labs-Fusion-Personalized-Homepage?hl=en">Discuss</a> -
      <a href="http://www.google.com/help/privacy_fusionph.html">Privacy&nbsp;Policy</a> -
      <a href="http://www.google.com/help/faq_fusionph.html">Help</a>
    </font>
</div>

</body>
</html>

<?php
} elseif (isset($_GET['service']) && $_GET['service'] == "mail") {
?>
<html>

<script type=text/javascript>
<!--
  var start_time = (new Date()).getTime();
// -->
</script>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Welcome to Ye Olde Mail</title>

<style type=text/css>
<!--
body,td,div,p,a,font,span {font-family: arial,sans-serif}
body {margin-top:2}

.c {width: 4; height: 4}

.bubble {background-color:#C3D9FF}

.tl {padding: 0; width: 4; text-align: left; vertical-align: top}
.tr {padding: 0; width: 4; text-align: right; vertical-align: top}
.bl {padding: 0; width: 4; text-align: left; vertical-align: bottom}
.br {padding: 0; width: 4; text-align: right; vertical-align: bottom}

.caption {color:#000000; white-space:nowrap; background:#E8EEFA; text-align:center}

.form-noindent {background-color: #ffffff; border: #C3D9FF 1px solid}

// -->
</style>
<script type=text/javascript src="/mail?view=page&name=browser"></script>
<script type=text/javascript>
<!--

if (top.location != self.location) {
  top.location = self.location.href;
}

function SetGmailCookie(name, value) {
  document.cookie = name + "=" + value + ";path=/";
}

function lg() {
  var now = (new Date()).getTime();

  var cookie = "T" + start_time + "/" + start_time + "/" + now;
  SetGmailCookie("GMAIL_LOGIN", cookie);
}

function gaiacb_onLoginSubmit() {
  lg();
  if (!fixed) {
    FixForm();
  }
  return true;
}

function StripParam(url, param) {
  var start = url.indexOf(param);
  if (start == -1) return url;
  var end = start + param.length;

  var charBefore = url.charAt(start-1);
  if (charBefore != '?' && charBefore != '&') return url;

  var charAfter = (url.length >= end+1) ? url.charAt(end) : '';
  if (charAfter != '' && charAfter != '&') return url;

  if (charBefore == '&') {
    --start;
  } else if (charAfter == '&') {
    ++end;
  }
  return url.substring(0, start) + url.substring(end);
}

var fixed = 0;

function FixForm() {
  if (is_browser_supported) {
    var form = el("gaia_loginform");
    if (form && form["continue"]) {
      var url = form["continue"].value;
      url = StripParam(url, "ui=html");
      url = StripParam(url, "zy=l");
      form["continue"].value = url;
    }
  }
  fixed = 1;
}

function el(id) {
  if (document.getElementById) {
    return document.getElementById(id);
  } else if (window[id]) {
    return window[id];
  }
  return null;
}

var CP = [
 [ 1125558000000, 2550 ],
 [ 1128150000000, 2650 ],
 [ 1136102400000, 2680 ]
];

var quota;

var ONE_PX = "/mail/images/c.gif?t=" +
             (new Date()).getTime();

function LogRoundtripTime() {
  var img = new Image();
  var start = (new Date()).getTime();
  img.onload = GetRoundtripTimeFunction(start);
  img.src = ONE_PX;
}

function GetRoundtripTimeFunction(start) {
  return function() {
    var end = (new Date()).getTime();
    SetGmailCookie("GMAIL_RTT", (end - start));
  }
}

function MaybePingUser() {
  var f = el("gaia_loginform");
  if (f.Email.value) {
    new Image().src = 'https://mail.google.com/mail?gxlu=' + 
                      encodeURIComponent(f.Email.value) + 
                      '&zx=' + (new Date().getTime());
  }
}

function OnLoad() {
  gaia_setFocus();

  MaybePingUser();
  el("gaia_loginform").Passwd.onfocus = MaybePingUser;

  LogRoundtripTime();
  if (!quota) {
    quota = el("quota");
    updateQuota();
  }
}

function updateQuota() { 
  if (!quota) {
    return;
  }
 
  var now = (new Date()).getTime(); 
  var i;
  for (i = 0; i < CP.length; i++) {
    if (now < CP[i][0]) {
      break;
    }
  }
  if (i == 0) {
    setTimeout(updateQuota, 1000); 
  } else if (i == CP.length) {
    quota.innerHTML = CP[i - 1][1];
  } else {
    var ts = CP[i - 1][0];
    var bs = CP[i - 1][1];
    quota.innerHTML = format(((now-ts) / (CP[i][0]-ts) * (CP[i][1]-bs)) + bs); 
    setTimeout(updateQuota, 1000); 
  } 
} 
 
var PAD = '.000000'; 
 
function format(num) { 
  var str = String(num); 
  var dot = str.indexOf('.'); 
  if (dot < 0) { 
     return str + PAD; 
  } if (PAD.length > (str.length - dot)) { 
    return str + PAD.substring(str.length - dot); 
  } else { 
    return str.substring(0, dot + PAD.length); 
  } 
} 

// -->
</script>

</head>
<body bgcolor=#ffffff link=#0000FF vlink=#0000FF onload="OnLoad()">

<table width=95% border=0 align=center cellpadding=0 cellspacing=0>
  <tr valign=top>
    <td width=1%><img src=/mail/help/images/logo.gif border=0 width=143 height=59 alt="Ye Olde Mail" align=left vspace=10/></td>

    <td width=99% bgcolor=#ffffff valign=top>
      <table width=100% cellpadding=1>
        <tr valign=bottom>
          <td><div align=right>&nbsp;</div></td>
        </tr>
        <tr>
          <td nowrap=nowrap>
            <table width=100% align=center cellpadding=0 cellspacing=0 bgcolor=#C3D9FF style=margin-bottom:5>
              <tr>
                <td class="bubble tl" align=left valign=top><img src=/mail/images/corner_tl.gif class=c alt="" /></td>
                <td class=bubble rowspan=2 style="font-family:arial;text-align:left;font-weight:bold;padding:3 0"><b>Welcome to Ye Olde Mail</b></td>
                <td class="bubble tr" align=right valign=top><img src=/mail/images/corner_tr.gif class=c alt="" /></td>
              </tr>
              <tr>
                <td class="bubble bl" align=left valign=bottom><img src=/mail/images/corner_bl.gif class=c alt="" /></td>
                <td class="bubble br" align=right valign=bottom><img src=/mail/images/corner_br.gif class=c alt="" /></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<br>

<table width=94% align=center cellpadding=5 cellspacing=1>

  <tr>
    <td valign=top><b>A classic approach to Gmail.</b>
    <td valign=top>&nbsp;


</table>

<!-- the table is split here into two tables because IE's autocomplete menu
for the username field appears too low when there are table rows (in any
ancestor table) above the iframe -->

<table width=94% align=center cellpadding=5 cellspacing=1>

  <tr>
      <td width=75% valign=top>
	    <p><font size=-1>Ye Olde Mail is a project in an old kind of webmail, built on the idea that you should never have to use bloated new web UI and you should always be able to find the message you want. The key features are: </font></p>
	    <ul>
          <li>
            <p><font size=-1><b>Search, don't sort.</b><br>
             Use Ye Olde Mail search to <b>find the exact message</b> you want, no matter when it was sent or received.</font></p>
          </li>
        </ul>
        <ul>
          <li>
            <p><font size=-1><b>Don't throw anything away.</b><br>
            Over <span id=quota>2000</span> megabytes (and counting) of free storage so you'll never need to delete another message.</font></p>
          </li>
        </ul>
<script>
<!--
quota = el("quota");
updateQuota();
// -->
</script>
        <ul>
          <li>
            <p><font size=-1><b>Keep it all in context.</b><br>
            Each message is grouped with all its replies and displayed as a conversation.</font></p>
          </li>
        </ul>
		 <ul>
          <li>
            <p><font size=-1><b>No pop-up ads. No untargeted banners.</b><br>
            You see only <a href=http://mail.google.com/mail/help/about.html#ads>relevant text ads</a> and links to related web pages of interest.</font></p>
          </li>
        </ul>

      
      <td valign=top>

        <!-- login box -->
        <table class=form-noindent cellspacing=3 cellpadding=5 width=100% bgcolor=#E8EEFA>
          <tr bgcolor=#E8EEFA>
            <td valign=top style=text-align:center nowrap=nowrap>
              <div class=caption>
              <font size="-1">Sign in to Ye Olde Mail with your</font>
              <center><table><tr>
              <td valign="top"><img src="google_transparent.gif" alt="Google"></td>
              <td valign="middle"><font size="+0"><b>Account</b></font></td>
              </tr></table></center>
              </div>

<div id=login>
                            <script type="text/javascript"><!--
  


function gaia_onLoginSubmit() {
  if (window.gaiacb_onLoginSubmit) {
    return gaiacb_onLoginSubmit();
  } else {
    return true;
  }
}

function gaia_setFocus() {
  var f = null;
  if (document.getElementById) { 
    f = document.getElementById("gaia_loginform");
  } else if (window.gaia_loginform) { 
    f = window.gaia_loginform;
  } 
  if (f) {
    if (f.Email.value == null || f.Email.value == "") { 
      f.Email.focus();
    } else {
      f.Passwd.focus();
    } 
  }
}

//--> </script> <style type="text/css"><!--

      div.errormsg { color: red; font-size: smaller; font-family:arial,sans-serif; }
      font.errormsg { color: red; font-size: smaller; font-family:arial,sans-serif; }  
  //--> </style>  <style type="text/css"><!--

.gaia.le.lbl { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.fpwd { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.chusr { font-family: Arial, Helvetica, sans-serif; font-size: 70%; }
.gaia.le.val { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.button { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.rem { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }

   
  .gaia.captchahtml.desc { font-family: arial, sans-serif; font-size: smaller; } 
  .gaia.captchahtml.cmt { font-family: arial, sans-serif; font-size: smaller; font-style: italic; }
  
//--> </style>       <!-- ServiceLoginElements.nui=default -->  <div id="gaia_loginbox" class="body"> <form action="ServiceLoginAuth" onsubmit="return(gaia_onLoginSubmit());" id="gaia_loginform" method="post">  <input type="hidden" name="ltmpl" value="wsad">   <input type="hidden" name="ltmplcache" value="2">  <table cellpadding="1" cellspacing="0" align="center" border="0" id="gaia_table">                    <tr> <td colspan="2" align="center"> <div class="errorbox-good">  </div> </td> </tr> <tr> <td nowrap> <div align="right"> <span class="gaia le lbl"> Username: </span> </div> </td> <td>         <input type="hidden" name="continue" value="http://mail.google.com/mail?ui=html&amp;zy=l">      <input type="hidden" name="service" value="mail">                    <input type="hidden" name="rm" value="false">            <input type="hidden" name="ltmpl" value="wsad">                                     <input type="text" name="Email" value="" class="gaia le val" id="Email" size="18">  </td> </tr> <tr> <td></td> <td align="left">  </td> </tr> <tr> <td align="right"> <span class="gaia le lbl"> Password: </span> </td> <td> <input type="password" name="Passwd" autocomplete="off" class="gaia le val" id="Passwd" size="18"> </td> </tr> <tr> <td></td> <td align="left">  </td> </tr>   <tr> <td align="right" valign="top"> <input type="checkbox" name="PersistentCookie" value="yes">&nbsp; </td> <td> <span class="gaia le rem"> Remember me on this computer. </span> </td> </tr>                     <!-- LoginElementsSubmitButton.nui=default -->   <tr> <td></td> <td align="left"> <input type="submit" name="null" value="Sign in" class="gaia le button"> </td> </tr>     <tr id="ga-fprow"> <td colspan="2" align="center" height="33.0em" valign="bottom" nowrap class="gaia le fpwd"> <a href="ForgotPasswd?continue=http%3A%2F%2Fmail.google.com%2Fmail%3Fui%3Dhtml%26zy%3Dl&amp;service=mail" target="_top">  Forgot your password?  </a> </td> </tr>        </table> </form> </div>    
</div>

<script>
<!--
FixForm();
// -->
</script>

        </table>
        <!-- end login box -->
        <br>

        <!-- links box (below login box) -->
        <table class=form-noindent cellpadding=0 width=100% bgcolor=#E8EEFA>
          <tr bgcolor=#E8EEFA>
            <td valign=top><div align=center style="margin:10 0">
              <font size=+0>
                <b><a href="https://www.google.com/accounts/SmsMailSignup1" style="white-space:nowrap">
                Sign up for Gmail<br>
                using your mobile phone</a></b>
                <br><br>
                <font size="-1">
                  <a href="http://mail.google.com/mail/help/about.html">About Ye Olde Mail</a
                  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://mail.google.com/mail/help/about_whatsnew.html">New features!</a>
                </font>
                <br>
              </font>
            </div>
        </table>
        <!-- end links box (below login box) -->


</table>
<br>
<table width=95% align=center cellpadding=3 cellspacing=0 bgcolor=#C3D9FF style=margin-bottom:5>
  <tr>
    <td class="bubble tl" align=left valign=top><img src=/mail/images/corner_tl.gif class=c alt=""/></td>
    <td class=bubble rowspan=2 style=text-align:left>
    <div align=center>
    <font size=-1 color=#666666>From the Ye Olde Mail contributors. Gmail is &copy; Google. Google does not endorse and is not affiliated with this project. - <a href=http://mail.google.com/mail/help/privacy.html>Privacy Policy</a> - <a href=http://mail.google.com/mail/help/program_policies.html>Program Policies</a> - <a href=http://mail.google.com/mail/help/terms_of_use.html>Terms of Use </a>
    </font>
    </div>
    </td>
    <td class="bubble tr" align=right valign=top><img src=/mail/images/corner_tr.gif class=c alt="" /></td>
  </tr>
  <tr>
    <td class="bubble bl" align=left valign=bottom><img src=/mail/images/corner_bl.gif class=c alt="" /></td>
    <td class="bubble br" align=right valign=bottom><img src=/mail/images/corner_br.gif class=c alt="" /></td>
  </tr>
</table>

</body>
</html>


<?php
} else {
require "Login.php";
}
?>