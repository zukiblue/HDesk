<?php 

$info = ($_POST && $errors)?Format::htmlchars($_POST):array();
?>
<body id="loginBody">
<div id="loginBox">
    <h1 id="logo"><a href="index.php">.......</a></h1>
    <h3><?php/* echo Format::htmlchars($msg);*/ ?></h3>
    <form action="login.php" method="post">
        <?php /*csrf_token();*/ ?>
        <input type="hidden" name="do" value="scplogin">
        <fieldset>
            <?php /*if ($auth->validationresults==FALSE) echo "invalid";*/ ?>
            Username:
            <input type="text" name="username" id="name" value="<?php echo $info['username']; ?>" placeholder="username" autocorrect="off" autocapitalize="off">
            Password:
            <input type="password" name="passwd" id="pass" placeholder="password" autocorrect="off" autocapitalize="off">    
        </fieldset>
        <input class="submit" type="submit" name="submit" value="Log In">
    </form>
</div>
<div id="copyRights">Copyright &copy; <a href='http://www.xxx.xxx' target="_blank">xxx.xxx</a></div>
</body>
</html>
