<?php

use App\Jobs\ProcessRawReportJob;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('test', function (): void {
    $start = microtime(true);
    dispatch(new ProcessRawReportJob()); // temp
    logger("Dispatch time: ".(microtime(true) - $start));
});

Route::get('/', function () {
    return view('welcome');
});
