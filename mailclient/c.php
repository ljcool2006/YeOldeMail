<?php
require "start.php";

//https://stackoverflow.com/a/25507756
function getBody($uid, $imap)
{
    $body = get_part($imap, $uid, "TEXT/HTML");
    // if HTML body is empty, try getting text body
    if ($body == "") {
        $body = get_part($imap, $uid, "TEXT/PLAIN");
    }
    return $body;
}

function get_part($imap, $uid, $mimetype, $structure = false, $partNumber = false)
{
    if (!$structure) {
        $structure = imap_fetchstructure($imap, $uid, FT_UID);
    }
    if ($structure) {
        if ($mimetype == get_mime_type($structure)) {
            if (!$partNumber) {
                $partNumber = 1;
            }
            $text = imap_fetchbody($imap, $uid, $partNumber, FT_UID);
            switch ($structure->encoding) {
                case 3:
                    return imap_base64($text);
                case 4:
                    return imap_qprint($text);
                default:
                    return $text;
            }
        }

        // multipart
        if ($structure->type == 1) {
            foreach ($structure->parts as $index => $subStruct) {
                $prefix = "";
                if ($partNumber) {
                    $prefix = $partNumber . ".";
                }
                $data = get_part($imap, $uid, $mimetype, $subStruct, $prefix . ($index + 1));
                if ($data) {
                    return $data;
                }
            }
        }
    }
    return false;
}

function get_mime_type($structure)
{
    $primaryMimetype = ["TEXT", "MULTIPART", "MESSAGE", "APPLICATION", "AUDIO", "IMAGE", "VIDEO", "OTHER"];

    if ($structure->subtype) {
        return $primaryMimetype[(int)$structure->type] . "/" . $structure->subtype;
    }
    return "TEXT/PLAIN";
}

