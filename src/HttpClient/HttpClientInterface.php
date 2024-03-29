<?php

namespace Ammonkc\SabreApi\HttpClient;

use Ammonkc\SabreApi\Exception\InvalidArgumentException;
use GuzzleHttp\Psr7\Response;

/**
 * Performs requests on Sabre API. API documentation should be self-explanatory.
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
interface HttpClientInterface
{
    /**
     * Send a GET request.
     *
     * @param string $path       Request path
     * @param array  $parameters GET Parameters
     * @param array  $headers    Reconfigure the request headers for this call only
     *
     * @return Response
     */
    public function get($path, array $parameters = [], array $headers = []);

    /**
     * Send a POST request.
     *
     * @param string $path    Request path
     * @param mixed  $body    Request body
     * @param array  $headers Reconfigure the request headers for this call only
     *
     * @return Response
     */
    public function post($path, $body = null, array $headers = []);

    /**
     * Send a PATCH request.
     *
     * @param string $path    Request path
     * @param mixed  $body    Request body
     * @param array  $headers Reconfigure the request headers for this call only
     *
     * @internal param array $parameters Request body
     *
     * @return Response
     */
    public function patch($path, $body = null, array $headers = []);

    /**
     * Send a PUT request.
     *
     * @param string $path    Request path
     * @param mixed  $body    Request body
     * @param array  $headers Reconfigure the request headers for this call only
     *
     * @return Response
     */
    public function put($path, $body, array $headers = []);

    /**
     * Send a DELETE request.
     *
     * @param string $path    Request path
     * @param mixed  $body    Request body
     * @param array  $headers Reconfigure the request headers for this call only
     *
     * @return Response
     */
    public function delete($path, $body = null, array $headers = []);

    /**
     * Send a request to the server, receive a response,
     * decode the response and returns an associative array.
     *
     * @param string $path       Request path
     * @param mixed  $body       Request body
     * @param string $httpMethod HTTP method to use
     * @param array  $headers    Request headers
     *
     * @return Response
     */
    public function request($path, $body, $httpMethod = 'GET', array $headers = []);

    /**
     * Change an option value.
     *
     * @param string $name  The option name
     * @param mixed  $value The value
     *
     * @throws InvalidArgumentException
     */
    public function setOption($name, $value);

    /**
     * Set HTTP headers.
     *
     * @param array $headers
     */
    public function setHeaders(array $headers);

    /**
     * Authenticate a user for all next requests.
     *
     * @param string      $tokenOrLogin GitHub private token/username/client ID
     * @param null|string $password     GitHub password/secret (optionally can contain $authMethod)
     * @param null|string $authMethod   One of the AUTH_* class constants
     *
     * @throws InvalidArgumentException If no authentication method was given
     */
    public function authenticate($tokenOrLogin, $password, $authMethod);
}
