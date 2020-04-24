<?php

namespace App\Http\Controllers\Web;

use App\InputTypeEnum;
use App\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class InputTypeEnumWebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(string $project_id)
    {
        return view('requirementsGatheringJourney.project.inputTypeEnum.index',
            [
                "inputTypeEnums" => InputTypeEnum::whereProjectId($project_id)->get(),
                "project" => Project::whereId($project_id)->first(),
            ]);
    }

    public function new(string $project_id)
    {
        return view('requirementsGatheringJourney.project.inputTypeEnum.create',
            [
                "project" => Project::whereId($project_id)->first(),
            ]);
    }

    /**
     * @param string $project_id
     * @param Request $request
     * @return false|string
     */
    public function create(string $project_id, Request $request)
    {
        $inputEnum = new InputTypeEnum([
            'name' => $request->name,
        ]);
        $inputEnum->project_id = $project_id;
        $inputEnum->save();

        return redirect()->route('requirementsGatheringJourneyProjectInput',
            [
                'project_id' => $project_id,
                'input_type_enum_id' => $inputEnum->id,
            ]);
    }

    public function read(string $project_id, string $input_type_enum_id)
    {
        return view('requirementsGatheringJourney.project.inputTypeEnum.read',
            [
                "project" => Project::whereId($project_id)->first(),
                'inputTypeEnum' => InputTypeEnum::whereId($input_type_enum_id)->first(),
            ]);
    }

    public function edit(string $project_id, string $input_type_enum_id)
    {
        return view('requirementsGatheringJourney.project.inputTypeEnum.update',
            [
                "project" => Project::whereId($project_id)->first(),
                'inputTypeEnum' => InputTypeEnum::whereId($input_type_enum_id)->first(),
            ]);
    }

    public function update(string $project_id, string $input_type_enum_id, Request $request)
    {
        $inputEnum = InputTypeEnum::whereId($input_type_enum_id);
        $inputEnum->name = $request->name;
        $inputEnum->save();

        return redirect()->route('requirementsGatheringJourneyProjectInput',
            [
                'project_id' => $project_id,
                'input_type_enum_id' => $inputEnum->id,
            ]);
    }
}
