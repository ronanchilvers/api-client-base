<?php

namespace Ronanchilvers\ApiClientBase;

use Ronanchilvers\ApiClientBase\Contract\ExceptionResponseInterface;
use Ronanchilvers\ApiClientBase\Contract\ResponseInterface;
use Ronanchilvers\ApiClientBase\Response;

class ExceptionResponse extends Response implements ExceptionResponseInterface
{
    /**
     * The exception for this response
     * 
     * @var Ronanchilvers\ApiClientBase\ApiException
     */
    private $exception;

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getException(ApiException $exception)
    {
        return $this->exception;
    }

    /**
     * Set the exception object
     *
     * @param  Ronanchilvers\ApiClientBase\ApiException $exception
     * @return $this
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function setException(ApiException $exception)
    {
        $this->exception = $exception;

        return $this;
    }
}
