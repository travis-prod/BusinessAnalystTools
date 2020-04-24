<?php

namespace App\Http\Controllers\Web;

use App\Phase;
use App\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class PhaseWebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(string $project_id)
    {
        return view('requirementsGatheringJourney.project.phase.index',
            [
                "phases" => Phase::whereProjectId($project_id)->get(),
                "project" => Project::whereId($project_id)->first(),
            ]);
    }

    public function new(string $project_id)
    {
        return view('requirementsGatheringJourney.project.phase.create',
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
        $phase = new Phase([
            "name" => $request->name,
            "description" => $request->description,
            "start_date" => $request->start_date,
            "estimated_completion_date" => $request->estimated_completion_date,
            "actual_completion_date" => $request->actual_completion_date,
            "overall_rating" => $request->overall_rating,
        ]);
        $phase->project_id = $project_id;
        $phase->save();

        return redirect()->route('requirementsGatheringJourneyProjectPhase',
            [
                'project_id' => $project_id,
                'phase_id' => $phase->id,
            ]);
    }

    public function read(string $project_id, string $phase_id)
    {
        return view('requirementsGatheringJourney.project.phase.read',
            [
                "project" => Project::whereId($project_id)->first(),
                'phase' => Phase::whereId($phase_id)->first(),
            ]);
    }

    public function edit(string $project_id, string $phase_id)
    {
        return view('requirementsGatheringJourney.project.phase.update',
            [
                "project" => Project::whereId($project_id)->first(),
                'phase' => Phase::whereId($phase_id)->first(),
            ]);
    }

    public function update(string $project_id, string $phase_id, Request $request)
    {
        $phase = Phase::whereId($phase_id);
        $phase->name = $request->name;
        $phase->description = $request->description;
        $phase->start_date = $request->start_date;
        $phase->estimated_completion_date = $request->estimated_completion_date;
        $phase->actual_completion_date = $request->actual_completion_date;
        $phase->overall_rating = $request->overall_rating;
        $phase->save();

        return redirect()->route('requirementsGatheringJourneyProjectUpdatePhase',
            [
                'project_id' => $project_id,
                'phase_id' => $phase->id,
            ]);
    }
}
