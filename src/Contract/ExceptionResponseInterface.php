<?php

namespace Ronanchilvers\ApiClientBase\Contract;

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
     * @return \Exception
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getException();
}
