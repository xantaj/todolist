<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('welcome');
});

//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



// Route::middleware(['auth'])->group(function () {
//     Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
//     Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
//     Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
//     Route::post('/todos/{todo}/toggle', [TodoController::class, 'toggle'])->name('todos.toggle');
// });


// // Giriş yapmamış kullanıcı için varsayılan karşılama sayfası
// Route::get('/', function () {
//     return view('welcome');
// });

// // Auth sistemini (register, login, logout) etkinleştirir
// Auth::routes();

// // Kullanıcı giriş yaptıktan sonra yönlendirileceği sayfa
// Route::get('/home', function () {
//     return redirect('/todos');
// })->middleware(['auth']);

// // ToDo List sayfaları sadece giriş yapmış kullanıcılar içindir
// Route::middleware(['auth'])->group(function () {

//     // ToDo ana sayfası
//     Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');

//     // Yeni görev ekleme
//     Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');

//     // Görev silme
//     Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');

//     // Görev tamamlandı / yapılmadı durumu değiştirme
//     Route::post('/todos/{todo}/toggle', [TodoController::class, 'toggle'])->name('todos.toggle');

// });


Route::middleware(['auth'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth'])->group(function () {
    // Kullanıcının todo listesine gitmesi
    Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
    
    // Yeni todo eklemek için
    Route::post('/todos', [TodoController::class, 'store'])->name('todos.store');
    
    // Todo'yu silmek için
    Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todos.destroy');
    
    // Todo'nun durumunu değiştirmek için
    Route::post('/todos/{todo}/toggle', [TodoController::class, 'toggle'])->name('todos.toggle');
});


// Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';