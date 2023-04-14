<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\NotebookStoreRequest;
use App\Http\Requests\NotebookUpdateRequest;
use App\Http\Resources\NotebookResource;
use App\Models\Notebook;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class NotebookController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        return NotebookResource::collection(Notebook::paginate(10));
    }

    public function store(NotebookStoreRequest $request)
    {
        return new NotebookResource(Notebook::create($request->validated()));
    }

    public function show(Notebook $notebook)
    {
        return new NotebookResource($notebook);
    }

    public function update(NotebookUpdateRequest $request, Notebook $notebook)
    {
        $notebook->update($request->validated());

        return new NotebookResource($notebook);
    }

    public function destroy(Notebook $notebook)
    {
        $notebook->delete();

        return response(null, ResponseAlias::HTTP_NO_CONTENT);
    }
}
