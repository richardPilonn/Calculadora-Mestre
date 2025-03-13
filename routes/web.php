<?php

use App\Livewire\Aluno\Create;
use App\Livewire\Auth\Login;
use App\Livewire\Professor\Create as ProfessorCreate;
use Illuminate\Support\Facades\Route;

Route::get('/aluno/create', Create::class)->name('aluno.create');
Route::get('/professor/create', ProfessorCreate::class)->name('professor.create');

Route::get('/login',  Login::class)->name('login');

Route::get('/admin', function (){
    return redirect(route('professor.create'));
})->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::get('/aluno', function (){
    return 'login aluno';
})->middleware(['auth', 'role:aluno'])->name('aluno.dashboard');

Route::get('/professor', function (){
    return 'login professor';
})->middleware(['auth', 'role:professor'])->name('professor.dashboard');



