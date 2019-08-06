<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Exception\GeoAutocompleteBadRequestException;
use Ammonkc\SabreApi\Model\GeoAutocomplete\GeoAutocompleteResponse;
use Ammonkc\SabreApi\Model\GeoAutocomplete\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The Geo Autocomplete API returns a list of location predictions for
 * text-based geographic search queries.
 *
 * @link   https://beta.developer.sabre.com/sites/default/files/wJwSXwA3.yaml OpenApi Spec
 * @link   https://ptagent.com/api/v1/sabre/utilities/geoservices/autocomplete
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class GeoAutocomplete extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/lists/utilities/geoservices/autocomplete';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\GeoAutocomplete\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var \Ammonkc\SabreApi\Model\GeoAutocomplete\GeoAutocompleteResponse $responseType
     */
    protected $responseType = GeoAutocompleteResponse::class;

    /**
     * Available Themes
     *
     * @var array
     */
    protected $available_caetgories = [
        'AIR',
        'CITY',
        'RAIL',
    ];


    /**
     * Return the complete request object which will later be wrapped in
     * a \Academe\AuthorizeNet\Request\CreateTransaction object.
     *
     * @returns \Academe\AuthorizeNet\TransactionRequestInterface
     */
    protected function getData()
    {
        //
    }

    /**
     * Accept a data and sends it as a request.
     *
     * @param array $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\GeoAutocompleteBadRequestException
     *
     * @returns \Ammonkc\SabreApi\Model\GeoAutocomplete\GeoAutocompleteResponse
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
                throw new GeoAutocompleteBadRequestException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * Deserialze Respose Body
     *
     * @return \Ammonkc\SabreApi\Model\GeoAutocomplete\GeoAutocompleteResponse|null
     */
    protected function deserializeResponseBody(string $body, int $status)
    {
        if (200 === $status) {
            return $this->deserialize($body, $this->responseType, 'json');
        }
    }

    /**
     *
     * @var string $query The full word or substring to be autocompleted.
     * @var string $category Retrieves places that are associated with this specified category.
     * @var int $limit The number of search results to return per category.
     *
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['query', 'category', 'limit'])
                        ->setRequired(['query'])
                        ->setDefaults(['limit' => 5])
                        ->setAllowedTypes('query', ['string'])
                        ->setAllowedTypes('category', ['string'])
                        ->setAllowedTypes('limit', ['int'])
                        ->setAllowedValues('category', $this->available_caetgories);

        return $optionsResolver;
    }

    /**
     * Set query Value
     *
     * @param string $value
     * @return $this
     */
    public function setQuery($value)
    {
        return $this->setQueryParameter('query', $value);
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->getQueryParameter('query');
    }

    /**
     * Set category Value
     *
     * @param string $value
     * @return $this
     */
    public function setCategory($value)
    {
        return $this->setQueryParameter('category', $value);
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->getQueryParameter('category');
    }

    /**
     * Set limit Value
     *
     * @param int $value
     * @return $this
     */
    public function setLimit($value)
    {
        return $this->setQueryParameter('limit', (int) $value);
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->getQueryParameter('limit');
    }
}
