<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Exception\ThemeAirportLookupBadRequestException;
use Ammonkc\SabreApi\Exception\ThemeAirportLookupNotFoundException;
use Ammonkc\SabreApi\Model\ThemeAirportLookup\Normalizer\NormalizerFactory;
use Ammonkc\SabreApi\Model\ThemeAirportLookup\ThemeAirportLookupResponse;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The Theme Airport Lookup API returns a list of airport and
 * multi-airport city (MAC) codes that are associated with
 * a given Sabre travel theme.
 *
 * @link   https://beta.developer.sabre.com/sites/default/files/bfDmGdfJ.yaml OpenApi Spec
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
     * @var array
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
        //
    }

    /**
     * Accept data and sends it as a request.
     *
     * @param $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\ThemeAirportLookupBadRequestException
     * @throws \Ammonkc\SabreApi\Exception\ThemeAirportLookupNotFoundException
     *
     * @returns \Ammonkc\SabreApi\Model\ThemeAirportLookup\ThemeAirportLookupResponse|null
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
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getPathOptionsResolver(): OptionsResolver
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
