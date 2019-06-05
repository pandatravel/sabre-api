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
