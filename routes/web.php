<?php
use App\Http\Controllers\commentController;
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

Route::get('/admin/comment/list', [commentController::class, 'get_comment']);

Route::get('/admin/comment/add', [commentController::class, 'add_comment']);
Route::post('/admin/comment/add', [commentController::class, 'add_comment_']);

Route::get('/admin/comment/edit', [commentController::class, 'edit_comment']);
Route::post('/admin/comment/edit', [commentController::class, 'edit_comment_']);

Route::get('/admin/comment/delete', [commentController::class, 'delete_comment']);
