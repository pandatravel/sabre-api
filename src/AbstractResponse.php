<?php

namespace Ammonkc\SabreApi;

use Academe\AuthorizeNet\Response\Response;
use Ammonkc\SabreApi\Contracts\ResponseInterface;
use Symfony\Component\PropertyAccess\Exception\ExceptionInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessor;

/**
 * The features of the basic envelope for all responses.
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
abstract class AbstractResponse extends AbstractModel implements ResponseInterface
{
    /**
     * Top-level response result code values.
     */
    const RESULT_CODE_OK    = 'OK';
    const RESULT_CODE_ERROR = 'ERROR';

    /**
     * The reponse data parsed into nested value objects.
     */
    protected $parsedData;

    /**
     * @var Symfony\Component\PropertyAccess\PropertyAccess $accessor
     */
    protected $accessor;

    /**
     * Get a value from the parsed data, based on a path.
     * e.g. 'object.arrayProperty[0].stringProperty'.
     * Returns null if the dependency path is broken at any point.
     * See http://symfony.com/doc/current/components/property_access.html
     */
    public function getValue($path)
    {
        $accessor = $this->getAccessor();

        // If the accessor has not already been set, then create the default
        // accessor now.
        if (empty($accessor)) {
            $accessor = PropertyAccess::createPropertyAccessorBuilder()
                ->enableMagicCall()
                ->disableExceptionOnInvalidIndex()
                ->getPropertyAccessor();

            $this->setAccessor($accessor);
        }

        try {
            // Get the property using its path.
            // If the path breaks at any point, an exception will be
            // thrown, but we just want to return a null.

            return $accessor->getValue($this->getParsedData(), $path);
        } catch (ExceptionInterface $e) {
            return null;
        }
    }

    /**
     * Set the property accessor helper.
     */
    public function setAccessor(PropertyAccessor $value)
    {
        $this->accessor = $value;
    }

    /**
     * Get the property accessor helper.
     */
    public function getAccessor()
    {
        return $this->accessor;
    }

    /**
     * Get the transaction message text from the response envelope.
     * Inheriting responses will normally refine this to look deeper into
     * the response body.
     */
    public function getMessage()
    {
        return $this->getResponseMessage();
    }

    /**
     * Return the message code from the response envelope.
     * Inheriting responses will normally refine this to look deeper into
     * the response body.
     */
    public function getCode()
    {
        return $this->getResponseCode();
    }

    /**
     * Return the message code from the response envelope.
     * Inheriting responses will normally refine this to look deeper into
     * the response body.
     */
    public function getData()
    {
        return $this->getResponseCode();
    }

    /**
     * Tell us whether the response was successful overall.
     * This is just about the response as a whole; the response may
     * still represent a failed transaction.
     */
    public function responseIsSuccessful()
    {
        return $this->getReasonPhrase() === self::RESULT_CODE_OK;
    }

    public function isSuccessful()
    {
        return $this->getReasonPhrase() === self::RESULT_CODE_OK;
    }
}
