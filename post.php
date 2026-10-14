<?php 
    require_once "includes/config_session.inc.php";
    require_once "includes/lpost/longpost.inc.php";
    require_once "includes/lpost/longpost_view.inc.php";
    require_once "includes/vericheck.inc.php";
    
?>
<!DOCTYPE html>
<html>
    <head>
        <?php showtitle();?>
        <link rel="stylesheet" href="styles/hpstyle.css">
    </head>
    <body>
        <div class = "main">
            <?php showposts(); ?>
        </div>
    </body>
</html>
