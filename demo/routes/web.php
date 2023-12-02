<?php

use App\Http\Controllers\CidadeController;
use Illuminate\Support\Facades\Route;


Route::post('/city/create', [CidadeController::class,'create']);
Route::get('/city/read', [CidadeController::class, 'read']);
Route::get ('/city/read_all', [CidadeController::class, 'all']);
Route::put('/city/update', [CidadeController::class, 'update']);
Route::delete ('/city/delete', [CidadeController::class, 'delete']);

Route::get('/', function(){
    return views('bemvindo');
});
