# api-client-base

Utility library to aid creating integrations with HTTP based APIs

```php
class MyClient extends Ronanchilvers\ApiClientBase\Client
{
  public function __construct(
    Ronanchilvers\ApiClientBase\CredentialsInterface $credentials,
    GuzzleHttp\ClientInterface $httpClient = null
  ) {
        $httpClient  = new GuzzleClient([
                'base_url' => 'https://my.site.com/api',
                'defaults' => [
                    'auth'    => [
                        $credentials->getUsername(),
                        $credentials->getPassword()
                    ],
                ]
        ]);
        parent::__construct(
            $credentials,
            $httpClient
        );
  }
}

class GetThings extends Ronanchilvers\ApiClientBase\Request
{
  public function __construct()
  {
    $this->setVerb('GET');
    $this->setPath('things');
  }
}

$client = new MyClient();
$request = new GetThings();
$response = $client->submit($request);
if ($response instanceof Ronanchilvers\ApiClientBase\ExceptionResponseInterface) {
  $exception = $response->getException();
  echo sprintf("Something went wrong : %s", $exception->getMessage());
} else {
  var_dump($response->getBody());
}

```
