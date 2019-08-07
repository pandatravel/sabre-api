<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemBranchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemBranch';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemBranch';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemBranch();
        if (property_exists($data, 'PCC') && $data->{'PCC'} !== null) {
            $object->setPCC($data->{'PCC'});
        }
        if (property_exists($data, 'CountryOfShipRegistry') && $data->{'CountryOfShipRegistry'} !== null) {
            $object->setCountryOfShipRegistry($data->{'CountryOfShipRegistry'});
        }
        if (property_exists($data, 'FirstJointCarrier') && $data->{'FirstJointCarrier'} !== null) {
            $object->setFirstJointCarrier($data->{'FirstJointCarrier'});
        }
        if (property_exists($data, 'SecondJointCarrier') && $data->{'SecondJointCarrier'} !== null) {
            $object->setSecondJointCarrier($data->{'SecondJointCarrier'});
        }
        if (property_exists($data, 'IATAAuthorizedCarrier') && $data->{'IATAAuthorizedCarrier'} !== null) {
            $object->setIATAAuthorizedCarrier($data->{'IATAAuthorizedCarrier'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPCC()) {
            $data->{'PCC'} = $object->getPCC();
        }
        if (null !== $object->getCountryOfShipRegistry()) {
            $data->{'CountryOfShipRegistry'} = $object->getCountryOfShipRegistry();
        }
        if (null !== $object->getFirstJointCarrier()) {
            $data->{'FirstJointCarrier'} = $object->getFirstJointCarrier();
        }
        if (null !== $object->getSecondJointCarrier()) {
            $data->{'SecondJointCarrier'} = $object->getSecondJointCarrier();
        }
        if (null !== $object->getIATAAuthorizedCarrier()) {
            $data->{'IATAAuthorizedCarrier'} = $object->getIATAAuthorizedCarrier();
        }

        return $data;
    }
}
