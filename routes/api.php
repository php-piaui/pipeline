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
        'Made By' => 'Bruno Oliveira (https://github.com/BdsOliveira)',
        'What' => '2º PHPPUB',
        'Where' => 'TapHouse',
        'When' => [
            'Planned' => new DateTime('2024-02-20 19:30:00', new DateTimeZone('America/Fortaleza')),
            'Happening' => new DateTime('2024-03-07 19:30:00', new DateTimeZone('America/Fortaleza')),
        ],
        'Title' => 'Pipeline CI/CD with GitHub Actions',
        'Details' => 'Create a pipeline for CI/CD using enviroment variables with GitHub Actions do deploy a Laravel project in a VPS.',
        'GitHub' => 'https://github.com/php-piaui/pipeline',
        'Extra Info' => [
            'Notion Outline' => 'https://dear-romano-1d6.notion.site/Pipeline-CI-CD-com-GitHub-Actions-02bcf3c15ba24ccc9a88f7b2479d6c8f',
            'Enviroments' => [
                'Development' => 'https://pipelinedevelop.phppiaui.com.br/',
                'Homologation' => 'https://pipelinehomologacao.phppiaui.com.br/',
                'Production' => 'https://pipeline.phppiaui.com.br/',
            ],
        ],
    ], Response::HTTP_OK);
});
