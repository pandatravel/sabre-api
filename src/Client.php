<?php

namespace Ammonkc\SabreApi;

use Ammonkc\SabreApi\Exception\InvalidArgumentException;
use Ammonkc\SabreApi\Exception\RuntimeException;
use Ammonkc\SabreApi\HttpClient\HttpClient;
use Ammonkc\SabreApi\HttpClient\HttpClientInterface;

/**
 * Simple PHP Sabre API client.
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 *
 * Website: http://github.com/ammonkc/sabre-api
 */
class Client
{
    /**
     * Constant for authentication method. Indicates the new favored login method
     * with username and password via HTTP Authentication.
     */
    const AUTH_HTTP_BASIC = 'http_basic';

    /**
     * Constant for authentication method. Indicates the new login method with
     * with username and token via HTTP Authentication.
     */
    const AUTH_HTTP_TOKEN = 'http_token';

    /**
     * Constant for authentication method. Indicates JSON Web Token
     * authentication required for integration access to the API.
     */
    const AUTH_JWT = 'jwt_token';

    /**
     * Constant for authentication method. Indicates JSON Web Token
     * authentication required for integration access to the API.
     */
    const OAUTH_CLIENT_CREDENTIALS = 'oauth_client';

    /**
     * Constant for authentication method. Indicates JSON Web Token
     * authentication required for integration access to the API.
     */
    const OAUTH_PASSWORD_CREDENTIALS = 'oauth_password';

    /**
     * Constant for authentication method. Indicates JSON Web Token
     * authentication required for integration access to the API.
     */
    const OAUTH_ACCESS_TOKEN = 'oauth_token';

    public const FETCH_RESPONSE = 'response';
    public const FETCH_OBJECT = 'object';
    public const FETCH_JSON = 'json';

    /**
     * @var array
     */
    private $options = [
        'base_uri'    => 'https://api.havail.sabre.com/',

        'user_agent'  => 'sabre-api (https://github.com/pandatravel/sabre-api)',

        'timeout'     => 10,

        'api_limit'   => 5000,

        'cache_dir'   => null
    ];

    /**
     * @var array
     */
    private $parameters = [];

    /**
     * Dev mode
     *
     * @var bool $devMode
     */
    protected $devMode = false;

    /**
     * @var array
     */
    private $endPoints = [];

    /**
     * The Buzz instance used to communicate with Sabre.
     *
     * @var HttpClient
     */
    private $httpClient;

    /**
     * Instantiate a new Sabre client.
     *
     * @param null|HttpClientInterface $httpClient Sabre http client
     */
    public function __construct(array $options = [], HttpClientInterface $httpClient = null)
    {
        $this->options = array_merge($this->options, $options);
        $this->httpClient = $httpClient;
    }

    /**
     * Authenticate a user for all next requests.
     *
     * @param string      $tokenOrLogin Sabre private token/username/client ID
     * @param null|string $password     Sabre password/secret (optionally can contain $authMethod)
     * @param null|string $authMethod   One of the AUTH_* class constants
     *
     * @throws InvalidArgumentException If no authentication method was given
     */
    public function authenticate($clientId, $clientSecret = null, $token = null, $authMethod = null, $tokenStore = null)
    {
        if (null === $clientSecret && null === $token && null === $authMethod) {
            throw new InvalidArgumentException('You need to specify authentication method!');
        }

        if (null === $authMethod && null === $token && in_array($clientSecret, [self::OAUTH_ACCESS_TOKEN, self::OAUTH_CLIENT_CREDENTIALS, self::OAUTH_PASSWORD_CREDENTIALS, self::AUTH_HTTP_BASIC, self::AUTH_JWT, self::AUTH_HTTP_TOKEN])) {
            $authMethod = $clientSecret;
            $clientSecret = null;
        }

        if (null === $authMethod) {
            if (is_array($clientId) && isset($clientId['method'])) {
                $authMethod = $clientId['method'];
            } else {
                $authMethod = self::AUTH_HTTP_BASIC;
            }
        }

        if (in_array($authMethod, [self::AUTH_HTTP_BASIC, self::AUTH_JWT, self::AUTH_HTTP_TOKEN])) {
            $this->getHttpClient()->authenticate($clientId, $clientSecret, $authMethod);
        }

        if (in_array($authMethod, [self::OAUTH_ACCESS_TOKEN, self::OAUTH_CLIENT_CREDENTIALS, self::OAUTH_PASSWORD_CREDENTIALS])) {
            $this->getHttpClient()->oauth_authenticate($clientId, $clientSecret, $token, $authMethod, $tokenStore);
        }
    }

    /**
     * @return HttpClient
     */
    public function authenticateClientCredentials($clientId, $clientSecret = null, $token = null, $method = self::OAUTH_CLIENT_CREDENTIALS)
    {
        return $this->getHttpClient()->getAccessToken($clientId, $clientSecret, $token, $method);
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient()
    {
        if (null === $this->httpClient) {
            $this->httpClient = new HttpClient($this->options);
        }

        return $this->httpClient;
    }

    /**
     * @param HttpClientInterface $httpClient
     */
    public function setHttpClient(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Clears used headers.
     */
    public function clearHeaders()
    {
        $this->getHttpClient()->clearHeaders();
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
        $this->getHttpClient()->setHeaders($headers);
    }

    /**
     * @param string $name
     *
     * @throws InvalidArgumentException
     *
     * @return mixed
     */
    public function getOption($name)
    {
        if (!array_key_exists($name, $this->options)) {
            throw new InvalidArgumentException(sprintf('Undefined option called: "%s"', $name));
        }

        return $this->options[$name];
    }

    /**
     * @param string $name
     * @param mixed  $value
     *
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     */
    public function setOption($name, $value)
    {
        if (!array_key_exists($name, $this->options)) {
            throw new InvalidArgumentException(sprintf('Undefined option called: "%s"', $name));
        }

        $this->options[$name] = $value;
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function getParameter($name)
    {
        return $this->parameters[$name];
    }

    /**
     * @param string $name
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param string $name
     * @param mixed  $value
     */
    public function setParameter($name, $value)
    {
        $this->parameters[$name] = $value;
    }

    /**
     * Set devMode
     *
     * @param string $value
     * @return $this
     */
    public function setDevMode($value)
    {
        $this->devMode = $value;

        return $this;
    }

    /**
     * @return bool $devMode
     */
    public function getDevMode()
    {
        return $this->devMode;
    }

    /**
     * @param $endpoint
     * @param array $args
     * @return Endpoint\AbstractWpEndpoint
     */
    public function __call($endpoint, array $args)
    {
        $class = 'Ammonkc\\SabreApi\\Api\\' . ucfirst($endpoint);
        if (! class_exists($class)) {
            throw new RuntimeException('Endpoint "' . $endpoint . '" does not exist"');
        }

        if (isset($args[0]) && is_string($args[0] && in_array($args[0], [self::FETCH_JSON, self::FETCH_OBJECT, self::FETCH_RESPONSE]))) {
            $fetchMode = $args[0];
            unset($args[0]);
        } else {
            $fetchMode = isset($args[1]) ? $args[1] : self::FETCH_JSON;
        }

        $parameters = isset($args[0]) && is_array($args[0]) ? array_merge($args[0], $this->getParameters()) : $this->getParameters();

        $api = new $class($this, $fetchMode);

        return $api->initialize($parameters)->send();
    }
}
