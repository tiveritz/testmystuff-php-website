<?php



class CDatabase
{
    private $hDatabase = null;

    function __construct($server, $user, $pass, $database) {
        $this -> hDatabase = @new mysqli($server, $user, $pass, $database);
        if ($this -> hDatabase -> connect_error) {
            die($this -> hDatabase -> connect_error);
        }
    }

    function __destruct() {
        @$this -> hDatabase -> close();
        $this -> hDatabase = null;
    }

    private function query($q) {
        return ($this -> hDatabase -> query($q));
    }

    function escape($str)
    {
        return ($this->hDatabase->real_escape_string($str));
    }

    public function is_valid_login($email, $password_hash) {
        $result = $this -> query("SELECT * FROM users WHERE email = '$email'");
        $result_array = $result -> fetch_all(MYSQLI_ASSOC);

        if (!empty($result_array)) {
            if ($password_hash === strtolower($result_array[0]['password'])) {
                return true;
            }
        }
        return false;
    }
}
