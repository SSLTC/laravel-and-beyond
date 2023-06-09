<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;

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

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::get('/member/index', [MemberController::class, 'index'])->name('member.index');

Route::get('/member/create', [MemberController::class, 'create'])->name('member.create');
Route::post('/member/store', [MemberController::class, 'store'])->name('member.store');
Route::get('/member/{id}/edit', [MemberController::class, 'edit'], ['id'])->name('member.edit');
Route::patch('/member/{id}', [MemberController::class, 'patch'], ['id'])->name('member.patch');
Route::get('/member/destroy/{id}', [MemberController::class, 'destroy'], ['id'])->name('member.destroy');
