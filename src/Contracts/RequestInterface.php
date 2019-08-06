<?php

namespace Ammonkc\SabreApi\Contracts;

/**
 * Request interface.
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
interface RequestInterface
{
    /**
     * Constant representing a one way trip
     *
     * @var string
     */
    const ONE_WAY = 'OneWay';

    /**
     * Constant representing a round trip
     *
     * @var string
     */
    const ROUND_TRIP = 'RoundTrip';

    /**
     * Constant representing a multi city trip
     *
     * @var string
     */
    const MULTI_CITY = 'MultiCity';

    /**
     * Initialize this gateway with default parameters
     *
     * @param  array $parameters
     * @return $this
     */
    public function initialize(array $parameters = []);

    /**
     * Get all request parameters
     *
     * @return array
     */
    public function getParameters();

    /**
     * Get all request parameters
     *
     * @return array
     */
    public function getQueryParameters();

    /**
     * Get all request parameters
     *
     * @return array
     */
    public function getPathParameters();

    /**
     * Get all header parameters as an associative array.
     *
     * @return array
     */
    public function getHeaderParameters();

    /**
     * Set a fetchMode
     *
     * @param string $value
     * @return $this
     */
    public function setFetchMode($value);

    /**
     * Get a fetchMode
     *
     * @param string $fetchMode
     * @return mixed
     */
    public function getFetchMode();

    /**
     * Set a devMode
     *
     * @param bool $value
     * @return $this
     */
    public function setDevMode($value);

    /**
     * Get a devMode
     *
     * @param string $devMode
     * @return mixed
     */
    public function getDevMode();

    /**
     * Send the request
     *
     * @return ResponseInterface
     */
    public function send();

    /**
     * Accept a transaction and sends it as a request.
     *
     * @param $data TransactionRequestInterface
     * @returns TransactionResponse
     */
    public function sendData($data);
}
