<?php

namespace App\Http\Controllers\Api\Wallet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Wallet\TransactionRequest;
use App\Http\Resources\Wallet\TransactionCollection;
use App\Http\Resources\Wallet\TransactionResource;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TransactionController extends Controller
{
    /**
     * Display a listing of the transaction.
     *
     * @param Wallet $wallet
     * @return TransactionCollection
     * @throws AuthorizationException
     */
    public function index(Wallet $wallet)
    {
        $this->authorize('view', $wallet);

        return new TransactionCollection($wallet->transactions()->paginate());
    }

    /**
     * Store a newly created transaction in storage.
     *
     * @param TransactionRequest $request
     * @param Wallet $wallet
     * @return TransactionResource
     * @throws AuthorizationException
     */
    public function store(TransactionRequest $request, Wallet $wallet)
    {
        $this->authorize('create', [Transaction::class, $wallet]);

        $transaction = $wallet->transactions()->create($request->validated());

        return new TransactionResource($transaction);
    }

    /**
     * Display the specified transaction.
     *
     * @param Wallet $wallet
     * @param Transaction $transaction
     * @return TransactionResource
     * @throws AuthorizationException
     */
    public function show(Wallet $wallet, Transaction $transaction)
    {
        $this->authorize('view', [$wallet, $transaction]);

        return new TransactionResource($transaction);
    }

    /**
     * Update the specified transaction in storage.
     *
     * @param TransactionRequest $request
     * @param Wallet $wallet
     * @param Transaction $transaction
     * @return TransactionResource
     * @throws AuthorizationException
     */
    public function update(TransactionRequest $request, Wallet $wallet, Transaction $transaction)
    {
        $this->authorize('update', [$wallet, $transaction]);

        $transaction->fill($request->validated())->save();

        return new TransactionResource($transaction);
    }

    /**
     * Remove the specified transaction from storage.
     *
     * @param Wallet $wallet
     * @param Transaction $transaction
     * @return TransactionResource
     * @throws AuthorizationException
     */
    public function destroy(Wallet $wallet, Transaction $transaction)
    {
        $this->authorize('delete', [$wallet, $transaction]);

        $transaction->delete();

        return new TransactionResource($transaction);
    }
}
