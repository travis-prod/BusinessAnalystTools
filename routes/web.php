<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', '\App\Http\Controllers\Controller@home')
    ->name('home');

Route::get('/requirementsGatheringJourney', '\App\Http\Controllers\Controller@requirementsGatheringJourney')
    ->name('requirementsGatheringJourney');

Route::get('/requirementsGatheringJourney/project/new', '\App\Http\Controllers\Controller@requirementsGatheringJourneyNewProject')
    ->name('requirementsGatheringJourneyNewProject');

Route::post('/requirementsGatheringJourney/project/create', '\App\Http\Controllers\Controller@requirementsGatheringJourneyCreateProject')
    ->name('requirementsGatheringJourneyCreateProject');

Route::get('/requirementsGatheringJourney/project/{project_id}', '\App\Http\Controllers\Controller@requirementsGatheringJourneyProject')
    ->name('requirementsGatheringJourneyProject');

Route::get('/requirementsGatheringJourney/project/{project_id}/entry/new', '\App\Http\Controllers\Controller@requirementsGatheringJourneyProjectNewEntry')
    ->name('requirementsGatheringJourneyProjectNewEntry');

Route::get('/requirementsGatheringJourney/project/{project_id}/input', '\App\Http\Controllers\Controller@requirementsGatheringJourneyProjectInputs')
    ->name('requirementsGatheringJourneyProjectInputs');

Route::get('/requirementsGatheringJourney/project/{project_id}/output', '\App\Http\Controllers\Controller@requirementsGatheringJourneyProjectOutputs')
    ->name('requirementsGatheringJourneyProjectOutputs');

