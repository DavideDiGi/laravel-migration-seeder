<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Guest\MainController;

// Models
use App\Models\Train;

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

Route::get('/', [MainController::class, 'index']);
    // $trains = Train::all();

    // dd($trains);

    // return view('welcome');
