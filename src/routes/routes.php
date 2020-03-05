<?php

use Illuminate\Support\Facades\Route;

Route::match(
    ['delete', 'post'],
    config('userremoval.route'),
    'OwowAgency\UserRemoval\Http\Controllers\UserRemovalController',
);
