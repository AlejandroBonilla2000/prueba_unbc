<?php

use App\Livewire\AddCar;
use App\Livewire\CarList;
use App\Livewire\EditCar;
use App\Livewire\TestPage; //import this in order for livewire to render the page
use Illuminate\Support\Facades\Route;

Route::get('/', TestPage::class); // Ruta raíz apunta al formulario de inicio de sesión
Route::get('/login', TestPage::class); // Puedes dejar esta línea si deseas mantener la ruta '/login' accesible
Route::get('/cars', CarList::class);
Route::get('/add/new', AddCar::class);
Route::get('/edit/car/{id}', EditCar::class);
