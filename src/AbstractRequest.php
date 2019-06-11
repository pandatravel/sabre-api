<?php

namespace Ammonkc\SabreApi;

use Ammonkc\SabreApi\Contracts\RequestInterface;
use Ammonkc\SabreApi\HttpClient\Message\ResponseMediator;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Abstract class for Api Response classes.
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
abstract class AbstractRequest implements RequestInterface
{
    /**
     * The client.
     *
     * @var Client
     */
    protected $client;

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $endpoint_base;

    /**
     * The request parameters
     *
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     */
    protected $parameters;

    /**
     * The request queryParameters
     *
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     */
    protected $queryParameters;

    /**
     * The request pathParameters
     *
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     */
    protected $pathParameters;

    /**
     * The request headerParameters
     *
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     */
    protected $headerParameters;

    /**
     * The request formParameters
     *
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     */
    protected $formParameters;

    /**
     * The normalizer
     *
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     */
    protected $normalizer;

    /**
     * The serializer
     *
     * @var \Symfony\Component\Serializer\Serializer
     */
    protected $serializer;

    /**
     * The responseType
     *
     * @var Ammonkc\SabreApi\Contracts\ResponseInterface $responseType
     */
    protected $responseType;

    /**
     * Fetch mode
     *
     * @var string
     */
    protected $fetchMode;

    /**
     * @param Client $client
     */
    public function __construct(Client $client, $fetchMode)
    {
        $this->client = $client;
        $this->fetchMode = $fetchMode;
        $this->parameters = new ParameterBag;
        $this->queryParameters = new ParameterBag;
        $this->pathParameters = new ParameterBag;
        $this->headerParameters = new ParameterBag;
        $this->formParameters = new ParameterBag;
    }

