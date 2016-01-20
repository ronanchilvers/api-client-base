<?php

namespace Ronanchilvers\ApiClientBase;

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
}
