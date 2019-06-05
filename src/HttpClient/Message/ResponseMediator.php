<?php

namespace Ammonkc\SabreApi\HttpClient\Message;

use Ammonkc\SabreApi\Exception\ApiLimitExceedException;
use Psr\Http\Message\ResponseInterface;

class ResponseMediator
{
    /**
     * @param ResponseInterface $response
     *
     * @return array|string
     */
    public static function getContent(ResponseInterface $response)
    {
        $body = $response->getBody()->__toString();
        if (strpos($response->getHeaderLine('Content-Type'), 'application/json') === 0) {
            // The body will be JSON, but *may* have a Byte Order Mark (BOM) prefix.
            // Remove the BOM.
            $body = preg_replace('/^[\x00-\x1F\x80-\xFF]{1,3}/', '', $body);
            $content = json_decode($body, true);
            if (JSON_ERROR_NONE === json_last_error()) {
                return $content;
            }
        }

        return $body;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return array|string
     */
    public static function getBody(ResponseInterface $response)
    {
        $content = $this->getContent($response);

        return $content['body'];
    }

    /**
     * @param ResponseInterface $response
     *
     * @return array|null
     */
    public static function getPagination(ResponseInterface $response)
    {
        if (!$response->hasHeader('Link')) {
            return null;
        }

        $header = self::getHeader($response, 'Link');
        $pagination = [];
        foreach (explode(',', $header) as $link) {
            preg_match('/<(.*)>; rel="(.*)"/i', trim($link, ','), $match);

            if (3 === count($match)) {
                $pagination[$match[2]] = $match[1];
            }
        }

        return $pagination;
    }

    /**
     * @param ResponseInterface $response
     *
     * @return null|string
     */
    public static function getApiLimit(ResponseInterface $response)
    {
        $remainingCalls = self::getHeader($response, 'X-RateLimit-Remaining');

        if (null !== $remainingCalls && 1 > $remainingCalls) {
            throw new ApiLimitExceedException($remainingCalls);
        }

        return $remainingCalls;
    }

    /**
     * Get the value for a single header
     * @param ResponseInterface $response
     * @param string $name
     *
     * @return string|null
     */
    public static function getHeader(ResponseInterface $response, $name)
    {
        $headers = $response->getHeader($name);

        return array_shift($headers);
    }

    /**
     * Strip a Byte Order Mark (BOM) from the start of a string.
     *
     * @param string $string A string with a potential BOM prefix.
     * @return string The string with the BOM removed.
     */
    public function removeBOM($string)
    {
        return preg_replace('/^[\x00-\x1F\x80-\xFF]{1,3}/', '', $string);
    }
}
