<?php

function flash($title = null, $message = null) {
    $flash = app('App\Http\Flash');
    if (func_num_args() == 0) {
        return $flash;
    }

    return $flash->message($title, $message);
}

function barcode() {

    for ($randomNumber = mt_rand(1, 7), $i = 1; $i < 7; $i++) {
        $randomNumber .= mt_rand(0, 7);
    }

    return $randomNumber;
}