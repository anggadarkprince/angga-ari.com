<?php

namespace App\Http\Controllers\Api\Drive;

use App\Http\Controllers\Controller;
use App\Http\Requests\Drive\DirectoryRequest;
use App\Http\Resources\Drive\DirectoryCollection;
use App\Http\Resources\Drive\DirectoryResource;
use App\Models\Upload;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    /**
     * Display the specified notebook.
     *
     * @param Request $request
     * @return DirectoryCollection
     * @throws AuthorizationException
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Upload::class);

        $directories = $request->user()->uploads()->whereNull('parent')->get();

        return new DirectoryCollection($directories);
    }

    /**
     * Display the specified notebook.
     *
     * @param Upload $directory
     * @return DirectoryResource
     * @throws AuthorizationException
     */
    public function show(Upload $directory)
    {
        $this->authorize('view', $directory);

        return new DirectoryResource($directory);
    }

    /**
     * Create new directory.
     *
     * @param DirectoryRequest $request
     * @return DirectoryResource
     * @throws AuthorizationException
     */
    public function store(DirectoryRequest $request)
    {
        $this->authorize('create', Upload::class);

        $data = $request->merge(['is_directory' => true, 'size' => 0])->all();

        $directory = $request->user()->uploads()->create($data);

        return new DirectoryResource($directory);
    }

    /**
     * Update the specified transaction in storage.
     *
     * @param DirectoryRequest $request
     * @param Upload $directory
     * @return DirectoryResource
     * @throws AuthorizationException
     */
    public function update(DirectoryRequest $request, Upload $directory)
    {
        $this->authorize('update-directory', $directory);

        $directory->fill($request->validated())->save();

        return new DirectoryResource($directory);
    }

    /**
     * Delete uploaded file.
     *
     * @param Upload $directory
     * @return DirectoryResource
     * @throws AuthorizationException
     */
    public function delete(Upload $directory)
    {
        $this->authorize('delete', $directory);

        $directory->delete();

        return new DirectoryResource($directory);
    }
}
