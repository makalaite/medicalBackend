<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
<<<<<<< HEAD
        if ($exception instanceof TokenExpiredException) {
            return response()->json(['error' => 'Token expired'], $exception->getStatusCode());
        } else if ($exception instanceof TokenInvalidException) {
            return response()->json(['error' => 'Token invalid'], $exception->getStatusCode());
        }else if ($exception instanceof JWTException){
            return response()->json(['error' => 'Error fetching token']);
=======
        if($exception instanceof TokenExpiredException){
            return response()->json(['error' => 'Token expired'],
                $exception->getStatusCode());
        }elseif ($exception instanceof TokenInvalidException){
            return response()->json(['error' => 'Token invalid'],
                $exception->getStatusCode());
        }elseif ($exception instanceof JWTException){
            return response()->json(['error' => 'Error fetching token'],
                $exception->getStatusCode());
>>>>>>> 50746a9df331d22225edbd0eb37bb9bd83fd2a0f
        }
        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Illuminate\Auth\AuthenticationException $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(route('login'));
    }
}