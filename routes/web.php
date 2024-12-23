<?php

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SkillController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'index']);


Route::get('/skill', [SkillController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.pages.index');
});

Route::get('/admin/project', function () {
    return view('admin.pages.project');
});

Route::post('/add-project', [ProjectController::class, 'store']);
