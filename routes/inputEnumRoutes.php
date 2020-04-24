<?php

// Web
Route::get('/requirementsGatheringJourney/project/{project_id}/input',
    '\App\Http\Controllers\Web\InputTypeEnumWebController@index')
    ->name('requirementsGatheringJourneyProjectInputs');

Route::get('/requirementsGatheringJourney/project/{project_id}/input/new',
    '\App\Http\Controllers\Web\InputTypeEnumWebController@new')
    ->name('requirementsGatheringJourneyProjectNewInput');

Route::post('/requirementsGatheringJourney/project/{project_id}/input/create',
    '\App\Http\Controllers\Web\InputTypeEnumWebController@create')
    ->name('requirementsGatheringJourneyProjectCreateInput');

Route::get('/requirementsGatheringJourney/project/{project_id}/input/{input_type_enum_id}',
    '\App\Http\Controllers\Web\InputTypeEnumWebController@read')
    ->name('requirementsGatheringJourneyProjectInput');

Route::get('/requirementsGatheringJourney/project/{project_id}/input/{input_type_enum_id}/edit',
    '\App\Http\Controllers\Web\InputTypeEnumWebController@edit')
    ->name('requirementsGatheringJourneyProjectEditInput');

Route::post('/requirementsGatheringJourney/project/{project_id}/input/{input_type_enum_id}/update',
    '\App\Http\Controllers\Web\InputTypeEnumWebController@update')
    ->name('requirementsGatheringJourneyProjectUpdateInput');

// Api
