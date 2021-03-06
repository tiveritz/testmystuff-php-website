<?php
    include "./functionality/login.php";
?>

    <body class="bgform">
        <div class="bigform-wrapper">
            <div class="bigform-left"></div>
            <div class="bigform-right">
                <div class="bigform">
                    <div class="form-wrapper">
                    <h1>Anmelden</h1>
                    <form action="<?php echo(ROOT_LINK); ?>" method="POST">
                        <fieldset>
                            <input type="hidden"        name="action"       value="login" />
                            <input type="text"          name="username"     placeholder="E-Mail" />
                            <input type="password"      name="password"     placeholder="Password" />
                            <input type="submit"                            value="Anmelden" />
                        </fieldset>
                    </form>
                    </div>
                </div>
                <div class="bigform-message">
<?php
    if( strlen( $str_message ) > 0 ) {
        echo( "<p>$str_message</p>" );
    }
?>
                </div>
            </div>
        </div>
    </body>