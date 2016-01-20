<?php

namespace Ronanchilvers\ApiClientBase;

use GuzzleHttp\Message\ResponseInterface as GuzzleResponseInterface;
use Ronanchilvers\ApiClientBase\Contract\ResponseInterface;

class Response implements ResponseInterface
{
    /**
     * The guzzle response object
     * 
     * @var GuzzleHttp\Message\Response
     */
    private $guzzleResponse;

    /**
     * Class constructor
     *
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function __construct(GuzzleResponseInterface $response)
    {
        $this->guzzleResponse = $response;
    }

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getGuzzleResponse()
    {
        return $this->guzzleResponse;
    }

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getBody()
    {
        try {
            return (array) $this->guzzleResponse->getBody();
        } catch (ParseException $ex) {
            return false;
        }
    }

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function json()
    {
        return $this->getGuzzleResponse()->json();
    }
}
