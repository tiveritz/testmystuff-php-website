<?php

function get_post_variable($name) {
    $return = '';
    if (isset( $_POST[$name])) {
        $return = $_POST[$name];
    }
    return($return);
}
