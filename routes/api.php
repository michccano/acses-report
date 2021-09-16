<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\FileUploadController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ItemController;

use App\Http\Controllers\ReportController;


Route::post('login', [ApiController::class, 'authenticate']);
Route::post('register', [ApiController::class, 'register']);
Route::get('reports/pdf', [ReportController::class, 'showPDF']);


Route::group(['middleware' => ['jwt.verify']], function() {
    Route::post('upload', [FileUploadController::class, 'upload']);
    Route::post('newReport', [FileUploadController::class, 'newReport']);
    Route::post('reports', [ReportController::class, 'index']);
 
    Route::post('report/{id}/item/create', [ItemController::class, 'create']);

    Route::post('report/reOrder', [ItemController::class, 'reOrder']);
    Route::post('report/{id}', [ItemController::class, 'showAll']);

});



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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
