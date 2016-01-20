<?php

namespace Ronanchilvers\ApiClientBase\Contract;

/**
 * Standard interface for request objects
 * 
 * @author Ronan Chilvers <ronan@d3r.com>
 */
interface RequestInterface
{
    /**
     * Get the HTTP verb to use for this request
     *
     * @return string
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getVerb();

    /**
     * Get the headers for this request
     *
     * @return string[]
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getHeaders();

    /**
     * Get the path for this request
     *
     * @return string
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getPath();

    /**
     * Get the body for this request
     *
     * @return string
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getBody();

    /**
     * Get the parameters for this request
     *
     * @return string[]
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getParams();
}
