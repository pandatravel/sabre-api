<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\AdvancedCalendarSearchByTagIdBadRequestException;
use Ammonkc\SabreApi\Exception\AdvancedCalendarSearchByTagIdNotFoundException;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchByTagIDResponse;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The Advanced Calendar Search API returns the lowest published fares and flight itineraries
 * for a given city pair.
 *
 * The API uses the Travel Insight engine to retrieve up to 192 days
 * of shopped fare data for a given city pair and length of stay available in the Sabre®
 * cache.
 *
 * Multiple search preferences are available to sort and filter results,
 * including the ability to:
 *
 * limit flight options to online itineraries only, include/exclude carriers and specify
 * particular days of the week; specify multiple lengths of stay, a maximum number
 * of stops; connecting-flight time or a departure/arrival time window on each
 * flight leg.
 *
 * @link   https://beta.developer.sabre.com/sites/default/files/lUDUUr0S.yaml OpenApi Spec
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class AdvancedCalendarSearchByTagId extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/shop/calendar/flights/tags/{tagid}';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v4.3.0';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\AdvancedCalendarSearch\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchByTagIDResponse $responseType
     */
    protected $responseType = AdvancedCalendarSearchByTagIDResponse::class;

    /**
     * Return the complete request object|array
     *
     * @returns array
     */
    protected function getData()
    {
        //
    }

    /**
     * Accept data and sends it as a request.
     *
     * @param $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\AdvancedCalendarSearchByTagIdBadRequestException
     * @throws \Ammonkc\SabreApi\Exception\AdvancedCalendarSearchByTagIdNotFoundException
     *
     * @return \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchByTagIDResponse|null
     */
    public function sendData($data)
    {
        try {
            $response = $this->get($this->getUri());
        } catch (ConnectException $e) {
            if ($e->getHandlerContext()['errno'] === 28) {
                throw new ApiTimedOutException($e);
            }
            throw $e;
        } catch (ClientException $e) {
            if ($e->getCode() === 403) {
                throw new ApiNotAuthorizedException($e);
            }
            throw $e;
        } catch (RequestException $e) {
            if ($e->getCode() === 400) {
                throw new AdvancedCalendarSearchByTagIdBadRequestException($e);
            }
            if ($e->getCode() === 404) {
                throw new AdvancedCalendarSearchByTagIdNotFoundException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * Deserialze Respose Body
     *
     * @return \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchByTagIDResponse|null
     */
    protected function deserializeResponseBody(string $body, int $status)
    {
        if (200 === $status) {
            return $this->deserialize($body, $this->responseType, 'json');
        }
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getPathOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getPathOptionsResolver();
        $optionsResolver->setDefined(['{tagid}'])
                        ->setRequired(['{tagid}'])
                        ->setDefaults([])
                        ->setAllowedTypes('{tagid}', ['string']);

        return $optionsResolver;
    }

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['view'])
                        ->setRequired([])
                        ->setDefaults([])
                        ->setAllowedTypes('view', ['string']);

        return $optionsResolver;
    }

    /**
     * Set {tagid} Value
     *
     * @param string $value
     * @return $this
     */
    public function setTagid($value)
    {
        return $this->setPathParameter('{tagid}', $value);
    }

    /**
     * @return string
     */
    public function getTagid()
    {
        return $this->getPathParameter('{tagid}');
    }

    /**
     * Set view Value
     *
     * @param string $value
     * @return $this
     */
    public function setView($value)
    {
        return $this->setQueryParameter('view', $value);
    }

    /**
     * @return string
     */
    public function getView()
    {
        return $this->getQueryParameter('view');
    }
}
