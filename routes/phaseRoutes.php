<?php

// Web
Route::get('/requirementsGatheringJourney/project/{project_id}/phase',
    '\App\Http\Controllers\Web\PhaseWebController@index')
    ->name('requirementsGatheringJourneyProjectPhases');

Route::get('/requirementsGatheringJourney/project/{project_id}/phase/new',
    '\App\Http\Controllers\Web\PhaseWebController@new')
    ->name('requirementsGatheringJourneyProjectNewPhase');

Route::post('/requirementsGatheringJourney/project/{project_id}/phase/create',
    '\App\Http\Controllers\Web\PhaseWebController@create')
    ->name('requirementsGatheringJourneyProjectCreatePhase');

Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}',
    '\App\Http\Controllers\Web\PhaseWebController@read')
    ->name('requirementsGatheringJourneyProjectPhase');

Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/edit',
    '\App\Http\Controllers\Web\PhaseWebController@edit')
    ->name('requirementsGatheringJourneyProjectEditPhase');

Route::post('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/update',
    '\App\Http\Controllers\Web\PhaseWebController@update')
    ->name('requirementsGatheringJourneyProjectUpdatePhase');

// Api
