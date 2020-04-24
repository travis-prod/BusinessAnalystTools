<?php

namespace App\Http\Controllers\Web;

use App\Entry;
use App\Output;
use App\OutputTypeEnum;
use App\Phase;
use App\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class EntryOutputWebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(string $project_id, string $phase_id, string $entry_id)
    {
        return view('requirementsGatheringJourney.project.phase.entry.output.index',
            [
                "entryOutputs" => Output::whereEntryId($entry_id)->get(),
                "project" => Project::whereId($project_id)->first(),
                "phase" => Phase::whereId($phase_id)->first(),
                "entry" => Entry::whereId($entry_id)->first(),
            ]);
    }

    public function new(string $project_id, string $phase_id, string $entry_id)
    {
        return view('requirementsGatheringJourney.project.phase.entry.output.create',
            [
                "project" => Project::whereId($project_id)->first(),
                "phase" => Phase::whereId($phase_id)->first(),
                "entry" => Entry::whereId($entry_id)->first(),
                "outputTypes" => OutputTypeEnum::whereProjectId($project_id)->get(),
            ]);
    }

    /**
     * @param string $project_id
     * @param string $phase_id
     * @param string $entry_id
     * @param Request $request
     * @return false|string
     */
    public function create(string $project_id, string $phase_id, string $entry_id, Request $request)
    {
        $output = new Output([
            'count' => $request->count,
            'effectiveness' => $request->effectiveness,
        ]);
        $output->entry_id = $entry_id;
        $output->type_id = $request->type;
        $output->save();

        return redirect()->route('requirementsGatheringJourneyProjectPhaseEntryOutput',
            [
                'project_id' => $project_id,
                'phase_id' => $phase_id,
                'entry_id' => $entry_id,
                'entry_output_id' => $output->id,
            ]);
    }

    public function read(string $project_id, string $phase_id, string $entry_id, string $entry_output_id)
    {
        return view('requirementsGatheringJourney.project.phase.entry.output.read',
            [
                "project" => Project::whereId($project_id)->first(),
                "phase" => Phase::whereId($phase_id)->first(),
                "entry" => Entry::whereId($entry_id)->first(),
                'output' => Output::whereId($entry_output_id)->first(),
                "outputTypes" => OutputTypeEnum::whereProjectId($project_id)->get(),
            ]);
    }

    public function edit(string $project_id, string $phase_id, string $entry_id, string $entry_output_id)
    {
        return view('requirementsGatheringJourney.project.phase.entry.output.update',
            [
                "project" => Project::whereId($project_id)->first(),
                "phase" => Phase::whereId($phase_id)->first(),
                "entry" => Entry::whereId($entry_id)->first(),
                'output' => Output::whereId($entry_output_id)->first(),
            ]);
    }

    public function update(string $project_id, string $phase_id, string $entry_id, string $entry_output_id, Request $request)
    {
        $output = Output::whereId($entry_output_id);
        $output->count = $request->count;
        $output->effectiveness = $request->effectiveness;
        $output->type_id = $request->type;
        $output->save();

        return redirect()->route('requirementsGatheringJourneyProjectPhaseEntryOutput',
            [
                'project_id' => $project_id,
                'phase_id' => $phase_id,
                'entry_id' => $entry_id,
                'entry_output_id' => $output->id,
            ]);
    }
}
