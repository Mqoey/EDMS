<?php

use App\Http\Controllers\DashbordController;
use App\Http\Controllers\DocumentController;
use App\Models\User;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [DashbordController::class, 'index'])->name('dashboard');

Route::get('users', function (){
    return view('users')
    ->with('users', User::all());
})->name('users');

Route::get('document', [DocumentController::class, 'index'])->name('document.index');
Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
Route::post('document', [DocumentController::class, 'store'])->name('document.add');


require __DIR__ . '/auth.php';
