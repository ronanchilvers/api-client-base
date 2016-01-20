<?php

namespace Ronanchilvers\ApiClientBase;

use Ronanchilvers\ApiClientBase\Contract\RequestInterface;

class Request implements RequestInterface
{
    /**
     * The http verb to use
     * 
     * @var string
     */
    private $verb = 'GET';

    /**
     * Associative array of headers
     *  
     * @var string[]
     */
    private $headers = [];

    /**
     * The path for this request
     * 
     * @var string
     */
    private $path = '/';

    /**
     * The parameters for this request as a key => value hash
     * 
     * @var string[]
     */
    private $params;

    /**
     * Set the verb for this request
     *
     * @param string $value
     * @return $this
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function setVerb($value)
    {
        $this->verb = $value;

        return $this;
    }

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getVerb()
    {
        return $this->verb;
    }

    /**
     * Set a header on this request
     *
     * @param  string $key
     * @param  string $value
     * @return $this
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function setHeader($key, $value)
    {
        $this->headers[$key] = $value;

        return $this;
    }

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Set the path for this request
     *
     * @param  string $value
     * @return $this
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function setPath($value)
    {
        $this->path = $value;

        return $this;
    }

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set a parameter
     *
     * @param  string $key
     * @param  string $value
     * @return $this
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function setParam($key, $value)
    {
        $this->params[$key] = $value;

        return $this;
    }

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getBody()
    {
        if (in_array($this->verb, ['POST', 'PUT', 'DELETE'])) {
            return $this->getParams();
        }

        return false;
    }
}
