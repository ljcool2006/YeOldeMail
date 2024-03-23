<?php
require "start.php";
?>
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
<?
require "end.php";
imap_close($mbox);
?>