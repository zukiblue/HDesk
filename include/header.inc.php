<?php include 'header1begin.tpl'; ?>

    <script type="text/javascript" src="<?php echo $domain?>js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php echo $domain;?>js/jquery-ui-1.8.18.custom.min.js"></script>
    <link type="text/css" href="<?php echo $domain;?>css/ui-lightness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo $domain;?>css/main.css" media="screen">
    <link rel="stylesheet" href="<?php echo $domain;?>css/nav.css" media="screen">
    <link rel="stylesheet" href="<?php echo $domain;?>css/tables.css" media="screen">
  
<?php include 'header9end.tpl'; ?>
<body>
<div id="container">
    <div id="header">
        <a href="index.php" id="logo">Support System</a>
        <?php 
        /*	if( !db_is_connected() ) {
		return;
	}

	if( auth_is_user_authenticated() ) {
		echo "LOGGEDIN AS Guest.";
	}
*/
        ?>
        
        <p id="info"><strong><?php echo $auth->getUserName(); ?></strong>
           <?php
            if(/*$user->isAdmin() && */!defined('ADMINPAGE')) { ?>
            | <a href="admin.php">Admin Panel</a>
            <?php }else{ ?>
            | <a href="index.php">Staff Panel</a>
            <?php } ?>
            | <a href="logout.php?auth=<?php /*echo md5($ost->getCSRFToken().SECRET_SALT.session_id());*/ ?>">Log Out</a>
        </p>
    </div>
    
    
    <?php
    if($ost->getError())
        echo sprintf('<div id="error_bar">%s</div>', $ost->getError());
    elseif($ost->getWarning())
        echo sprintf('<div id="warning_bar">%s</div>', $ost->getWarning());
    elseif($ost->getNotice())
        echo sprintf('<div id="notice_bar">%s</div>', $ost->getNotice());
    ?>
    
    
    <ul id="nav">
        <?php /*
        if(($tabs=$nav->getTabs()) && is_array($tabs)){
            foreach($tabs as $name =>$tab) {
                echo sprintf('<li class="%s"><a href="%s">%s</a>',$tab['active']?'active':'inactive',$tab['href'],$tab['desc']);
                if(!$tab['active'] && ($subnav=$nav->getSubMenu($name))){
                    echo "<ul>\n";
                    foreach($subnav as $item) {
                        echo sprintf('<li><a class="%s" href="%s" title="%s" >%s</a></li>',
                                $item['iconclass'],$item['href'],$item['title'],$item['desc']);
                    }
                    echo "\n</ul>\n";
                }
                echo "\n</li>\n";
            }            
        } */
        ?>
    </ul>
    <ul id="sub_nav">
        <?php /*
        if(($subnav=$nav->getSubMenu()) && is_array($subnav)){
            $activeMenu=$nav->getActiveMenu();
            if($activeMenu>0 && !isset($subnav[$activeMenu-1]))
                $activeMenu=0;
            foreach($subnav as $k=> $item) {
                if($item['droponly']) continue;
                $class=$item['iconclass'];
                if ($activeMenu && $k+1==$activeMenu
                        or (!$activeMenu
                            && (strpos(strtoupper($item['href']),strtoupper(basename($_SERVER['SCRIPT_NAME']))) !== false
                                or ($item['urls']
                                    && in_array(basename($_SERVER['SCRIPT_NAME']),$item['urls'])
                                    )
                                )))
                    $class="$class active";

                echo sprintf('<li><a class="%s" href="%s" title="%s" >%s</a></li>',$class,$item['href'],$item['title'],$item['desc']);
            }
        }
        */
        ?>
    </ul>
    <div id="content">
        <?php if($errors['err']) { ?>        
            <div id="error_bar"><?php echo $errors['err']; ?></div>
        <?php }elseif($msg) { ?>
            <div id="notice_bar"><?php echo $msg; ?></div>
        <?php }elseif($warn) { ?>
            <div id="warning_bar"><?php echo $warn; ?></div>
        <?php } ?>

