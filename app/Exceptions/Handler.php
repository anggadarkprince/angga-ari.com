<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param $request
     * @param Throwable $e
     * @return Response
     *
     * @throws Throwable
     */
    public function render($request, Throwable $e)
    {
        if ($e instanceof ModelNotFoundException || $e instanceof NotFoundHttpException) {
            return $request->expectsJson()
                ? new JsonResponse(
                    ['status' => 'Not Found', 'code' => 404, 'message' => $e->getMessage() ?: 'Request not found'],
                    404,
                    $this->isHttpException($e) ? $e->getHeaders() : [],
                    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
                )
                : $this->prepareResponse($request, $e);
        }

        if ($e instanceof AuthenticationException) {
            return $request->expectsJson()
                ? new JsonResponse(
                    ['status' => 'Unauthenticated', 'code' => 401, 'message' => $e->getMessage() ?: 'Unauthenticated'],
                    401,
                    [],
                    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
                )
                : $this->prepareResponse($request, $e);
        }

        if ($e instanceof AccessDeniedHttpException || $e instanceof AuthorizationException) {
            return $request->expectsJson()
                ? new JsonResponse(
                    ['status' => 'Unauthorized', 'code' => 403, 'message' => $e->getMessage() ?: 'Unauthorized'],
                    403,
                    [],
                    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
                )
                : $this->prepareResponse($request, $e);
        }

        return parent::render($request, $e);
    }
}
