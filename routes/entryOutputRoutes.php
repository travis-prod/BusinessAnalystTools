<?php

// Web
Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/output',
    '\App\Http\Controllers\Web\EntryOutputWebController@index')
    ->name('requirementsGatheringJourneyProjectPhaseEntryOutputs');

Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/output/new',
    '\App\Http\Controllers\Web\EntryOutputWebController@new')
    ->name('requirementsGatheringJourneyProjectPhaseEntryNewOutput');

Route::post('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/output/create',
    '\App\Http\Controllers\Web\EntryOutputWebController@create')
    ->name('requirementsGatheringJourneyProjectPhaseEntryCreateOutput');

Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/output/{entry_output_id}',
    '\App\Http\Controllers\Web\EntryOutputWebController@read')
    ->name('requirementsGatheringJourneyProjectPhaseEntryOutput');

Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/output/{entry_output_id}/edit',
    '\App\Http\Controllers\Web\EntryOutputWebController@edit')
    ->name('requirementsGatheringJourneyProjectPhaseEntryEditOutput');

Route::post('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/output/{entry_output_id}/update',
    '\App\Http\Controllers\Web\EntryOutputWebController@update')
    ->name('requirementsGatheringJourneyProjectPhaseEntryUpdateOutput');

// Api
