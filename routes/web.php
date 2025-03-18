<?php

use App\Livewire\Admin\Admin\Create as AdminCreate;
use App\Livewire\Admin\Aluno\Create as AlunoCreate;
use App\Livewire\Admin\Dashboard\Dashboard;
use App\Livewire\Admin\Professor\Create as ProfessorCreate;
use App\Livewire\Aluno\Aluno\Create;
use App\Livewire\Aluno\Dashboard\Dashboard as DashboardDashboard;
use App\Livewire\Auth\Login;

use Illuminate\Support\Facades\Route;

Route::get('/aluno', Create::class)->name('aluno.create');

Route::get('/admin/pagina/inicial', Dashboard::class)->name('admin.dashboard.dashboard'); //pagina inicial do admin

Route::get('/admin/aluno/create', AlunoCreate::class)->name('admin.aluno.create');
Route::get('/admin/professor/create', ProfessorCreate::class)->name('admin.professor.create');
Route::get('/admin/admin/create', AdminCreate::class)->name('admin.admin.create');


Route::get('/aluno/pagina/inicial', DashboardDashboard::class)->name('aluno.dashboard.dashboard'); //pagina inicial do admin





Route::get('/login',  Login::class)->name('login');


Route::get('/admin', function (){
    return redirect(route('admin.dashboard.dashboard'));
})->middleware(['auth', 'role:admin'])->name('admin.dashboard');

Route::get('/professor', function (){
    return 'login professor';
})->middleware(['auth', 'role:professor'])->name('professor.dashboard');

Route::get('/aluno/pagina', function (){
    return redirect(route('aluno.dashboard.dashboard'));
})->middleware(['auth', 'role:aluno'])->name('aluno.dashboard');

