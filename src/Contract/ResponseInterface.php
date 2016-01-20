<?php

namespace Ronanchilvers\ApiClientBase\Contract;

/**
 * Standard interface for response objects
 * 
 * @author Ronan Chilvers <ronan@d3r.com>
 */
interface ResponseInterface
{
    /**
     * Get the guzzle response
     *
     * @return GuzzleHttp\Message\ResponseInterface
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getGuzzleResponse();

    /**
     * Get the data payload for this response
     *
     * @return mixed
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getBody();

    /**
     * Get the body as a json object
     *
     * @return string
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function json();
}