    /**
     * Initialize this gateway with default parameters
     *
     * @param  array $parameters
     * @return $this
     */
    public function initialize(array $parameters = [], array $queryParameters = [], array $pathParameters = [], array $headerParameters = [])
    {
        // set default parameters
        foreach ($this->getDefaultParameters() as $key => $value) {
            if (is_array($value)) {
                $this->parameters->set($key, reset($value));
            } else {
                $this->parameters->set($key, $value);
            }
        }
        // set default query parameters
        foreach ($this->getDefaultQueryParameters() as $key => $value) {
            if (is_array($value)) {
                $this->queryParameters->set($key, reset($value));
            } else {
                $this->queryParameters->set($key, $value);
            }
        }
        // set default path parameters
        foreach ($this->getDefaultPathParameters() as $key => $value) {
            if (is_array($value)) {
                $this->pathParameters->set($key, reset($value));
            } else {
                $this->pathParameters->set($key, $value);
            }
        }
        // set default header parameters
        foreach ($this->getDefaultHeaderParameters() as $key => $value) {
            if (is_array($value)) {
                $this->headerParameters->set($key, reset($value));
            } else {
                $this->headerParameters->set($key, $value);
            }
        }

        $this->setParams($this, $parameters);
        $this->setParams($this, $queryParameters);
        $this->setParams($this, $pathParameters);
        $this->setParams($this, $headerParameters);

        $this->setSerializer();

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    protected function getUri()
    {
        $uri = $this->replacePathParameters(rtrim($this->uri, "/"));
        return rtrim($this->api_version, "/") . $uri;
    }

    /**
     * Get default parameters as an associative array.
     *
     * @return array
     */
    protected function getDefaultParameters()
    {
        return [];
    }

    /**
     * Get all parameters as an associative array.
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters->all();
    }

    /**
     * Get a single parameter.
     *
     * @param string $key The parameter key
     * @return mixed
     */
    protected function getParameter($key)
    {
        return $this->parameters->get($key);
    }

    /**
     * Set a single parameter
     *
     * @param string $key The parameter key
     * @param mixed $value The value to set
     * @return $this
     * @throws RuntimeException if a request parameter is modified after the request has been sent.
     */
    protected function setParameter($key, $value)
    {
        $this->parameters->set($key, $value);

        return $this;
    }

    /**
     * Get default parameters as an associative array.
     *
     * @return array
     */
    protected function getDefaultQueryParameters()
    {
        return [];
    }

    /**
     * Get all parameters as an associative array.
     *
     * @return array
     */
    public function getQueryParameters()
    {
        return $this->queryParameters->all();
    }

    /**
     * Get a single parameter.
     *
     * @param string $key The parameter key
     * @return mixed
     */
    protected function getQueryParameter($key)
    {
        return $this->queryParameters->get($key);
    }

    /**
     * Set a single parameter
     *
     * @param string $key The parameter key
     * @param mixed $value The value to set
     * @return $this
     * @throws RuntimeException if a request parameter is modified after the request has been sent.
     */
    protected function setQueryParameter($key, $value)
    {
        $this->queryParameters->set($key, $value);

        return $this;
    }

    /**
     * Get default parameters as an associative array.
     *
     * @return array
     */
    protected function getDefaultPathParameters()
    {
        return [];
    }

    /**
     * Get all parameters as an associative array.
     *
     * @return array
     */
    public function getPathParameters()
    {
        return $this->pathParameters->all();
    }

    /**
     * Get a single parameter.
     *
     * @param string $key The parameter key
     * @return mixed
     */
    protected function getPathParameter($key)
    {
        return $this->pathParameters->get($key);
    }

    /**
     * Set a single parameter
     *
     * @param string $key The parameter key
     * @param mixed $value The value to set
     * @return $this
     * @throws RuntimeException if a request parameter is modified after the request has been sent.
     */
    protected function setPathParameter($key, $value)
    {
        $this->pathParameters->set($key, $value);

        return $this;
    }

    /**
     * Get default header parameters as an associative array.
     *
     * @return array
     */
    protected function getDefaultHeaderParameters()
    {
        return [];
    }

    /**
     * Get extra headers as an associative array.
     *
     * @return array
     */
    protected function getExtraHeaders(): array
    {
        return [];
    }

    /**
     * Get all header parameters as an associative array.
     *
     * @return array
     */
    public function getHeaderParameters()
    {
        return $this->headerParameters->all();
    }

    /**
     * Get a header single parameter.
     *
     * @param string $key The parameter key
     * @return mixed
     */
    protected function getHeaderParameter($key)
    {
        return $this->headerParameters->get($key);
    }

    /**
     * Set a header single parameter
     *
     * @param string $key The parameter key
     * @param mixed $value The value to set
     * @return $this
     * @throws RuntimeException if a request parameter is modified after the request has been sent.
     */
    protected function setHeaderParameter($key, $value)
    {
        $this->headerParameters->set($key, $value);

        return $this;
    }

    /**
     * Get the query string
     *
     * @param array $queryParameters
     * @return string
     */
    protected function getQueryString(array $queryParameters = []): string
    {
        $this->setParams($this, $queryParameters);
        return http_build_query($this->getQueryOptionsResolver()->resolve($this->getQueryParameters()), null, '&', PHP_QUERY_RFC3986);
    }

    /**
     * Get the headers
     *
     * @param array $headersParameters
     * @return string
     */
    public function getHeaders(array $baseHeaders = []): array
    {
        return array_merge($this->getExtraHeaders(), $baseHeaders, $this->getHeadersOptionsResolver()->resolve($this->headerParameters));
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getPathOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getFormOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getHeadersOptionsResolver(): OptionsResolver
    {
        return new OptionsResolver();
    }

    /**
     * Send a GET request with query parameters.
     *
     * @param string $path           Request path.
     * @param array  $parameters     GET parameters.
     * @param array  $requestHeaders Request Headers.
     *
     * @return array|string
     */
    protected function get($path, array $parameters = [], array $requestHeaders = [], array $options = [])
    {
        if (null !== $qs = $this->getQueryString($parameters)) {
            $path .= '?'.$qs;
        }

        $response = $this->client->getHttpClient()->get($path, $requestHeaders, $options);

        return $response;
    }

    /**
     * Send a HEAD request with query parameters.
     *
     * @param string $path           Request path.
     * @param array  $parameters     HEAD parameters.
     * @param array  $requestHeaders Request headers.
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function head($path, array $parameters = [], array $requestHeaders = [], array $options = [])
    {
        if (null !== $qs = $this->getQueryString($parameters)) {
            $path .= '?'.$qs;
        }

        $response = $this->client->getHttpClient()->head($path, $requestHeaders, $options);

        return $response;
    }

    /**
     * Send a POST request with JSON-encoded parameters.
     *
     * @param string $path           Request path.
     * @param array  $body     POST parameters to be JSON encoded.
     * @param array  $requestHeaders Request headers.
     *
     * @return array|string
     */
    protected function post($path, $body, array $requestHeaders = [], array $options = [])
    {
        if (is_object($body)) {
            $body = $this->serializeJson($body);
        } else {
            $body = $this->createJsonBody($body);
        }
        if (null !== $qs = $this->getQueryString()) {
            $path .= '?'.$qs;
        }

        return $this->postRaw(
            $path,
            $body,
            $requestHeaders,
            $options
        );
    }

    /**
     * Send a POST request with raw data.
     *
     * @param string $path           Request path.
     * @param string $body           Request body.
     * @param array  $requestHeaders Request headers.
     *
     * @return array|string
     */
    protected function postRaw($path, $body, array $requestHeaders = [], array $options = [])
    {
        $response = $this->client->getHttpClient()->post(
            $path,
            $body,
            $requestHeaders,
            $options
        );

        return $response;
    }

    /**
     * Send a PATCH request with JSON-encoded parameters.
     *
     * @param string $path           Request path.
     * @param array  $parameters     POST parameters to be JSON encoded.
     * @param array  $requestHeaders Request headers.
     *
     * @return array|string
     */
    protected function patch($path, array $parameters = [], array $requestHeaders = [], array $options = [])
    {
        if (null !== $qs = $this->getQueryString($parameters)) {
            $path .= '?'.$qs;
        }

        $response = $this->client->getHttpClient()->patch(
            $path,
            $this->createJsonBody($parameters),
            $requestHeaders,
            $options
        );

        return ResponseMediator::getContent($response);
    }

    /**
     * Send a PUT request with JSON-encoded parameters.
     *
     * @param string $path           Request path.
     * @param array  $parameters     POST parameters to be JSON encoded.
     * @param array  $requestHeaders Request headers.
     *
     * @return array|string
     */
    protected function put($path, array $parameters = [], array $requestHeaders = [], array $options = [])
    {
        if (null !== $qs = $this->getQueryString($parameters)) {
            $path .= '?'.$qs;
        }

        $response = $this->client->getHttpClient()->put(
            $path,
            $this->createJsonBody($parameters),
            $requestHeaders,
            $options
        );

        return ResponseMediator::getContent($response);
    }

    /**
     * Send a DELETE request with JSON-encoded parameters.
     *
     * @param string $path           Request path.
     * @param array  $parameters     POST parameters to be JSON encoded.
     * @param array  $requestHeaders Request headers.
     *
     * @return array|string
     */
    protected function delete($path, array $parameters = [], array $requestHeaders = [], array $options = [])
    {
        if (null !== $qs = $this->getQueryString($parameters)) {
            $path .= '?'.$qs;
        }

        $response = $this->client->getHttpClient()->delete(
            $path,
            $this->createJsonBody($parameters),
            $requestHeaders,
            $options
        );

        return ResponseMediator::getContent($response);
    }

    /**
     * Send the request
     *
     * @return ResponseInterface
     */
    public function send()
    {
        $data = $this->getData();

        return $this->sendData($data);
    }

    /**
     * Create a JSON encoded version of an array of parameters.
     *
     * @param array $parameters Request parameters
     *
     * @return null|string
     */
    protected function createJsonBody(array $parameters)
    {
        return (count($parameters) === 0) ? null : json_encode($parameters, empty($parameters) ? JSON_FORCE_OBJECT : 0);
    }

    /**
     * Create a serializer instance
     *
     * @param array $parameters Request parameters
     *
     * @return null|string
     */
    protected function setSerializer()
    {
        if (class_exists($this->normalizer)) {
            $this->serializer = new Serializer($this->normalizer::create(), [new JsonEncoder(new JsonEncode(), new JsonDecode())]);
        }
    }

    /**
     * Get serializer instance
     *
     * @param array $parameters Request parameters
     *
     * @return null|string
     */
    protected function getSerializer()
    {
        return $this->serializer ?: null;
    }

    /**
     * Create a JSON encoded version of an array of parameters.
     *
     * @param array $parameters Request parameters
     *
     * @return null|string
     */
    protected function serialize($data, $format = 'json')
    {
        return $this->getSerializer()->serialize($data, $format);
    }

    /**
     * Create a JSON encoded version of an array of parameters.
     *
     * @param array $parameters Request parameters
     *
     * @return null|string
     */
    protected function serializeJson($data, $format = 'json')
    {
        return $this->serialize($data, $format);
    }

    /**
     * Create a JSON encoded version of an array of parameters.
     *
     * @param array $parameters Request parameters
     *
     * @return null|string
     */
    protected function deserialize($data, $type, $format = 'json')
    {
        return $this->getSerializer()->deserialize($data, $type, $format);
    }

    /**
     * Parse response
     *
     * @param ResponseInterface $response
     *
     * @return null|string
     */
    protected function parseResponse(ResponseInterface $response)
    {
        if ($this->fetchMode === Client::FETCH_OBJECT) {
            return $this->deserializeResponseBody((string) $response->getBody(), $response->getStatusCode());
        }

        if ($this->fetchMode === Client::FETCH_JSON) {
            return ResponseMediator::getContent($response);
        }

        if ($this->fetchMode === Client::FETCH_RESPONSE) {
            return $response;
        }

        throw new InvalidFetchModeException(sprintf('Fetch mode %s is not supported', $fetchMode));
    }

    /**
     * Deserialze Respose Body
     *
     *
     * @return Response|null
     */
    protected function deserializeResponseBody(string $body, int $status)
    {
        if (200 === $status) {
            return $this->deserialize($body, $this->responseType, 'json');
        }
    }

    /**
     * replace path parameters.
     *
     * @param array $path
     *
     * @return string
     */
    protected function replacePathParameters($path)
    {
        $pathReplacements = $this->getPathOptionsResolver()->resolve($this->getPathParameters());
        return str_replace(array_keys($pathReplacements), array_values($pathReplacements), $path);
    }

    /**
     * Initialize an object with a given array of parameters
     *
     * Parameters are automatically converted to camelCase. Any parameters which do
     * not match a setter on the target object are ignored.
     *
     * @param mixed $target     The object to set parameters on
     * @param array $parameters An array of parameters to set
     */
    protected function setParams($target, array $parameters = null)
    {
        if ($parameters) {
            foreach ($parameters as $key => $value) {
                $method = 'set'.str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $key)));
                if (method_exists($target, $method)) {
                    $target->$method($value);
                }
            }
        }
    }
}
