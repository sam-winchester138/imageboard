<?php 
    require_once 'includes/config_session.inc.php';
    require_once 'includes/login/login_view.inc.php';
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="sfi.css">
        <title>OTF</title>
    
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    </head>

    <body>
        <div>
            <center>
                <h1>Open Text Forum</h1>
                <form action="includes/login/login.inc.php" method="post" autocomplete="off" >
                    <h2>Login</h2>
                    <!--<input type="hidden" name='address'>-->
                    <label>Username: </label>
                    <input type="text" name='username' > <br>  <br>
                    <label>Password: </label>
                    <input type="text" name='password' > <br>  <br>
                    <button type="submit" name='submit'>Login</button><br>
                    <a href="singuppage.php">Not yet a member? Sign up!</a>
                    
                </form>
                <?php check_login_errors();?>
            </center>
        </div>
            <!--<script>
            id="myForm"
                /*$(document).ready(() => {
                    $.getJSON("https://api.ipify.org?format=json", function (data) {
                        //$("#gfg").html(data.ip);
                        document.getElementById("myForm").elements[0].value = data.ip
                    });
                });
                */
            </script>-->
    </body>
</html>