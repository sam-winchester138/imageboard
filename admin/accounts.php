<?php 
    require_once "../includes/config_session.inc.php";
    require_once 'accounts/accounts.inc.php';
    require_once 'accounts/accounts_view.inc.php';
    
    require_once '../includes/vericheck.inc.php';
?>
<DOCTYPE! html>
<html>
    <head>
        <link rel="stylesheet" href = "../styles/accstyle.css">
        
    </head>
    <body>

        <center>
            <h1>Accounts</h1>
            <hr>
            <?php showaccs() ?>
        </center>
    </body>

</html>