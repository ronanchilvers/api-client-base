<?php

namespace Ronanchilvers\ApiClientBase;

use GuzzleHttp\ClientInterface as GuzzleClientInterface;
use Ronanchilvers\ApiClientBase\Contract\ClientInterface;
use Ronanchilvers\ApiClientBase\ExceptionResponse;
use Ronanchilvers\ApiClientBase\Response;

class Client implements ClientInterface
{
    /**
     * The credentials to use with this client
     * 
     * @var Ronanchilvers\ApiClientBase\Contract\CredentialsInterface
     */
    private $credentials;

    /**
     * The http client to use
     * 
     * @var GuzzleHttp\ClientInterface
     */
    private $httpClient;

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function setHttpClient(GuzzleClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;

        return $this;
    }

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function setCredentials(CredentialsInterface $credentials)
    {
        $this->credentials = $credentials;

        return $this;
    }

    /**
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    public function submit(RequestInterface $request)
    {
        $client = $this->getHttpClient();
        try {
            $requestOptions = [
                'headers' => $request->getHeaders()
            ];
            if (false !== $body = $request->getBody()){
                $key = ($request instanceof JsonRequest) ? 'json' : 'body';
                $requestOptions[$key] = $body;
            }
            $guzzleRequest = $client->createRequest(
                $request->getVerb(),
                $request->getPath(),
                $requestOptions
            );
            $guzzleResponse = $client->send($guzzleRequest);
            $response = new Response($guzzleResponse);

            return $response;
        } catch (\GuzzleHttp\Exception\ClientException $ex) {
            $response = new ExceptionResponse($ex->getResponse());
            $response->setException($ex);

            return $response;
        }
    }

    /**
     * Get the credentials for this client
     *
     * @return Ronanchilvers\ApiClientBase\Contract\CredentialsInterface
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    protected function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * Get the http client for this client
     *
     * @return Guzzlehttp\ClientInterface
     * @author Ronan Chilvers <ronan@d3r.com>
     */
    protected function getHttpClient()
    {
        return $this->httpClient;
    }
}
