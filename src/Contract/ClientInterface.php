<?php

namespace Ronanchilvers\ApiClientBase\Contract;

use GuzzleHttp\ClientInterface as GuzzleClientInterface;
use Ronanchilvers\ApiClientBase\Contract\CredentialsInterface;
use Ronanchilvers\ApiClientBase\Contract\RequestInterface;

/**
 * Standard interface for client objects
 * 
 * @author Ronan Chilvers <ronan@d3r.com>
 */
interface ClientInterface
{
    /**
     * Set the gizzle client object to use
     *
     * @param   GuzzleHttp\ClientInterface $guzzleClient
     * @return  $this
     * @author  Ronan Chilvers <ronan@d3r.com>
     */
    public function setHttpClient(GuzzleClientInterface $httpClient);

    /**
     * Set the credentials for this client
     *
     * @param  Ronanchilvers\ApiClientBase\Contract\CredentialsInterface $credentials
     * @return $this
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function setCredentials(CredentialsInterface $credentials);

    /**
     * Submit a request to the API
     *
     * @param   Ronanchilvers\ApiClientBase\Contract\RequestInterface $request
     * @return  Ronanchilvers\ApiClientBase\Contract\ResponseInterface
     * @author  Ronan Chilvers <ronan@d3r.com>
     */
    public function submit(RequestInterface $request);
}
