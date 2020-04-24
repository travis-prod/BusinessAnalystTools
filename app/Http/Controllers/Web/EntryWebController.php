<?php

namespace App\Http\Controllers\Web;

use App\Entry;
use App\Phase;
use App\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class EntryWebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(string $project_id, string $phase_id)
    {
        return view('requirementsGatheringJourney.project.phase.entry.index',
            [
                "entries" => Entry::wherePhaseId($phase_id)->get(),
                "project" => Project::whereId($project_id)->first(),
                "phase" => Phase::whereId($phase_id)->first(),
            ]);
    }

    public function new(string $project_id, string $phase_id)
    {
        return view('requirementsGatheringJourney.project.phase.entry.create',
            [
                "project" => Project::whereId($project_id)->first(),
                "phase" => Phase::whereId($phase_id)->first(),
            ]);
    }

    /**
     * @param string $project_id
     * @param string $phase_id
     * @param Request $request
     * @return false|string
     */
    public function create(string $project_id, string $phase_id, Request $request)
    {
        $entry = new Entry([
            "date" => $request->date,
            "personal_feeling" => $request->personal_feeling,
            "client_feeling" => $request->client_feeling,
            "num_of_meetings" => $request->num_of_meetings,
            "num_of_communications" => $request->num_of_communications,
            "understanding" => $request->understanding,
        ]);
        $entry->phase_id = $phase_id;
        $entry->save();

        return redirect()->route('requirementsGatheringJourneyProjectPhaseEntry',
            [
                'project_id' => $project_id,
                'phase_id' => $phase_id,
                'entry_id' => $entry->id,
            ]);
    }

    public function read(string $project_id, string $phase_id, string $entry_id)
    {
        return view('requirementsGatheringJourney.project.phase.entry.read',
            [
                "project" => Project::whereId($project_id)->first(),
                'phase' => Phase::whereId($phase_id)->first(),
                'entry' => Entry::whereId($entry_id)->first(),
            ]);
    }

    public function edit(string $project_id, string $phase_id, string $entry_id)
    {
        return view('requirementsGatheringJourney.project.phase.entry.update',
            [
                "project" => Project::whereId($project_id)->first(),
                'phase' => Phase::whereId($phase_id)->first(),
                'entry' => Entry::whereId($entry_id)->first(),
            ]);
    }

    public function update(string $project_id, string $phase_id, string $entry_id, Request $request)
    {
        $entry = Entry::whereId($entry_id)->first();
        $entry->date = $request->date;
        $entry->personal_feeling = $request->personal_feeling;
        $entry->client_feeling = $request->client_feeling;
        $entry->num_of_meetings = $request->num_of_meetings;
        $entry->num_of_communications = $request->num_of_communications;
        $entry->understanding = $request->understanding;
        $entry->save();

        return redirect()->route('requirementsGatheringJourneyProjectPhaseEntry',
            [
                'project_id' => $project_id,
                'phase_id' => $phase_id,
                'entry_id' => $entry->id,
            ]);
    }
}
