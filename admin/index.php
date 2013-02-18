<?php
/*************************************************************************

    index.php

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

**************************************************************************/

//header( 'Location: users.php' ) ;
require_once('../core.php');

require('header_main.inc.php');
$auth->requireAuthentication(0);
//require($page);

echo '<center><img src="'.dynRoot().'img/index.jpg"></center>';

include('footer_main.inc.php');

?>
