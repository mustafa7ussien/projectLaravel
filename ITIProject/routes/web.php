<?php

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
Route:: get('/',function()
{
    return redirect("/en");
}

);

Route::get('/{lang}', [\App\Http\Controllers\home::class,"index"]);

Route::get('/singleproject/{id}/{lang}', [\App\Http\Controllers\home::class,"singleproject"]);


Route::group(['prefix' => 'admin'], function () {
   return Voyager::routes();
});
