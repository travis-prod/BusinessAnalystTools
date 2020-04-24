<?php

// Web
Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry',
    '\App\Http\Controllers\Web\EntryWebController@index')
    ->name('requirementsGatheringJourneyProjectPhaseEntries');

Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/new',
    '\App\Http\Controllers\Web\EntryWebController@new')
    ->name('requirementsGatheringJourneyProjectPhaseNewEntry');

Route::post('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/create',
    '\App\Http\Controllers\Web\EntryWebController@create')
    ->name('requirementsGatheringJourneyProjectPhaseCreateEntry');

Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}',
    '\App\Http\Controllers\Web\EntryWebController@read')
    ->name('requirementsGatheringJourneyProjectPhaseEntry');

Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/edit',
    '\App\Http\Controllers\Web\EntryWebController@edit')
    ->name('requirementsGatheringJourneyProjectPhaseEditEntry');

Route::post('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/update',
    '\App\Http\Controllers\Web\EntryWebController@update')
    ->name('requirementsGatheringJourneyProjectPhaseUpdateEntry');

// Api
