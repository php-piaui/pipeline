<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return response()->json([
        'PHP' => PHP_VERSION,
        'Laravel' => Illuminate\Foundation\Application::VERSION,
        'Owner' => 'PHP PIAUÍ',
        'What' => '2º PHPPUB',
        'Where' => 'TapHouse',
        'When' => new DateTime('2024-02-21 19:30:00', new DateTimeZone('America/Fortaleza')),
        'Title' => 'CI/CD with GitHub Actions',
        'Details' => 'Create a pipeline for CI/CD using enviroment variables with GitHub Actions do deploy a Laravel project in a VPS.',
    ], Response::HTTP_OK);
});
