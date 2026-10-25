<?php

use App\Http\Controllers\FifthWorkingDayController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FifthWorkingDayController::class, 'index']);
