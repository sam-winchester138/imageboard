<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/persacc/persacc_view.inc.php';
    require_once 'includes/vericheck.inc.php';
    require_once 'includes/img/imgm.inc.php';
    require_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
    <html>
        <head>
            
            <link rel="stylesheet" href="styles/pa.css">
            <?php show_title() ?>
        </head>
        <body>
            <a class = "hpl" href="Homepage.php">
                <img src = "images/home.png" alt = "homepage photo">
            </a>
            <?php echo "<img style = 'height:60px;' src= 'images/". get_image($conn, $_SESSION["username"]) ."'>";?>
            
            <div class = "header">
                    <?php show_name(); ?>
                <hr>
            </div>
            <div class = "main">
                
                <div class = "feat">
                    <h3>Upload a new profile picture</h3>
                    <form method="post" action='includes/uploadphoto/uphoto.inc.php'accept="image/*" enctype="multipart/form-data">
                        <input type="file" id="uphoto" name="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit">
                    </form>
                </div>
                <div class = "feat">
                    <form action='includes/logout.inc.php'>
                        <button type = "submit">Log out</button>
                    </form>
                </div>
            </div>
        </body>
    </html>