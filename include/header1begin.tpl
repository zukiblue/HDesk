<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    
      
    <?php        
      if($ost && ($headers=$ost->getExtraHeaders())) {  
        echo "\n\t".implode("\n\t", $headers)."\n";
      }
    ?>

    
        
    <title><?php echo ($ost && ($title=$ost->getPageTitle()))?$title:'Control Panel'; ?></title>
    <!--[if IE]>
    
    <style type="text/css">
        .tip_shadow { display:block !important; }
    </style>
    <![endif]-->

    <!--

    
    <link rel="stylesheet" href="/css/scp.css" media="screen">
    
    <script type="text/javascript" src="../js/jquery.multifile.js"></script>
    <script type="text/javascript" src="./js/tips.js"></script>
    <script type="text/javascript" src="./js/nicEdit.js"></script>
    <script type="text/javascript" src="./js/bootstrap-typeahead.js"></script>
    <script type="text/javascript" src="./js/scp.js"></script>    
    
    <link rel="stylesheet" href="./css/typeahead.css" media="screen">
    <link type="text/css" rel="stylesheet" href="./css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="./css/dropdown.css">
   -->
  
    <!-- script type="text/javascript" src="./js/jquery.dropdown.js"></script -->
