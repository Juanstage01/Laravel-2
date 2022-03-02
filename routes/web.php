<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');

// Route::get('cursos', function () {
//     return "hola mundo";
// });


// Route::get('cursos',[CursoController::class, "index"])->name('cursos.index');
// Route::get('cursos/create',[CursoController::class, 'create'])->name('cursos.create');
// Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
// Route::get('cursos/{curso}',[CursoController::class, 'show'])->name('cursos.show');
// Route::get('cursos/{curso}/edit',[CursoController::class, 'edit'])->name('cursos.edit');
// Route::put('cursos/{curso}',[CursoController::class, 'update'])->name('cursos.update');
// Route::delete('cursos/{curso}',[CursoController::class, 'destroy'])->name('cursos.destroy');
// Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos'); //para cambiar la url
Route::resource('cursos', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', [ContactanosController::class,'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class,'store'])->name('contactanos.store'); 
//    enviado a contactanoscontroller store()
// name es el nombre de la ruta, edit es el metodo pero se le pone el mismo nombre por onvencion


// Route::get('cursos/{cruso}/{categoria?}', function ($curso,$categoria = null) {
//     if($categoria){
//         return "Bienvenido al curso $curso, de $categoria";
//     }else{
//         return "Bienvenido al curso: $curso";
//     }
// });

// forma basica
// Route::get('cursos', function ($curso) {
//     return "Bienvenido a ";
// });

// anteriormente se hacia asi
// Route::get('cursos', 'CursoController@index');