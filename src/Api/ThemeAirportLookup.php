<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ThemeAirportLookupBadRequestException;
use Ammonkc\SabreApi\Exception\ThemeAirportLookupNotFoundException;
use Ammonkc\SabreApi\Model\ThemeAirportLookup\Normalizer\NormalizerFactory;
use Ammonkc\SabreApi\Model\ThemeAirportLookup\ThemeAirportLookupResponse;
use GuzzleHttp\Exception\RequestException;

/**
 * The Theme Airport Lookup API returns a list of airport and
 * multi-airport city (MAC) codes that are associated with
 * a given Sabre travel theme.
 *
 * @link   https://ptpkg.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class ThemeAirportLookup extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/lists/supported/shop/themes/{theme}';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\DestinationFinder\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Contracts\ResponseInterface $responseType
     */
    protected $responseType = ThemeAirportLookupResponse::class;


    /**
     * Available Themes
     *
     * @var string
     */
    protected $available_themes = [
        'BEACH',
        'CARIBBEAN',
        'DISNEY',
        'GAMBLING',
        'HISTORIC',
        'MOUNTAINS',
        'NATIONAL-PARKS',
        'OUTDOORS',
        'ROMANTIC',
        'SHOPPING',
        'SKIING',
        'THEME-PARK',
    ];

    /**
     * Return the complete request object|array
     *
     * @returns array
     */
    protected function getData()
    {
        return $this->getPathParameters();
    }

    /**
     * Accept data and sends it as a request.
     *
     * @param $data
     *
     * @returns \Ammonkc\SabreApi\Model\ThemeAirportLookup\ThemeAirportLookupResponse|null
     */
    public function sendData($data)
    {
        try {
            $response = $this->get($this->getUri());
        } catch (RequestException $e) {
            if ($e->getCode() === 400) {
                throw new ThemeAirportLookupBadRequestException($e);
            }
            if ($e->getCode() === 404) {
                throw new ThemeAirportLookupNotFoundException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * Deserialze Respose Body
     *
     * @throws \Ammonkc\SabreApi\Exception\ThemeAirportLookupBadRequestException
     * @throws \Ammonkc\SabreApi\Exception\ThemeAirportLookupNotFoundException
     *
     * @return \Ammonkc\SabreApi\Model\ThemeAirportLookup\ThemeAirportLookupResponse|null
     */
    protected function deserializeResponseBody(string $body, int $status)
    {
        if (200 === $status) {
            return $this->deserialize($body, $this->responseType, 'json');
        }
        if (400 === $status) {
            throw new ThemeAirportLookupBadRequestException();
        }
        if (404 === $status) {
            throw new ThemeAirportLookupNotFoundException();
        }
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getPathOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getPathOptionsResolver();
        $optionsResolver->setDefined(['{theme}'])
                        ->setRequired([])
                        ->setDefaults([])
                        ->setAllowedTypes('{theme}', ['string'])
                        ->setAllowedValues('{theme}', $this->available_themes);

        return $optionsResolver;
    }

    /**
     * Value must be one of $available_themes
     *
     * @param string $value
     * @return $this
     */
    public function setTheme($value)
    {
        return $this->setPathParameter('{theme}', strtoupper($value));
    }

    /**
     * @return string
     */
    public function getTheme()
    {
        return $this->getPathParameter('{theme}');
    }
}
