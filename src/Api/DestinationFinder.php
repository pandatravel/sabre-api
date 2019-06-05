<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Client;
use Ammonkc\SabreApi\Exception\DestinationFinderBadRequestException;
use Ammonkc\SabreApi\Exception\DestinationFinderNotFoundException;
use Ammonkc\SabreApi\Exception\DestinationFinderRequestEntityTooLargeException;
use Ammonkc\SabreApi\Model\DestinationFinder\DestinationFinderResponse;
use Ammonkc\SabreApi\Model\DestinationFinder\Normalizer\NormalizerFactory;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The Airline Lookup API returns the airline name associated with
 * a specified IATA airline code. If no code is specified, the
 * API returns all codes and their corresponding names.
 *
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class DestinationFinder extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/shop/flights/fares';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v2';

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
    protected $responseType = DestinationFinderResponse::class;

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
        return $this->getParameters();
    }

    /**
     * Accept a transaction and sends it as a request.
     *
     * @param $data
     *
     * @returns @return \Ammonkc\SabreApi\Model\DestinationFinder\DestinationFinderResponse|null
     */
    public function sendData($data)
    {
        $response = $this->get($this->getUri(), $data);

        return $this->parseResponse($response, Client::FETCH_JSON);
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['origin', 'departuredate', 'returndate', 'lengthofstay', 'earliestdeparturedate', 'latestdeparturedate', 'location', 'minfare', 'maxfare', 'pointofsalecountry', 'region', 'theme', 'topdestinations', 'pricepermile'])
                        ->setRequired(['origin'])
                        ->setDefaults(['pointofsalecountry' => 'US'])
                        ->setAllowedTypes('origin', ['string'])
                        ->setAllowedTypes('departuredate', ['string'])
                        ->setAllowedTypes('returndate', ['string'])
                        ->setAllowedTypes('lengthofstay', ['string'])
                        ->setAllowedTypes('earliestdeparturedate', ['string'])
                        ->setAllowedTypes('latestdeparturedate', ['string'])
                        ->setAllowedTypes('location', ['string'])
                        ->setAllowedTypes('minfare', ['float'])
                        ->setAllowedTypes('maxfare', ['float'])
                        ->setAllowedTypes('pointofsalecountry', ['string'])
                        ->setAllowedTypes('region', ['string'])
                        ->setAllowedTypes('theme', ['string'])
                        ->setAllowedValues('theme', $this->available_themes)
                        ->setAllowedTypes('topdestinations', ['float'])
                        ->setAllowedTypes('pricepermile', ['float']);

        return $optionsResolver;
    }

    /**
     * Deserialze Respose Body
     *
     * @throws \Ammonkc\SabreApi\Exception\DestinationFinderBadRequestException
     * @throws \Ammonkc\SabreApi\Exception\DestinationFinderNotFoundException
     * @throws \Ammonkc\SabreApi\Exception\DestinationFinderRequestEntityTooLargeException
     *
     * @return \Ammonkc\SabreApi\Model\DestinationFinder\DestinationFinderResponse|null
     */
    protected function deserializeResponseBody(string $body, int $status)
    {
        if (200 === $status) {
            return $this->deserialize($body, $this->responseType, 'json');
        }
        if (400 === $status) {
            throw new DestinationFinderBadRequestException();
        }
        if (404 === $status) {
            throw new DestinationFinderNotFoundException();
        }
        if (413 === $status) {
            throw new DestinationFinderRequestEntityTooLargeException();
        }
    }

    /**
     * Set origin Value
     *
     * @param string $value
     * @return $this
     */
    public function setOrigin($value)
    {
        return $this->setQueryParameter('origin', $value);
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->getQueryParameter('origin');
    }

    /**
     * Set departuredate Value
     *
     * @param string $value
     * @return $this
     */
    public function setDeparturedate($value)
    {
        return $this->setQueryParameter('departuredate', $value);
    }

    /**
     * @return string
     */
    public function getDeparturedate()
    {
        return $this->getQueryParameter('departuredate');
    }

    /**
     * Set returndate Value
     *
     * @param string $value
     * @return $this
     */
    public function setReturndate($value)
    {
        return $this->setQueryParameter('returndate', $value);
    }

    /**
     * @return string
     */
    public function getReturndate()
    {
        return $this->getQueryParameter('returndate');
    }

    /**
     * Set lengthofstay Value
     *
     * @param string $value
     * @return $this
     */
    public function setLengthofstay($value)
    {
        if (is_array($value)) {
            $value = implode(',', $value);
        }
        return $this->setQueryParameter('lengthofstay', $value);
    }

    /**
     * @return string
     */
    public function getLengthofstay()
    {
        return $this->getQueryParameter('lengthofstay');
    }

    /**
     * Set earliestdeparturedate Value
     *
     * @param string $value
     * @return $this
     */
    public function setEarliestdeparturedate($value)
    {
        return $this->setQueryParameter('earliestdeparturedate', $value);
    }

    /**
     * @return string
     */
    public function getEarliestdeparturedate()
    {
        return $this->getQueryParameter('earliestdeparturedate');
    }

    /**
     * Set latestdeparturedate Value
     *
     * @param string $value
     * @return $this
     */
    public function setLatestdeparturedate($value)
    {
        return $this->setQueryParameter('latestdeparturedate', $value);
    }

    /**
     * @return string
     */
    public function getLatestdeparturedate()
    {
        return $this->getQueryParameter('latestdeparturedate');
    }

    /**
     * Set location Value
     *
     * @param string $value
     * @return $this
     */
    public function setLocation($value)
    {
        return $this->setQueryParameter('location', $value);
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->getQueryParameter('location');
    }

    /**
     * Set minfare Value
     *
     * @param string $value
     * @return $this
     */
    public function setMinfare($value)
    {
        return $this->setQueryParameter('minfare', $value);
    }

    /**
     * @return string
     */
    public function getMinfare()
    {
        return $this->getQueryParameter('minfare');
    }

    /**
     * Set maxfare Value
     *
     * @param string $value
     * @return $this
     */
    public function setMaxfare($value)
    {
        return $this->setQueryParameter('maxfare', $value);
    }

    /**
     * @return string
     */
    public function getMaxfare()
    {
        return $this->getQueryParameter('maxfare');
    }

    /**
     * Set pointofsalecountry Value
     *
     * @param string $value
     * @return $this
     */
    public function setPointofsalecountry($value)
    {
        return $this->setQueryParameter('pointofsalecountry', $value);
    }

    /**
     * @return string
     */
    public function getPointofsalecountry()
    {
        return $this->getQueryParameter('pointofsalecountry');
    }

    /**
     * Set region Value
     *
     * @param string $value
     * @return $this
     */
    public function setRegion($value)
    {
        return $this->setQueryParameter('region', $value);
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->getQueryParameter('region');
    }

    /**
     * Set theme Value
     *
     * @param string $value
     * @return $this
     */
    public function setTheme($value)
    {
        return $this->setQueryParameter('theme', $value);
    }

    /**
     * @return string
     */
    public function getTheme()
    {
        return $this->getQueryParameter('theme');
    }

    /**
     * Set topdestinations Value
     *
     * @param string $value
     * @return $this
     */
    public function setTopdestinations($value)
    {
        return $this->setQueryParameter('topdestinations', $value);
    }

    /**
     * @return string
     */
    public function getTopdestinations()
    {
        return $this->getQueryParameter('topdestinations');
    }

    /**
     * Set pricepermile Value
     *
     * @param string $value
     * @return $this
     */
    public function setPricepermile($value)
    {
        return $this->setQueryParameter('pricepermile', $value);
    }

    /**
     * @return string
     */
    public function getPricepermile()
    {
        return $this->getQueryParameter('pricepermile');
    }
}
