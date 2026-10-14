<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/signup/signup_view.inc.php';
    
?>
<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="sfi.css">
        <title>OTF</title>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <body>
        <div>
            <center>
                <h1>Open Text Forum</h1>
                <form class="whatever" action="includes/signup/signup.inc.php" method="post" autocomplete="off" id="myForm">
                <h2>Sign up</h2>
                <input type="hidden" name='address'>
                <label>Username: </label>
                <input type="text" name='username' > <br>  <br>
                <label>Password: </label>
                <input type="text" name='password' > <br>  <br>
                <button type="submit" name='submit'>Sign up</button><br>
                <a href="index.php">Already a member? Login!</a>
                </form>
                <?php check_signup_errors();?>
            </center>
            
        </div>
            <script>
                $(document).ready(() => {
                    $.getJSON("https://api.ipify.org?format=json", function (data) {
                        //$("#gfg").html(data.ip);
                        document.getElementById("myForm").elements[0].value = data.ip
                    });
                });
            </script>
    </body>
</html>