<?php

namespace App\Exception;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class AppErrorException
 *
 * Custom exception class for application errors
 *
 * @package App\Exception
 */
class AppErrorException extends HttpException
{
    /**
     * AppErrorException constructor
     *
     * @param string|null     $message  The exception message
     * @param \Throwable|null $previous The previous throwable used for the exception chaining
     * @param array<mixed>    $headers  An array of HTTP headers. Each element should be a string representing a header
     */
    public function __construct(string $message = null, \Throwable $previous = null, array $headers = [])
    {
        parent::__construct(Response::HTTP_INTERNAL_SERVER_ERROR, $message, $previous, $headers);
    }
}
