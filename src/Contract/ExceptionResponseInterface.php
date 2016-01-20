<?php

namespace Ronanchilvers\ApiClientBase\Contract;

use Ronanchilvers\ApiClientBase\ApiException;

/**
 * Standard interface for response objects
 * 
 * @author Ronan Chilvers <ronan@d3r.com>
 */
interface ExceptionResponseInterface
{
    /**
     * Get the exception for this response
     *
     * @return Ronanchilvers\ApiClientBase\ApiException
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getException(ApiException $exception);
}
