<?php

use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
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
Route::get('test', function () {
    $route = "dashboard/clients/{1}/orders/{3}";
    echo '<pre>';
    $str = explode('/', $route);
    foreach ($str as $key => $value) {
        if (preg_match_all('/{[^a-z]*}/', $value) == 1) {
            echo $key . '<br>';
        }
    }
    // var_dump(preg_match_all('/{[^a-z]*}/', $str[2]));
});
Route::get('/', function () {
    return redirect()->route('dashboard.users.index');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');




Route::get('test', function () {
    return bcrypt('123456');
});
