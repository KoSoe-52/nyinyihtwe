<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//use Illuminate\Support\Facades\DB;
//use App\Models\Item;

Route::get('/', function () {
    return view('auth.login');
    // try {
    //     DB::connection()->getPdo();
    //     if(DB::connection()->getDatabaseName()){
    //         return Item::all();
    //         //echo "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
    //        // return DB::table("users")->get();
    //     }else{
    //         die("Could not find the database. Please check your configuration.");
    //     }
    // } catch (\Exception $e) {
    //     die("Could not open connection to database server.  Please check your configuration.");
    // }
});
// Route::get('/login', function () {
//     //return view('auth.login');
//     return "hello";
// });
// Route::get('/login', function () {
//     return view('auth.login');
// });
Route::get("/logout",[App\Http\Controllers\Auth\LoginController::class,'logout']);
Auth::routes();
//hello
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//a
Route::group(array("middleware" => "auth"),function(){
    Route::get("/modelzadashi",[App\Http\Controllers\ModelzadashiController::class,'index'])->name('modelzadashi');
    Route::get("/modelzadashar",[App\Http\Controllers\ModelzadasharController::class,'index'])->name('modelzadashar');
    Route::get("/sastartmodelstructure",[App\Http\Controllers\SastartmodelstructureController::class,'index'])->name('sastartmodelstructure');
    Route::get("/structure",[App\Http\Controllers\StructureController::class,'index'])->name('structure');
    Route::get("/f1c",[App\Http\Controllers\F1cController::class,'index'])->name('f1c');
    Route::get("/f2c",[App\Http\Controllers\F2cController::class,'index'])->name('f2c');
    Route::get("/f3c",[App\Http\Controllers\F3cController::class,'index'])->name('f3c');
    Route::get("/f4c",[App\Http\Controllers\F4cController::class,'index'])->name('f4c');
    Route::get("/f6c",[App\Http\Controllers\F6cController::class,'index'])->name('f6c');
    Route::get("/km",[App\Http\Controllers\KmController::class,'index'])->name('km');
    Route::get("/workspace",[App\Http\Controllers\WorkspaceController::class,'index'])->name('workspace');
    Route::get("/structure/{id}",[App\Http\Controllers\StructureController::class,'show'])->name('structureShow');
    Route::get("/f3c/{id}",[App\Http\Controllers\F3cController::class,'show'])->name('f3cShow');
    Route::get("/f6c/{id}/{id2}",[App\Http\Controllers\F6cController::class,'show'])->name('f6cShow');
    Route::get("/f1c/{id}/{id2}",[App\Http\Controllers\F1cController::class,'show'])->name('f1cShow');



});
//hello

