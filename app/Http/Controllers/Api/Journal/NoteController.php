<?php

namespace App\Http\Controllers\Api\Journal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Journal\NoteRequest;
use App\Models\Note;
use App\Models\Notebook;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;

class NoteController extends Controller
{
    /**
     * Display a listing of the note.
     *
     * @param Notebook $notebook
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function index(Notebook $notebook)
    {
        $this->authorize('view', $notebook);

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $notebook->notes
        ]);
    }

    /**
     * Store a newly created note in storage.
     *
     * @param NoteRequest $request
     * @param Notebook $notebook
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function store(NoteRequest $request, Notebook $notebook)
    {
        $this->authorize('create', [Note::class, $notebook]);

        $note = $notebook->notes()->create($request->validated());

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $note
        ]);
    }

    /**
     * Display the specified note.
     *
     * @param Notebook $notebook
     * @param Note $note
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function show(Notebook $notebook, Note $note)
    {
        $this->authorize('view', $note);

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $note->load('notebook')
        ]);
    }

    /**
     * Update the specified note in storage.
     *
     * @param NoteRequest $request
     * @param Notebook $notebook
     * @param Note $note
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function update(NoteRequest $request, Notebook $notebook, Note $note)
    {
        $this->authorize('update', [$notebook, $note]);

        $data = $request->merge(['notebook_id' => $notebook->id])->input();

        $note->mergeFillable(['notebook_id'])->fill($data)->save();

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $note
        ]);
    }

    /**
     * Remove the specified note from storage.
     *
     * @param Notebook $notebook
     * @param Note $note
     * @return JsonResponse
     * @throws AuthorizationException
     */
    public function destroy(Notebook $notebook, Note $note)
    {
        $this->authorize('delete', $note);

        $note->delete();

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $note
        ]);
    }
}
