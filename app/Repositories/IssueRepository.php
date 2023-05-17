<?php

namespace App\Repositories;

use App\Models\Issue;
use Illuminate\Database\Eloquent\Collection;

class IssueRepository
{

    public function create(string $issue, string $description, string $status): void
    {

        $issueM = new Issue();
        $issueM->issue = $issue;
        $issueM->description = $description;
        $issueM->status = $status;
        $issueM->save();
    }

    public function edit(int $id, string $issue, string $description, string $status): void
    {
        $issueM = Issue::find($id);
        $issueM->issue = $issue;
        $issueM->description = $description;
        $issueM->status = $status;
        $issueM->save();
    }

    public function all(): Collection
    {
        return Issue::all();
    }

    public function show(int $id): array
    {
        return Issue::find($id)->toArray();
    }

    public function delete(int $id): void
    {
        Issue::find($id)->delete();
    }
}
