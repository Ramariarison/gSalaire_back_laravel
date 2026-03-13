<?php

use App\Http\Controllers\EmployeController;

Route::get('/employes', [EmployeController::class, 'index']);

Route::post('/employes', [EmployeController::class, 'store']);

Route::get('/employes/{id}', [EmployeController::class, 'show']);

Route::put('/employes/{id}', [EmployeController::class, 'update']);

Route::delete('/employes/{id}', [EmployeController::class, 'delete']);

Route::get('/stats', [EmployeController::class, 'stats']);
