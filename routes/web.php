<?php

use App\Exports\UsersExport;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('welcome');
});


Route::get('user/export', function () {
    return Excel::download(new UsersExport, 'users.xlsx');
});
// Route::get('users/export/', [UsersController::class, 'export']);

// Route::get('export/', [ExportsController::class, 'export'])->name('export');
