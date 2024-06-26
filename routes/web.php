<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use Doctrine\DBAL\Schema\Index;
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

Route::get('/', function () {
    return view('home', [
        'name' => 'Achmad Choerul Ramdhani',
        'role' => 'staff',
        'buah' => ['pisang', 'apel', 'jeruk', 'semangka', 'kiwi']
    ]);
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/class', [ClassController::class, 'index']);
