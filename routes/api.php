<?php


('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);

?>
