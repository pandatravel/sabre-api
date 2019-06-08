<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\AirlinesAlliancesLookupBadRequestException;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Model\AirlinesAlliancesLookup\AirlinesAlliancesLookupResponse;
use Ammonkc\SabreApi\Model\AirlinesAlliancesLookup\Normalizer\NormalizerFactory;
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
class AirlinesAlliancesLookup extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/lists/utilities/airlines/alliances';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\AirlinesAlliancesLookup\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Model\AirlinesAlliancesLookup\AirlinesAlliancesLookupResponse $responseType
     */
    protected $responseType = AirlinesAlliancesLookupResponse::class;

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
     * Accepts data and sends it as a request.
     *
     * @param $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\AirlinesAlliancesLookupBadRequestException
     *
     * @return \Ammonkc\SabreApi\Model\AirlinesAlliancesLookup\AirlinesAlliancesLookupResponse|null
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
                throw new AirlinesAlliancesLookupBadRequestException($e);
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
        $optionsResolver->setDefined(['alliancecode'])
                        ->setRequired([])
                        ->setDefaults([])
                        ->setAllowedTypes('alliancecode', ['string']);

        return $optionsResolver;
    }

    /**
     * Deserialze Respose Body
     *
     * @throws \Ammonkc\SabreApi\Exception\AircraftEquipmentLookupBadRequestException
     *
     * @return \Ammonkc\SabreApi\Model\AirlinesAlliancesLookup\AirlinesAlliancesLookupResponse|null
     */
    protected function deserializeResponseBody(string $body, int $status)
    {
        if (200 === $status) {
            return $this->deserialize($body, $this->responseType, 'json');
        }
    }

    /**
     * 2-character airline alliance group code.
     *
     * Multiple values are accepted.
     * Default: All airline alliance groups and their corresponding member information.
     * *A (Star Alliance™), *O (oneworld®), *S (SkyTeam).
     *
     * Available values : *A, *O, *S
     *
     * @param string $value
     * @return $this
     */
    public function setAlliancecode($value)
    {
        if (is_array($value)) {
            $value = implode(',', $value);
        }
        return $this->setQueryParameter('alliancecode', strtoupper($value));
    }

    /**
     * @return string
     */
    public function getAlliancecode()
    {
        return $this->getQueryParameter('alliancecode');
    }
}
