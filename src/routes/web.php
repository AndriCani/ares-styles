<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function(Ares\AresStyles\test $inspire) {
    return $inspire->justDoIt();
});