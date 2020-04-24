<?php

namespace App\Http\Controllers\Web;

use App\Entry;
use App\Input;
use App\InputTypeEnum;
use App\Phase;
use App\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class EntryInputWebController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(string $project_id, string $phase_id, string $entry_id)
    {
        return view('requirementsGatheringJourney.project.phase.entry.input.index',
            [
                "entryInputs" => Input::whereEntryId($entry_id)->get(),
                "project" => Project::whereId($project_id)->first(),
                "phase" => Phase::whereId($phase_id)->first(),
                "entry" => Entry::whereId($entry_id)->first(),
            ]);
    }

    public function new(string $project_id, string $phase_id, string $entry_id)
    {
        return view('requirementsGatheringJourney.project.phase.entry.input.create',
            [
                "project" => Project::whereId($project_id)->first(),
                "phase" => Phase::whereId($phase_id)->first(),
                "entry" => Entry::whereId($entry_id)->first(),
                "inputTypes" => InputTypeEnum::whereProjectId($project_id)->get(),
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
        $input = new Input([
            'count' => $request->count,
            'effectiveness' => $request->effectiveness,
        ]);
        $input->entry_id = $entry_id;
        $input->type_id = $request->type;
        $input->save();

        return redirect()->route('requirementsGatheringJourneyProjectPhaseEntryInput',
            [
                'project_id' => $project_id,
                'phase_id' => $phase_id,
                'entry_id' => $entry_id,
                'entry_input_id' => $input->id,
            ]);
    }

    public function read(string $project_id, string $phase_id, string $entry_id, string $entry_input_id)
    {
        return view('requirementsGatheringJourney.project.phase.entry.input.read',
            [
                "project" => Project::whereId($project_id)->first(),
                "phase" => Phase::whereId($phase_id)->first(),
                "entry" => Entry::whereId($entry_id)->first(),
                'input' => Input::whereId($entry_input_id)->first(),
                "inputTypes" => InputTypeEnum::whereProjectId($project_id)->get(),
            ]);
    }

    public function edit(string $project_id, string $phase_id, string $entry_id, string $entry_input_id)
    {
        return view('requirementsGatheringJourney.project.phase.entry.input.update',
            [
                "project" => Project::whereId($project_id)->first(),
                "phase" => Phase::whereId($phase_id)->first(),
                "entry" => Entry::whereId($entry_id)->first(),
                'input' => Input::whereId($entry_input_id)->first(),
            ]);
    }

    public function update(string $project_id, string $phase_id, string $entry_id, string $entry_input_id, Request $request)
    {
        $input = Input::whereId($entry_input_id);
        $input->count = $request->count;
        $input->effectiveness = $request->effectiveness;
        $input->type_id = $request->type;
        $input->save();

        return redirect()->route('requirementsGatheringJourneyProjectPhaseEntryInput',
            [
                'project_id' => $project_id,
                'phase_id' => $phase_id,
                'entry_id' => $entry_id,
                'entry_input_id' => $input->id,
            ]);
    }
}
