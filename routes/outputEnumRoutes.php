<?php

// Web
Route::get('/requirementsGatheringJourney/project/{project_id}/output',
    '\App\Http\Controllers\Web\OutputTypeEnumWebController@index')
    ->name('requirementsGatheringJourneyProjectOutputs');

Route::get('/requirementsGatheringJourney/project/{project_id}/output/new',
    '\App\Http\Controllers\Web\OutputTypeEnumWebController@new')
    ->name('requirementsGatheringJourneyProjectNewOutput');

Route::post('/requirementsGatheringJourney/project/{project_id}/output/create',
    '\App\Http\Controllers\Web\OutputTypeEnumWebController@create')
    ->name('requirementsGatheringJourneyProjectCreateOutput');

Route::get('/requirementsGatheringJourney/project/{project_id}/output/{output_type_enum_id}',
    '\App\Http\Controllers\Web\OutputTypeEnumWebController@read')
    ->name('requirementsGatheringJourneyProjectOutput');

Route::get('/requirementsGatheringJourney/project/{project_id}/output/{output_type_enum_id}/edit',
    '\App\Http\Controllers\Web\OutputTypeEnumWebController@edit')
    ->name('requirementsGatheringJourneyProjectEditOutput');

Route::post('/requirementsGatheringJourney/project/{project_id}/output/{output_type_enum_id}/update',
    '\App\Http\Controllers\Web\OutputTypeEnumWebController@update')
    ->name('requirementsGatheringJourneyProjectUpdateOutput');

// Api
