<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\SettingController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::resource('setting', SettingController::class,
//     [
//     'names' => [
//         'profile' => 'setting.profile',
//         'dashboard' => 'setting.dashboard',
//         'settings' => 'setting.settings',
//         // etc...
//     ]
// ]);
Route::get('setting/profile', [SettingController::class, 'profile'])->name('setting.profile');
Route::get('setting/dashboard', [SettingController::class, 'dashboard'])->name('setting.dashboard');
Route::get('setting/settings', [SettingController::class, 'settings'])->name('setting.settings');

Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('permissions', PermissionsController::class);
    Route::delete('permissions_mass_destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.mass_destroy');
    Route::resource('roles', RolesController::class);
    Route::delete('roles_mass_destroy', [RolesController::class, 'massDestroy'])->name('roles.mass_destroy');
    Route::resource('users', UsersController::class, [
        'names' => [
            'index' => 'users.index',
            'store' => 'users.store',
            // etc...
        ]
    ]);
    Route::delete('users_mass_destroy', [UsersController::class, 'massDestroy'])->name('users.mass_destroy');
});

require __DIR__.'/auth.php';
