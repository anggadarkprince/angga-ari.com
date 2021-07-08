<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ApiController extends Controller
{
    /**
     * Validate the given request with the given rules.
     *
     * @param Request $request
     * @param array $rules
     * @param array $messages
     * @param array $customAttributes
     * @return void
     */
    public function validate(Request $request, array $rules, array $messages = [], array $customAttributes = [])
    {
        $validator = $this->getValidationFactory()->make(
            $request->all(), $rules, $messages, $customAttributes
        );

        if ($validator->fails()) {
            $errors = (new ValidationException($validator))->errors();
            throw new HttpResponseException(response()->json([
                'status' => 'Unprocessable Entity',
                'code' => 422,
                'message' => "The given data was invalid.",
                'errors' => $errors
            ], JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
        }
    }
}
