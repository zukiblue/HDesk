<?php
/*************************************************************************

    index.php

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

**************************************************************************/
//header( 'Location: ./admin/') ;
require_once('core.php');

//require('header.inc.php');
$auth->requireAuthentication(0);
exit;
//require($page);
echo 'INDEX 2 - Im in';

include('footer.inc.php');

?>
