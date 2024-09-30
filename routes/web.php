<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WebhookController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', [PageController::class, 'index'])->name('render-index');

Route::get('/deals', [PageController::class, 'deals'])->name('render-deals');

Route::get('/contact', [PageController::class, 'contact'])->name('render-contact');

Route::get('/joke', [PageController::class, 'joke'])->name('render-joke');

Route::get('/update/{id}', [PageController::class, 'update'])->name('render-update');

Route::patch('/bitrix-webhook/{id}', [WebhookController::class, 'handleWebhook'])->name('webhook');