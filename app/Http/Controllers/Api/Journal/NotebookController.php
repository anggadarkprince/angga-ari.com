<?php

namespace App\Http\Controllers\Api\Journal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Journal\NotebookRequest;
use App\Models\Notebook;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class NotebookController extends Controller
{
    /**
     * NotebookController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Notebook::class);
    }

    /**
     * Display a listing of the notebook.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $request->user()->notebooks
        ]);
    }

    /**
     * Store a newly created notebook in storage.
     *
     * @param NotebookRequest $request
     * @return JsonResponse
     */
    public function store(NotebookRequest $request)
    {
        $notebook = $request->user()->notebooks()->create($request->validated());

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $notebook
        ]);
    }

    /**
     * Display the specified notebook.
     *
     * @param Notebook $notebook
     * @return JsonResponse
     */
    public function show(Notebook $notebook)
    {
        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $notebook
        ]);
    }

    /**
     * Update the specified notebook in storage.
     *
     * @param NotebookRequest $request
     * @param Notebook $notebook
     * @return JsonResponse
     */
    public function update(NotebookRequest $request, Notebook $notebook)
    {
        $notebook->fill($request->validated())->save();

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $notebook
        ]);
    }

    /**
     * Remove the specified notebook from storage.
     *
     * @param Notebook $notebook
     * @return JsonResponse
     */
    public function destroy(Notebook $notebook)
    {
        $notebook->delete();

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $notebook
        ]);
    }
}
