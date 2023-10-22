<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

Route::get('/', function () {
    return view('pages.laravel-examples.landingpage');
})->name('/');
Route::get('landingokp', function () {
    return view('pages.laravel-examples.landingokp');
})->name('landingokp');
Route::get('landingpemuda', function () {
    return view('pages.laravel-examples.landingpemuda');
})->name('landingpemuda');
Route::get('landingloker', function () {
    return view('pages.laravel-examples.landingloker');
})->name('landingwiramuda');
Route::get('landingwiramuda', function () {
    return view('pages.laravel-examples.landingwiramuda');
})->name('landingwiramuda');
Route::get('landingberita', function () {
    return view('pages.laravel-examples.landingberita');
})->name('landingberita');
Route::get('sign-up', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->name('profile');
Route::post('user-profile', [ProfileController::class, 'update']);
Route::get('landingpage', function () {
    return view('pages.laravel-examples.landingpage');
})->name('landingpage');
Route::group(['middleware' => 'auth'], function () {
	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('DataPemudaP', function () {
		return view('pages.laravel-examples.DataPemudaP');
	})->name('DataPemudaP');
    Route::get('DataUmum', function () {
		return view('pages.laravel-examples.DataUmum');
	})->name('DataUmum');
    Route::get('DataWiraMuda', function () {
		return view('pages.laravel-examples.DataWiraMuda');
	})->name('DataWiraMuda');
    Route::get('DataLoker', function () {
		return view('pages.laravel-examples.DataLoker');
	})->name('DataLoker');
    Route::get('DataEvent', function () {
		return view('pages.laravel-examples.DataEvent');
	})->name('DataEvent');
    Route::get('Berita', function () {
		return view('pages.laravel-examples.Berita');
	})->name('Berita');
    Route::get('dataOKP', function () {
		return view('pages.laravel-examples.dataOKP');
	})->name('dataOKP');
    Route::get('Ads', function () {
		return view('pages.laravel-examples.Ads');
	})->name('Ads');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
    Route::get('user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');
    Route::get('addloker', function () {
		return view('pages.laravel-examples.addloker');
	})->name('addloker');
    Route::get('addevent', function () {
		return view('pages.laravel-examples.addevent');
	})->name('addevent');
    Route::get('addberita', function () {
		return view('pages.laravel-examples.addberita');
	})->name('addberita');
    Route::get('index2', function () {
		return view('pages.laravel-view.index2');
	})->name('index2');

});

