<?php

namespace App\Http\Controllers\RestApi;

use App\Http\Controllers\Controller;
use App\Repositories\IssueRepository;
use Illuminate\Http\Request;

class IssuesController extends Controller
{

    public function create(Request $request, IssueRepository $issueRepository)
    {
        $issue = $request->only('issue', 'description', 'status');
        $issueRepository->create(...$issue);

        return response('success', 201);
    }

    public function edit(int $id, Request $request, IssueRepository $issueRepository)
    {
        $issue = $request->only('issue', 'description', 'status');
        $issueRepository->edit($id, ...$issue);

        return response('success', 200);
    }

    public function all(IssueRepository $issueRepository)
    {
        return response($issueRepository->all(), 200);
    }

    public function show(int $id, IssueRepository $issueRepository)
    {
        return response($issueRepository->show($id), 200);
    }

    public function delete(int $id, IssueRepository $issueRepository)
    {
        $issueRepository->delete($id);
        return response('success', 200);
    }


}
