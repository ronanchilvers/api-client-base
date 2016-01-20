<?php

namespace Ronanchilvers\ApiClientBase;

use Ronanchilvers\ApiClientBase\Contract\RequestInterface;
use Ronanchilvers\ApiClientBase\Request;

class JsonRequest extends Request
{
    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function getBody()
    {
        if (false !== $body = parent::getBody()) {
            return json_encode($body);
        }

        return $body;
    }
}
