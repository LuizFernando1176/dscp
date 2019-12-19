<?php

function urlBase() {
    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        $protocol = 'https://';
    } else {
        $protocol = 'http://';
    }
    $url = $protocol . $_SERVER['HTTP_HOST'] . '/dsp/';
    return $url;
}

function soNumero($str) {
    return preg_replace("/[^0-9]/", "", $str);
}
