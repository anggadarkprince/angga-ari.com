<?php

namespace App\Http\Controllers\Api\Journal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Journal\TaskRequest;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TaskController extends Controller
{
    /**
     * TaskController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Task::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $request->user()->tasks
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TaskRequest $request
     * @return JsonResponse
     */
    public function store(TaskRequest $request)
    {
        $notebook = $request->user()->tasks()->create($request->validated());

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $notebook
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Task $task
     * @return JsonResponse
     */
    public function show(Task $task)
    {
        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TaskRequest $request
     * @param Task $task
     * @return JsonResponse
     */
    public function update(TaskRequest $request, Task $task)
    {
        $task->fill($request->validated())->save();

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $task
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Task $task
     * @return JsonResponse
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return Response::json([
            'status' => 'OK',
            'code' => 200,
            'data' => $task
        ]);
    }
}
