<style>
  #debug {
    width:958px;
    background:#F1FFE8;
    border:1px solid #BFCFFF;
    text-align:left;
  }  
  #debugtitle {
    margin: 5px; 
    padding: 5px; 
    background-color: #DBE4FF;
  }  
  #debugcontent {
    padding: 10px;
  }
</style>
<div id="debug">
    <div id="debugtitle">    
        <center><strong>Debug information</strong></center> 
    </div>
    <div id="debugcontent">
<?php

echo '<span class="italic">Time: ' . number_format( microtime(true) - $g_request_time, 4 ) . ' seconds.</span><br />';
echo '<br />';
echo 'Domain: '.$domain;

if ($g_debug_phpinfo && $g_debug_phpinfo==1) {
  echo '<br />';
  echo '<br />';
  echo phpinfo();
}
echo '<br />&nbsp;'; 
?>
</div></div>
