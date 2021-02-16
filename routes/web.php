<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get("productos", [ProductosController::class, 'mostrar'])->name('productos.mostrar');

Route::get('login/{driver}', function ($driver) {
    return Socialite::driver($driver)->redirect();
});

Route::get('login/{driver}/callback/', function ($driver) {
    $userSocialite = Socialite::driver($driver)->user();

    $user = User::where("email", $userSocialite->getEmail())->first();

    if (!$user) {
        $user=User::create([
            "name" => $userSocialite->getName(),
            "email" => $userSocialite->getEmail(),
            "avatar" => $userSocialite->getAvatar(),
        ]);
    }
    Auth::login($user);
    return redirect()->route("home");
});
