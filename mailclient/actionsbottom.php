<?php
if(isset($_GET['s']) && $_GET['s'] == "r") {
?>
<input type="submit" name="nvp_bu_rs" value="Remove Star">&nbsp;&nbsp;<input type="submit" name="nvp_a_sp" value="Report Spam">&nbsp;&nbsp;
                                             <select name="bact">
                                                <option value="" selected="selected">More Actions...</option>
                                                <option value="arch">Archive</option>
                                                <option value="ib">Move to Inbox</option>
                                                <option value="rd">Mark as read</option>
                                                <option value="ur">Mark as unread</option>
                                                <option value="tr">Delete</option>
                                                <option value="ig">Mute</option>
<?php
} else {
?>
<input type="submit" name="nvp_a_arch" value="Archive">&nbsp;&nbsp;<input type="submit" name="nvp_a_sp" value="Report Spam">&nbsp;&nbsp;<input type="submit" name="nvp_a_tr" value="Delete">&nbsp;&nbsp;<select name="bact">

                                        <option value="">More Actions...</option>

                                        <option value="rd">Mark as read</option>

                                        <option value="ur">Mark as unread</option>

                                        <option value="st">Add star</option>

                                        <option value="xst">Remove star</option>

                                        <option value="ig">Mute</option>
<? } ?>