<?php

class CDatabase
{
    private $db = null;

    function __construct($server, $user, $pass, $database) {
        $this -> db = @new mysqli($server, $user, $pass, $database);
        if ($this -> db -> connect_error) {
            die($this -> db -> connect_error);
        }
    }

    function __destruct() {
        $this -> db -> close();
        $this -> db = null;
    }

    public function is_valid_login($email, $password_hash) {
        $email = $this -> escape($email);

        $result = $this -> db -> query("SELECT * FROM users WHERE email = '$email'");
        $result_array = $result -> fetch_all(MYSQLI_ASSOC);

        if (!empty($result_array)) {
            if ($password_hash === strtolower($result_array[0]['password'])) {
                return true;
            }
        }
        return false;
    }

    function escape($str) {
        return ($this -> db ->real_escape_string($str));
    }
}
