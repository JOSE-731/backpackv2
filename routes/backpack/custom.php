<?php

use App\Http\Controllers\Admin\ContactosCrudController;
use App\Http\Controllers\Admin\DatoCrudController;
use App\Http\Controllers\TestsController;
use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('contactos', 'ContactosCrudController');
    Route::crud('datos', 'DatoCrudController');

    //Tests rutas
    Route::get('tests', [TestsController::class,'index']);
    Route::get('tests/create', [TestsController::class,'create'])->name('create.tests');
    Route::post('tests/registro', [TestsController::class,'store'])->name('store.tests');
    //Route::get('tests/{id}', [TestsController::class,'edit'])->name('edit.tests');
    //Route::put('tests/{id}', [TestsController::class,'update'])->name('update.tests');
    Route::delete('tests/{id}', [TestsController::class,'destroy'])->name('delete.tests');
    Route::crud('tests', 'TestsCrudController');
    Route::crud('testv2', 'Testv2CrudController');
    Route::crud('examples', 'ExamplesCrudController');
}); // this should be the absolute last line of this file