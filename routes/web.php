<?php

use App\Http\Controllers\todoscontroller;
use Illuminate\Support\Facades\Route;

//route for homepage 
Route::get('/', [todoscontroller::class, 'index'])->name('home.todo');
//route for createpage 
Route::get('/create', function () {
    return view('create');
})->name('create.todo');
//route for delete
Route::get('/delete/{id}', [todoscontroller::class, 'delete'])->name('submit.delete');
//route for editpage 
Route::get('/edit/{id}', [todoscontroller::class, 'edit'])->name('edit.todo');
//route for submitting 
Route::post('/create', [todoscontroller::class, 'store'])->name('submit.store');
//route for update  
Route::POST('/update', [todoscontroller::class, 'update'])->name('update.todo');
