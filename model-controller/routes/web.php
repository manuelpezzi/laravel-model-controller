<?php
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get("/",[PageController::class,'index']);