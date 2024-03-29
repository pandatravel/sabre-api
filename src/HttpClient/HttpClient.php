<?php

namespace Ammonkc\SabreApi\HttpClient;

use Ammonkc\SabreApi\HttpClient\Auth\Authenticator;
use Ammonkc\SabreApi\Middleware\AuthMiddleware;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;

/**
 * Performs requests on Sabre API
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class HttpClient implements HttpClientInterface
{
    protected $options = [
        'base_uri'    => 'https://api.havail.sabre.com/',

        'user_agent'  => 'sabre-api (https://github.com/pandatravel/sabre-api)',

        'timeout'     => 10,

        'api_limit'   => 5000,

        'cache_dir'   => null,
    ];

    protected $headers = [];

    private $lastResponse;
    private $lastRequest;

    /**
     * @param array           $options
     * @param ClientInterface $client
     */
    public function __construct(array $options = [], ClientInterface $client = null)
    {
        $this->options = array_merge($this->options, $options);
        $client = $client ?: new GuzzleClient($this->options);
        $this->client  = $client;

        $this->clearHeaders();
    }

    /**
     * {@inheritDoc}
     */
    public function setOption($name, $value)
    {
        $this->options[$name] = $value;
    }

    /**
     * {@inheritDoc}
     */
    public function setHeaders(array $headers)
    {
        $this->headers = array_merge($this->headers, $headers);
    }

    /**
     * Clears used headers.
     */
    public function clearHeaders()
    {
        $this->headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'User-Agent' => sprintf('%s', $this->options['user_agent']),
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function get($path, array $parameters = [], array $headers = [], array $options = [])
    {
        return $this->request($path, null, 'GET', $headers, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function post($path, $body = null, array $headers = [], array $options = [])
    {
        return $this->request($path, $body, 'POST', $headers, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function patch($path, $body = null, array $headers = [], array $options = [])
    {
        return $this->request($path, $body, 'PATCH', $headers, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function delete($path, $body = null, array $headers = [], array $options = [])
    {
        return $this->request($path, $body, 'DELETE', $headers, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function put($path, $body, array $headers = [], array $options = [])
    {
        return $this->request($path, $body, 'PUT', $headers, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function request($path, $body = null, $httpMethod = 'GET', array $headers = [], array $options = [])
    {
        $request = $this->createRequest($httpMethod, $path, $body, $headers);

        try {
            $response = $this->client->send($request, $options);
        } catch (\RuntimeException $e) {
            throw $e;
        }

        $this->lastRequest  = $request;
        $this->lastResponse = $response;

        return $response;
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessToken($clientId, $clientSecret = null, $token = null, $method = null)
    {
        $auth = new Authenticator(new GuzzleClient($this->options), $clientId, $clientSecret, $token, $method);

        return $auth->getAccessToken();
    }

    /**
     * {@inheritDoc}
     */
    public function authenticate($tokenOrLogin, $password = null, $method)
    {
        $auth = new AuthMiddleware($tokenOrLogin, $password, $method);

        $this->client->getConfig('handler')->push($auth);
    }

    /**
     * {@inheritDoc}
     */
    public function oauth_authenticate($clientId, $clientSecret = null, $token = null, $method, $tokenStore)
    {
        $auth = new Authenticator(new GuzzleClient($this->options), $clientId, $clientSecret, $token, $method, $tokenStore);
        $oauth = $auth->authenticate();

        $this->client->getConfig('handler')->push($oauth);
    }

    /**
     * @return Request
     */
    public function getLastRequest()
    {
        return $this->lastRequest;
    }

    /**
     * @return Response
     */
    public function getLastResponse()
    {
        return $this->lastResponse;
    }

    protected function createRequest($httpMethod, $path, $body = null, array $headers = [])
    {
        $request = new Request(
            $httpMethod,
            $path,
            array_merge($this->headers, $headers),
            $body
        );

        return $request;
    }
}
