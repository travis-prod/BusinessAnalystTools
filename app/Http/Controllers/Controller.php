<?php

namespace App\Http\Controllers;

use App\Services\ProjectService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home() {
        return view('home');
    }

    public function requirementsGatheringJourney() {
        return view('requirementsGatheringJourney');
    }

    public function requirementsGatheringJourneyProject(string $project_id, ProjectService $projectService) {
        return view('requirementsGatheringJourneyProject',
        [
            'project' => $projectService->whereId($project_id),
        ]);
    }

    public function requirementsGatheringJourneyNewProject() {
        return view('requirementsGatheringJourneyNewProject');
    }

    public function requirementsGatheringJourneyCreateProject(Request $request) {
        return json_encode($request->all());
    }

    public function requirementsGatheringJourneyProjectNewEntry() {
        return view('requirementsGatheringJourneyProjectNewEntry');
    }

    public function requirementsGatheringJourneyProjectInputs() {
        return view('requirementsGatheringJourneyProjectInputs');
    }

    public function requirementsGatheringJourneyProjectOutputs() {
        return view('requirementsGatheringJourneyProjectOutputs');
    }
}
