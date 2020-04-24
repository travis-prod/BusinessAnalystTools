<?php

// Web
Route::get('/requirementsGatheringJourney/project',
    '\App\Http\Controllers\Web\ProjectWebController@index')
    ->name('requirementsGatheringJourneyProjects');

Route::get('/requirementsGatheringJourney/project/new',
    '\App\Http\Controllers\Web\ProjectWebController@new')
    ->name('requirementsGatheringJourneyNewProject');

Route::post('/requirementsGatheringJourney/project/create',
    '\App\Http\Controllers\Web\ProjectWebController@create')
    ->name('requirementsGatheringJourneyCreateProject');

Route::get('/requirementsGatheringJourney/project/{project_id}',
    '\App\Http\Controllers\Web\ProjectWebController@read')
    ->name('requirementsGatheringJourneyProject');

Route::get('/requirementsGatheringJourney/project/{project_id}/edit',
    '\App\Http\Controllers\Web\ProjectWebController@edit')
    ->name('requirementsGatheringJourneyEditProject');

Route::post('/requirementsGatheringJourney/project/{project_id}/update',
    '\App\Http\Controllers\Web\ProjectWebController@update')
    ->name('requirementsGatheringJourneyUpdateProject');

// Api
