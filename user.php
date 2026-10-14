<?php

    require_once 'includes/config_session.inc.php';

    require_once 'includes/dbh.inc.php';

    require_once 'includes/pubacc/pubacc.inc.php';

    require_once 'includes/pubacc/pubacc_view.inc.php';
    
    require_once 'includes/img/imgm.inc.php';

?>

<!DOCTYPE html>

<html>

    <head>

        <link rel="stylesheet" href="styles/pubacc.css">

        <title><?php show_name() ?></title>

    </head>

    <body>

        <div class = "header">
            <?php getimage($conn);?>
            <h1><?php show_name();?></h1>

            <hr>

        </div>

        <div class = "main">

            <?php show_posts(); ?>

        </div>

    </body>

</html>

    