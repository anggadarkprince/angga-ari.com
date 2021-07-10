<?php

namespace App\Http\Controllers\Api\Vault;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vault\PasswordVaultRequest;
use App\Http\Resources\Vault\PasswordCollection;
use App\Http\Resources\Vault\PasswordResource;
use App\Models\PasswordVault;
use Illuminate\Http\Request;

class PasswordVaultController extends Controller
{
    /**
     * PasswordVaultController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(PasswordVault::class);
    }

    /**
     * Display a listing of the password vault.
     *
     * @param Request $request
     * @return PasswordCollection
     */
    public function index(Request $request)
    {
        $passwords = $request->user()->passwordVaults()->paginate(10);

        return new PasswordCollection($passwords);
    }

    /**
     * Store a newly created password vault in storage.
     *
     * @param PasswordVaultRequest $request
     * @return PasswordResource
     */
    public function store(PasswordVaultRequest $request)
    {
        $passwordVault = $request->user()->passwordVaults()->create($request->validated());

        return new PasswordResource($passwordVault);
    }

    /**
     * Display the specified password vault.
     *
     * @param PasswordVault $passwordVault
     * @return PasswordResource
     */
    public function show(PasswordVault $passwordVault)
    {
        // To get original value without mutator: $passwordVault->getRawOriginal();
        return new PasswordResource($passwordVault);
    }

    /**
     * Update the specified password vault in storage.
     *
     * @param PasswordVaultRequest $request
     * @param PasswordVault $passwordVault
     * @return PasswordResource
     */
    public function update(PasswordVaultRequest $request, PasswordVault $passwordVault)
    {
        $passwordVault->fill($request->validated())->save();

        return new PasswordResource($passwordVault);
    }

    /**
     * Remove the specified password vault from storage.
     *
     * @param PasswordVault $passwordVault
     * @return PasswordResource
     */
    public function destroy(PasswordVault $passwordVault)
    {
        $passwordVault->delete();

        return new PasswordResource($passwordVault);
    }
}
