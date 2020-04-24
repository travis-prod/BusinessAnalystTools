<?php

namespace App\Http\Controllers\Web;

use App\Project;
use App\Services\ProjectService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ProjectWebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        return view('requirementsGatheringJourney.project.index',
            [
                'projects' => Project::all(),
            ]);
    }

    public function new() {
        return view('requirementsGatheringJourney.project.create');
    }

    /**
     * @param Request $request
     * @return false|string
     */
    public function create(Request $request) {
        $project = new Project([
            "name" => $request->name,
            "description" => $request->description,
            "start_date" => $request->start_date,
            "estimated_completion_date" => $request->estimated_completion_date,
            "actual_completion_date" => $request->actual_completion_date,
            "overall_rating" => $request->overall_rating,
        ]);
        $project->save();

        return redirect()->route('requirementsGatheringJourneyProject', ['project_id' => $project->id]);
    }

    public function read(string $project_id, ProjectService $projectService) {
        return view('requirementsGatheringJourney.project.read',
        [
            "project" => Project::whereId($project_id)->first(),
        ]);
    }

    public function edit(string $project_id, ProjectService $projectService) {
        return view('requirementsGatheringJourney.project.update',
        [
            "project" => Project::whereId($project_id)->first(),
        ]);
    }

    public function update(string $project_id, Request $request) {
        $project = Project::whereId($project_id)->first();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->start_date = $request->start_date;
        $project->estimated_completion_date = $request->estimated_completion_date;
        $project->actual_completion_date = $request->actual_completion_date;
        $project->overall_rating = $request->overall_rating;
        $project->save();

        return redirect()->route('requirementsGatheringJourneyProject', ['project_id' => $project->id]);
    }
}