?>
               <td valign="top">
                  <table width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody>
                        <tr>
                           <td width="5" bgcolor="#C3D9FF">&nbsp;</td>
                           <td>
                              <table width="100%" cellpadding="2" cellspacing="0" border="0" bgcolor="#C3D9FF">
                                 <form action="?&amp;" name="f" method="POST"></form>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <input type="hidden" name="at" value="AF6bupOkehXG3JxZKjgELVuO2tUY6OoM-Q"><input type="hidden" name="t" value="<?= htmlspecialchars($_GET['th']); ?>"><input type="hidden" name="cat" value=""><b><a href="?&amp;" class="searchPageLink">« Back to Inbox</a></b>&nbsp;&nbsp; <? require "actions.php"; ?>
                                          </select>
                                          &nbsp;<input type="submit" name="nvp_tbu_go" value="Go">
                                       </td>
                                       <td align="right"><a href="?&amp;th=<?= htmlspecialchars($_GET['th']); ?>&amp;prev=1&amp;v=c"><b>‹&nbsp;Newer</b></a> <b>3</b> of <b>hundreds</b> <a href="?&amp;th=<?= htmlspecialchars($_GET['th']); ?>&amp;next=1&amp;v=c"><b>Older&nbsp;›</b></a></td>
                                    </tr>
                                 </tbody>
                              </table>
                              <table width="100%" cellpadding="2" cellspacing="0" border="0" bgcolor="#E0ECFF">
                                 <tbody>
                                    <tr>
                                       <td align="right">
                                          <table cellpadding="0" cellspacing="0" border="0" class="ac">
                                             <tbody>
                                                <tr>
                                                   <td><a href="?&amp;th=<?= htmlspecialchars($_GET['th']); ?>&amp;ser=AIKcX55NH831VpXFC-rOXufQbKuLIFT8MQ&amp;v=pt" class="nu" target="_blank"><img src="https://ssl.gstatic.com/ui/v1/icons/mail/images/print_icon.gif" width="16" height="16" border="0" alt="Print conversation">&nbsp;<span class="u">Print</span></a>&nbsp;&nbsp;&nbsp;</td>
                                                   <td><a href="?&amp;th=<?= htmlspecialchars($_GET['th']); ?>&amp;v=c" class="nu" target="_blank"><img src="https://ssl.gstatic.com/ui/v1/icons/mail/images/tearoff_icon.gif" width="16" height="16" border="0" alt="Open conversation in new window">&nbsp;<span class="u">New window</span></a>&nbsp;</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <table width="98%" cellpadding="0" cellspacing="0" border="0" align="center" class="h">
                                 <tbody>
                                    <tr>
                                       <td>
                                          <h2><font size="+1"><b>New comment on "Doom - new prototype footage!"</b></font></h2>
                                          &nbsp;&nbsp; <a href="?&amp;"><font size="1" color="#006633">Inbox</font></a>&nbsp; 
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <table width="98%" cellpadding="1" cellspacing="0" border="0" bgcolor="#cccccc" align="center">
                                 <tbody>
                                    <tr>
                                       <td>
                                          <a name="m_<?= htmlspecialchars($_GET['th']); ?>"></a>
                                          <table width="100%" cellpadding="1" cellspacing="0" border="0" bgcolor="#efefef">
                                             <tbody>
                                                <tr>
                                                   <td>
                                                      <a href="?&amp;at=AF6bupOkehXG3JxZKjgELVuO2tUY6OoM-Q&amp;redir=?%26th%3D<?= htmlspecialchars($_GET['th']); ?>%26v%3Dc&amp;m=<?= htmlspecialchars($_GET['th']); ?>&amp;a=st#m_<?= htmlspecialchars($_GET['th']); ?>"><img src="https://ssl.gstatic.com/ui/v1/icons/mail/images/star_off_sm_2.gif" width="13" height="13" border="0" alt="Add star"></a>&nbsp; 
                                                      <h3><font color="#00681C"><b>YouTube</b></font></h3>
                                                      &lt;noreply@youtube.com&gt;
                                                   </td>
                                                   <td align="right" valign="top">Sun, Jan 28, 2024 at 2:34 PM</td>
                                                </tr>
                                                <tr>
                                                   <td colspan="2">To: aneurysmic &lt;aneurysmic@example.com&gt;</td>
                                                </tr>
                                                <tr>
                                                   <td colspan="2">
                                                      <div class="r"><font size="1"><a href="?&amp;pv=cv&amp;th=<?= htmlspecialchars($_GET['th']); ?>&amp;rm=<?= htmlspecialchars($_GET['th']); ?>&amp;cs=r&amp;v=b" accesskey="r">Reply</a> | <a href="?&amp;pv=cv&amp;th=<?= htmlspecialchars($_GET['th']); ?>&amp;rm=<?= htmlspecialchars($_GET['th']); ?>&amp;cs=ra&amp;v=b" accesskey="a">Reply to all</a> | <a href="?&amp;pv=cv&amp;th=<?= htmlspecialchars($_GET['th']); ?>&amp;rm=<?= htmlspecialchars($_GET['th']); ?>&amp;cs=f&amp;v=b" accesskey="f">Forward</a> | <a href="?&amp;msg=<?= htmlspecialchars($_GET['th']); ?>&amp;ser=AIKcX55NH831VpXFC-rOXufQbKuLIFT8MQ&amp;v=pt" target="_blank">Print</a> | <a href="?&amp;at=AF6bupOkehXG3JxZKjgELVuO2tUY6OoM-Q&amp;m=<?= htmlspecialchars($_GET['th']); ?>&amp;a=dm">Delete</a> | <a href="?&amp;th=<?= htmlspecialchars($_GET['th']); ?>&amp;v=om" target="_blank">Show original</a></font></div>
                                                   </td>
                                                </tr>
                                                <tr bgcolor="#ffffff">
                                                   <td colspan="2">
                                                      <div class="msg">
