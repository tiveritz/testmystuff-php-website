<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="./style/style.css" />
  </head>
<body>  
    <div class="bgform">
        <div class="bigform-wrapper">
            <div class="bigform-left"></div>
            <div class="bigform-right">
                <div class="bigform">
                    <div class="form-wrapper">
                    <h1>Administration</h1>
                    <form action="<?php echo $login_url; ?>" method="POST">
                        <fieldset>
                            <input type="hidden" name="action" value="login" />
                            <input type="text" name="email" placeholder="E-Mail" />
                            <input type="password" name="password" placeholder="Password" />
                            <input type="submit" value="Log in" />
                        </fieldset>
                    </form>
                    </div>
                </div>
                <div class="bigform-message">
                    <?php
                        if(strlen($login_message) > 0) {
                            echo("<p>$login_message</p>");
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
