<?php
use App\Http\Controllers\reviewController;
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

Route::get('/admin', function () {
    return view('admin.main');
});

Route::get('/admin/product/list', function () {
    return view('admin.product.list');
});


Route::prefix('admin/review')->group(function(){

    Route::get('list', [reviewController::class, 'get_review']);
    
    Route::get('add', [reviewController::class, 'add_review']);
    Route::post('add', [reviewController::class, 'add_review_']);
    
    Route::get('edit', [reviewController::class, 'edit_review']);
    Route::post('edit', [reviewController::class, 'edit_review_']);
    
    Route::get('delete', [reviewController::class, 'delete_review']);
});

