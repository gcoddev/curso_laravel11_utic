<?php

use App\Http\Controllers\ControladorPagina;
use App\Http\Controllers\ControladorTarea;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControladorPagina::class, 'home'])->name('home');
Route::get('/about', [ControladorPagina::class, 'acercade'])->name('acercade');

Route::get('/tareas', [ControladorTarea::class, 'index'])->name('tareas');

Route::get('/nuevo', [ControladorTarea::class, 'create'])->name('create');
Route::post('/nuevo', [ControladorTarea::class, 'store'])->name('store');
Route::get('/editar/{id_tarea}', [ControladorTarea::class, 'edit'])->name('edit');
Route::put('/editar/{id_tarea}', [ControladorTarea::class, 'update'])->name('update');
Route::delete('/tarea/{id_tarea}', [ControladorTarea::class, 'destroy'])->name('destroy');

Route::get('/login', [ControladorPagina::class, 'login'])->name('login');
Route::post('/login', [ControladorPagina::class, 'loginPost'])->name('loginPost');
Route::post('/logout', [ControladorPagina::class, 'logout'])->name('logout');

Route::get('/tarea/{id_tarea}', [ControladorTarea::class, 'show'])->name('show');
