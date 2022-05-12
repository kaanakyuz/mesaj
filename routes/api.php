<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('user', UsersController::class );
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('message' , MessageController::class );
    //   Route::get('me', [AuthController::class, 'me']);
    //  Route::resource('books', BookController::class);
});
/*Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth:sanctum']
], function()
{
    Route::apiResource('message' , MessageController::class );
});*/



/*Route::middleware('auth:sanctum')->get('/admin', function (Request $request) {
    Route::apiResource('message' ,MessageController::class );
});*/
