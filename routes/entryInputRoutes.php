<?php

// Web
Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/input',
    '\App\Http\Controllers\Web\EntryInputWebController@index')
    ->name('requirementsGatheringJourneyProjectPhaseEntryInputs');

Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/input/new',
    '\App\Http\Controllers\Web\EntryInputWebController@new')
    ->name('requirementsGatheringJourneyProjectPhaseEntryNewInput');

Route::post('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/input/create',
    '\App\Http\Controllers\Web\EntryInputWebController@create')
    ->name('requirementsGatheringJourneyProjectPhaseEntryCreateInput');

Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/input/{entry_input_id}',
    '\App\Http\Controllers\Web\EntryInputWebController@read')
    ->name('requirementsGatheringJourneyProjectPhaseEntryInput');

Route::get('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/input/{entry_input_id}/edit',
    '\App\Http\Controllers\Web\EntryInputWebController@edit')
    ->name('requirementsGatheringJourneyProjectPhaseEntryEditInput');

Route::post('/requirementsGatheringJourney/project/{project_id}/phase/{phase_id}/entry/{entry_id}/input/{entry_input_id}/update',
    '\App\Http\Controllers\Web\EntryInputWebController@update')
    ->name('requirementsGatheringJourneyProjectPhaseEntryUpdateInput');

// Api
