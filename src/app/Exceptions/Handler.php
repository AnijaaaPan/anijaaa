<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        // APIリクエストの場合、JSONレスポンスを返す
        if ($request->is('api/*')) {
            $response = $this->convertExceptionToResponse($exception);
            $statusCode = $response->getStatusCode();
            $data = [
                'error' => [
                    'code' => $statusCode,
                    'message' => $exception->getMessage()
                ]
            ];

            // エラーがHttpExceptionであれば、追加のデータを取得
            if ($exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException) {
                $data['error']['message'] = $exception->getMessage();
            }

            return response()->json($data, $statusCode);
        }

        // 通常のリクエストの場合、デフォルトのエラーページを返す
        return parent::render($request, $exception);
    }
}
