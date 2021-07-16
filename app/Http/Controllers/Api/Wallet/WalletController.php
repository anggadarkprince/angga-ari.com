<?php

namespace App\Http\Controllers\Api\Wallet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wallet\WalletRequest;
use App\Http\Resources\Wallet\WalletCollection;
use App\Http\Resources\Wallet\WalletResource;
use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    /**
     * WalletController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Wallet::class);
    }

    /**
     * Display a listing of the wallet.
     *
     * @param Request $request
     * @return WalletCollection
     */
    public function index(Request $request)
    {
        $wallets = $request->user()->wallets()->paginate(10);

        return new WalletCollection($wallets);
    }

    /**
     * Store a newly created wallet in storage.
     *
     * @param WalletRequest $request
     * @return WalletResource
     */
    public function store(WalletRequest $request)
    {
        $wallet = $request->user()->wallets()->create($request->validated());

        return new WalletResource($wallet);
    }

    /**
     * Display the specified wallet.
     *
     * @param Wallet $wallet
     * @return WalletResource
     */
    public function show(Wallet $wallet)
    {
        return new WalletResource($wallet);
    }

    /**
     * Update the specified wallet in storage.
     *
     * @param WalletRequest $request
     * @param Wallet $wallet
     * @return WalletResource
     */
    public function update(WalletRequest $request, Wallet $wallet)
    {
        $wallet->fill($request->validated())->save();

        return new WalletResource($wallet);
    }

    /**
     * Remove the specified wallet from storage.
     *
     * @param Wallet $wallet
     * @return WalletResource
     */
    public function destroy(Wallet $wallet)
    {
        $wallet->delete();

        return new WalletResource($wallet);
    }
}
