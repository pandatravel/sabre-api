<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\AircraftEquipmentLookupBadRequestException;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Model\AircraftEquipmentLookup\AircraftEquipmentLookupResponse;
use Ammonkc\SabreApi\Model\AircraftEquipmentLookup\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The Aircraft Equipment Lookup API returns the aircraft name
 * associated with a specified IATA aircraft equipment code.
 *
 * @link   https://ptpkg.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class AircraftEquipmentLookup extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/lists/utilities/aircraft/equipment';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\AircraftEquipmentLookup\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Model\AircraftEquipmentLookup\AircraftEquipmentLookupResponse $responseType
     */
    protected $responseType = AircraftEquipmentLookupResponse::class;


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
     * Accepts data and sends it as a request.
     *
     * @param $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\AircraftEquipmentLookupBadRequestException
     *
     * @return \Ammonkc\SabreApi\Model\AircraftEquipmentLookup\AircraftEquipmentLookupResponse|null
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
                throw new AircraftEquipmentLookupBadRequestException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['aircraftcode'])
                        ->setRequired([])
                        ->setDefaults([])
                        ->setAllowedTypes('aircraftcode', ['string']);

        return $optionsResolver;
    }

    /**
     * Deserialze Respose Body
     *
     * @throws \Ammonkc\SabreApi\Exception\AircraftEquipmentLookupBadRequestException
     *
     * @return \Ammonkc\SabreApi\Model\AircraftEquipmentLookup\AircraftEquipmentLookupResponse|null
     */
    protected function deserializeResponseBody(string $body, int $status)
    {
        if (200 === $status) {
            return $this->deserialize($body, $this->responseType, 'json');
        }
    }

    /**
     * 3-character IATA aircraft equipment code.
     *
     * Multiple values are accepted, delimited with commas.
     * Default: all codes and their corresponding names.
     *
     * @param string $value
     * @return $this
     */
    public function setAircraftcode($value)
    {
        if (is_array($value)) {
            $value = implode(',', strtoupper($value));
        }
        return $this->setQueryParameter('aircraftcode', $value);
    }

    /**
     * @return string
     */
    public function getAircraftcode()
    {
        return $this->getQueryParameter('aircraftcode');
    }
}