<?
/*
if(empty(imap_fetchbody($mbox,htmlspecialchars($_GET['th']),1.2,FT_UID))) {
	echo imap_fetchbody($mbox,htmlspecialchars($_GET['th']),1.1,FT_UID);
} else {
	echo imap_fetchbody($mbox,htmlspecialchars($_GET['th']),1.2,FT_UID);
}
*/
//echo imap_body($mbox,htmlspecialchars($_GET['th']), FT_UID);
echo getBody(htmlspecialchars($_GET['th']),$mbox);
?>
                                                      </div>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                          <a name="m_"></a>
                                          <table width="100%" cellpadding="1" cellspacing="0" border="0" bgcolor="#e0ecff" class="qr">
                                             <tbody>
                                                <tr>
                                                   <td bgcolor="#c3d9ff"><b>Quick Reply</b></td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <table width="1%" cellpadding="0" cellspacing="0" border="0" bgcolor="#e0ecff">
                                                         <form action="?&amp;pv=cv&amp;th=<?= htmlspecialchars($_GET['th']); ?>&amp;at=AF6bupOkehXG3JxZKjgELVuO2tUY6OoM-Q&amp;fv=cv&amp;rm=<?= htmlspecialchars($_GET['th']); ?>&amp;qrt=n&amp;cs=qfnq&amp;v=b" name="qrf" method="POST"></form>
                                                         <input type="hidden" name="redir" value="?&amp;v=c">
                                                         <tbody>
                                                            <tr>
                                                               <td colspan="2">
                                                                  <table width="100%" cellpadding="1" cellspacing="0" border="0">
                                                                     <tbody>
                                                                        <tr>
                                                                           <td><input type="radio" id="reply" name="qrr" value="o" checked="checked"></td>
                                                                           <td colspan="2"><label for="reply"><b>To:</b> YouTube &lt;noreply@youtube.com&gt;</label></td>
                                                                        </tr>
                                                                        <tr>
                                                                           <td width="1%" valign="top"><input type="radio" id="replyall" name="qrr" value="a"></td>
                                                                           <td width="98%"><label for="replyall"><b>To all:</b> YouTube &lt;noreply@youtube.com&gt;, aneurysmic &lt;aneurysmic@example.com&gt;</label></td>
                                                                           <td width="1%" valign="bottom"><input type="submit" name="nvp_bu_qtf" value="More Reply Options"></td>
                                                                        </tr>
                                                                     </tbody>
                                                                  </table>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td><textarea name="body" rows="10" cols="50" wrap="virtual"></textarea></td>
                                                            </tr>
                                                            <tr>
                                                               <td><input type="submit" name="nvp_bu_send" value="Send">&nbsp; <input type="submit" name="nvp_bu_sd" value="Save Draft">&nbsp; <input type="checkbox" id="haot" name="haot" value="qt" checked="checked"> <label for="haot">Include quoted text with reply</label></td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <br>
                              <table width="100%" cellpadding="2" cellspacing="0" border="0" bgcolor="#C3D9FF">
                                 <form action="?&amp;" name="f" method="POST"></form>
                                 <tbody>
                                    <tr>
                                       <td>
                                          <input type="hidden" name="at" value="AF6bupOkehXG3JxZKjgELVuO2tUY6OoM-Q"><input type="hidden" name="t" value="<?= htmlspecialchars($_GET['th']); ?>"><input type="hidden" name="cat" value=""><b><a href="?&amp;" class="searchPageLink">« Back to Inbox</a></b>&nbsp;&nbsp; <? require "actionsbottom.php"; ?>
                                          </select>
                                          &nbsp;<input type="submit" name="nvp_bbu_go" value="Go">
                                       </td>
                                       <td align="right"><a href="?&amp;th=<?= htmlspecialchars($_GET['th']); ?>&amp;prev=1&amp;v=c"><b>‹&nbsp;Newer</b></a> <b>3</b> of <b>hundreds</b> <a href="?&amp;th=<?= htmlspecialchars($_GET['th']); ?>&amp;next=1&amp;v=c"><b>Older&nbsp;›</b></a></td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
<?
require "end.php";
?>