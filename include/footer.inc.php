    </div>
    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?>&nbsp;xxx.xxx. &nbsp;All Rights Reserved.
    </div>
<?php

if ($g_debug && $g_debug==1) {
    include 'debug.tpl';
}

if(is_object($thisstaff) && $thisstaff->isStaff()) { ?>
    <div>
        <!-- Do not remove <img src="autocron.php" alt="" width="1" height="1" border="0" /> or your auto cron will cease to function -->
        <img src="autocron.php" alt="" width="1" height="1" border="0" />
        <!-- Do not remove <img src="autocron.php" alt="" width="1" height="1" border="0" /> or your auto cron will cease to function -->
    </div>
<?php
} 

?>
</div>
<div id="overlay"></div>
<div id="loading">
    <h4>Please Wait!</h4>
    <p>Please wait... it will take a second!</p>
</div>
</body>
</html>
