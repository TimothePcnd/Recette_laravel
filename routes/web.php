<?php

use App\Models\Recette;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'welcome');
Route::view('/projects', 'projects');

Route::get('/recettes', function (){

    $model = new Recette();
    $recettes = $model->getAll();

    return view('recettes.index', compact('recettes'));
})->name('recettes.index');

Route::get('/recettes/{id}', function (int $id){
    /*dd($id);*/

    $model = new Recette();
    $recette = $model->getById($id);
    return view('recettes.show', compact('recette'));
})->name('recettes.show');

