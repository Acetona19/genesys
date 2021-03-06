<?php

$this->group(['middleware' => ['auth']], function(){


    Route::resource('turma', 'TurmaController');
    Route::resource('ajuda', 'AjudaController');
    Route::resource('alocacao', 'AlocacaoController');
    Route::resource('contato', 'ContatoController');
    Route::resource('disciplina', 'DisciplinaController');
    Route::resource('editar', 'EditarController');
    Route::resource('professor', 'ProfessorController');
    Route::resource('relatorio', 'RelatorioController');
    Route::resource('sala', 'SalaController');
    Route::resource('admin', 'AdminController');

});

$this->get('/', 'Site\SiteController@index')->name('home');




Auth::routes();
