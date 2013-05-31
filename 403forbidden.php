<?php
header('HTTP/1.1 403 Forbidden');
//require_once('core.php');

?>
<?php include 'header1begin.tpl'; ?>


<title>You have been DENIED access</title>

<?php include 'header9end.tpl'; ?>

<body>
<style>
  #debug {
    width:958px;
    background:#F1FFE8;
    border:1px solid #BFCFFF;
    text-align:left;
  }  
</style>



    <div id="wwwwww"></div>
<font size="4">You have been denied access because of the following reasons:<br /><br />
1.) Too many failed login attempts, so you are likely brute forcing through logins.<br />
2.) You have been accessing an authorized user account login through a stolen or hijacked session.<br /></font>

<?php include('footer_simple.inc.php'); ?>