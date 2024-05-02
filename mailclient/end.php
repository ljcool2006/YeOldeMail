</tr><? if(isset($_GET['v']) && $_GET['v'] == "b") { ?></form><? } ?></table><table cellpadding="2" cellspacing="0" border="0" align="center" class="ft">

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

</tr></table><script type="text/javascript" src="https://<?= $hostname; ?>/mail/u/0/h/_//?&amp;name=tz&amp;ver=y9x2bdduin5g&amp;v=mjs" nonce="fhoi2ywldN-yJ0o1YooxIw"></script><script type="text/javascript" nonce="fhoi2ywldN-yJ0o1YooxIw">

_tz("null", "?\x26v\x3dtz");</script><script type="text/javascript" nonce="fhoi2ywldN-yJ0o1YooxIw">

'name\x3d"at" value\x3d0\x26name\x3dat value\x3d0\x26at\x3d0\x26amp;at\x3d0\x26';</script></table>
<? if(isset($_GET['v']) && $_GET['v'] == "b") { ?>
<script type="text/javascript" src="https://<?= $hostname; ?>/mail/u/0/h/_//?&amp;name=ac&amp;ver=1u2en48ga1uxm&amp;v=mjs" ></script><script type="text/javascript" >
   function onForm(){bp=true}var bp=false;var old="";document.f.to.focus();_ac_init("?\x26v\x3dsugr");old=document.f.body.value;for(var i=0,btn;btn=document.f.nvp_bu_send[i];i++)btn.onclick=onForm;for(var i=0,btn;btn=document.f.nvp_bu_sd[i];i++)btn.onclick=onForm;document.f.nvp_bu_amf.onclick=onForm;window.onbeforeunload=function(){if(!bp&&document.f.body.value!=old)return"Your draft has not been saved or sent."};
</script>
<? } ?>
</body></html>

<?
imap_close($mbox);
imap_close($mboxunread);
?>