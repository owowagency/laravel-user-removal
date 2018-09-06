<?php

use Illuminate\Support\Facades\Route;

Route::delete(config('userremoval.route'), 'OwowAgency\UserRemoval\Http\Controllers\UserRemovalController');
