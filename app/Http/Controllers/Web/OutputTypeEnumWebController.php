<?php

namespace App\Http\Controllers\Web;

use App\OutputTypeEnum;
use App\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class OutputTypeEnumWebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(string $project_id)
    {
        return view('requirementsGatheringJourney.project.outputTypeEnum.index',
            [
                "outputTypeEnums" => OutputTypeEnum::whereProjectId($project_id)->get(),
                "project" => Project::whereId($project_id)->first(),
            ]);
    }

    public function new(string $project_id)
    {
        return view('requirementsGatheringJourney.project.outputTypeEnum.create',
            [
                "project" => Project::whereId($project_id)->first(),
            ]);
    }

    /**
     * @param $project_id
     * @param Request $request
     * @return false|string
     */
    public function create($project_id, Request $request)
    {
        $outputEnum = new OutputTypeEnum([
            'name' => $request->name,
        ]);
        $outputEnum->project_id = $project_id;
        $outputEnum->save();

        return redirect()->route('requirementsGatheringJourneyProjectOutput',
            [
                'project_id' => $project_id,
                'output_type_enum_id' => $outputEnum->id,
            ]);
    }

    public function read(string $project_id, string $output_type_enum_id)
    {
        return view('requirementsGatheringJourney.project.outputTypeEnum.read',
            [
                "project" => Project::whereId($project_id)->first(),
                'outputTypeEnum' => OutputTypeEnum::whereId($output_type_enum_id)->first(),
            ]);
    }

    public function edit(string $project_id, string $output_type_enum_id)
    {
        return view('requirementsGatheringJourney.project.outputTypeEnum.update',
            [
                "project" => Project::whereId($project_id)->first(),
                'outputTypeEnum' => OutputTypeEnum::whereId($output_type_enum_id)->first(),
            ]);
    }

    public function update(string $project_id, string $output_type_enum_id, Request $request)
    {
        $outputEnum = OutputTypeEnum::whereId($output_type_enum_id);
        $outputEnum->name = $request->name;
        $outputEnum->save();

        return redirect()->route('requirementsGatheringJourneyProjectOutput',
            [
                'project_id' => $project_id,
                'output_type_enum_id' => $outputEnum->id,
            ]);
    }
}
