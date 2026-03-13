<?php

use App\Http\Controllers\EmployeController;

Route::get('/employes', [EmployeController::class, 'index']);

Route::post('/employes', [EmployeController::class, 'show']);

Route::get('/employe', [EmployeController::class, 'find']);

Route::put('/employes/{id}', [EmployeController::class, 'update']);

Route::delete('/employes/{id}', [EmployeController::class, 'delete']);

Roure::get('/stats', [EmployeController::class, 'stats']);
