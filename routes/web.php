<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ImageController;
use App\Models\FormModel;

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

Route::get('/api', function () {
    echo "<span style='color:blue;'>Do you want api?</span>";
});

Route::post("/test", function () {
    echo "<span style='color:blue;'>Do you want api using post?</span>";
});
Route::get("/test", [DemoController::class, 'index']);
Route::get("/get-data", function () {
    echo "<pre>";
    $data = FormModel::all();
    print_r($data->toArray());
});

Route::resource("image", ImageController::class);

Route::get("/test-get/{name}/{id?}", function ($name, $id = null) {
    //for printing parameters
    echo $name;
    echo $id;
});
Route::get("/helper/{name}", [AccountController::class, "helper"]);
Route::get("/create-session", [AccountController::class, "sessionCreate"]);
Route::post("/createSession", [AccountController::class, "createSession"]);
Route::get("/session/flush", function(){
    //crear all session
    session()->flush();
    return redirect(url('/view-session'));
});
Route::get("/view-session", [AccountController::class, "sessionView"]);
Route::get("/session/delete/{key}", [AccountController::class, "deleteSession"]);
Route::get("login", [AccountController::class, "create"])->name("create");
Route::get("users", [AccountController::class, "getAllUsers"])->name("users");
Route::get("users/trash", [AccountController::class, "getAllTrashUsers"])->name("trashUsers");
Route::get("users/delete/{id}", [AccountController::class, "deleteUser"])->name("deleteUser");
Route::get("users/restore/{id}", [AccountController::class, "restoreUser"])->name("restoreUser");
Route::post("users/update/{id}", [AccountController::class, "updateUserPost"])->name("updateUserPost");
Route::get("users/confirmDelete/{id}", [AccountController::class, "confirmDeleteUser"]);
Route::get("users/update/{id}", [AccountController::class, "updateUser"])->name("updateUser");
Route::get("users/search/", [AccountController::class, "getSearchResult"])->name("getSearchResult");
Route::post("login", [AccountController::class, "createAccount"]);

