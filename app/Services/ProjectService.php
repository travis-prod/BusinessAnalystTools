<?php


namespace App\Services;


use App\Project;

class ProjectService
{
    public function all() {
        return Project::all();
    }

    public function whereId(string $id) {
        return Project::whereId($id)->first();
    }
}
