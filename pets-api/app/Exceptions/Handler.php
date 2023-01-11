<?php

namespace App\Exceptions;

// use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
// use Symfony\Component\HttpKernel\Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
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
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
        $this->renderable(function (NotFoundHttpException $e, $request) {
            return response()->json([
                    'code' => 404,
                    'type' => 'application/json',
                    'message' => 'Pet not found'
                ], 404);
            
        });

        
        // $this->renderable(function (NotFoundHttpException $e, $request) {
        //     if ((gettype($request->query('id') )) != 'integer') {
        //         return response()->json([
        //             'code' => 404,
        //             'type' => 'application/json',
        //             'message' => 'Invalid ID supplied'
        //         ], 400);
        //     }
        // });

       
    }

    // public function render($request, Throwable $exception)

    // {
    //     $out = new \Symfony\Component\Console\Output\ConsoleOutput();
    //     $out->writeln(gettype($request->query('id')));
    //     if ($exception instanceof ModelNotFoundException) {
    //         return response()->json([
    //                         'code' => 404,
    //                         'type' => 'application/json',
    //                         'message' => 'Pet not found2'
    //                     ], 404);
    //     }

    //     if ($exception instanceof ModelNotFoundException && (gettype($request->query('id') ) != 'integer')) {
    //         return response()->json([
    //                         'code' => 404,
    //                         'type' => 'application/json',
    //                         'message' => 'Pet not found'
    //                     ], 404);
    //     }
 
    //     return parent::render($request, $exception);
    // }

    
}
