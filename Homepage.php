<?php
    require_once 'includes/config_session.inc.php';
    require_once "includes/dbh.inc.php";
    //require_once 'includes/homepage/hp.inc.php';
    require_once 'includes/posts/posts.inc.php';
    require_once "includes/posts/posts_model.inc.php";
    require_once 'includes/posts/posts_view.inc.php';
    require_once 'includes/homepage/hp_view.inc.php';
    require_once 'includes/vericheck.inc.php';
    require_once 'includes/img/imgm.inc.php';
    
?>
<DOCTYPE! html>
    <html>
        <head>
            <title>homepage</title>
            <link rel="stylesheet" href="styles/hpstyle.css">
        </head>

        <body>
            <div class = "header">
                <div class='account'>
                        <!--<figure>
                            <?php
                                $username = $_SESSION["username"];
                                $name = get_image($conn, $username);
                                echo "<img src='images". "/" . $name. "'".  "alt='images\user.jpg'>"
                            ?>
                            <figcaption>
                                <?php
                                    $username = $_SESSION["username"];
                                    echo "<a  class = 'test' href='persacc.php'>$username</a>"; 
                                ?>
                            </figcaption> 
                        </figure>-->
                        <?php
                                echo "<a href='persacc.php'>"; 
                        ?>
                            <?php
                                    $username = $_SESSION["username"];
                                    $name = get_image($conn, $username);
                                    echo "<img class= 'pfp'src='images". "/" . $name. "'".  "alt='images\user.jpg'>"
                                ?>
                            <?php
                                $username = $_SESSION["username"];
                                echo "<p  class = 'test'>$username</p>"; 
                            ?>
                        </a>
                </div>
                <div>
                    <center>
                        <h1>Homepage</h1>
                    </center>
                </div>

            </div>
            <hr>
            <div class="container">

                <div class="main">
                    <h3 style="text-align:center">New posts</h3>
                    <hr>
                    <?php
                        showposts($conn);
                    ?>
                </div>

                <div class="npost">
                    <h3>Create a new post</h3>
                    <hr>
                    <form action="includes/homepage/hp.inc.php" method="post" autocomplete="off" accept="image/*" enctype="multipart/form-data">
                        <label >Title of post:
                        <input type="text" name="title"  value="" maxlength="25">
                        <label>Contents of post:
                        <textarea type="text" name="contents"  value="" maxlength="400"></textarea>
                        <label>Add image:
                        <input type="file" id = "image" name="image">
                        <input type="radio" id = "spost" name="postType" value="spost">
                        <label for="spost">Short post: 25 character title limit and 400 character content limit</label>
                        <input type="radio" id = "lpost" name="postType" value="lpost">
                        <label for="lpost">Long post: 40 character title limit and 1500 character content limit</label><br>
                        <button type="submit" name="submit">Post</button>
                        <?php check_post_errors();?>
                    </form>
                </div>
            </div>
        </body>
    </html>