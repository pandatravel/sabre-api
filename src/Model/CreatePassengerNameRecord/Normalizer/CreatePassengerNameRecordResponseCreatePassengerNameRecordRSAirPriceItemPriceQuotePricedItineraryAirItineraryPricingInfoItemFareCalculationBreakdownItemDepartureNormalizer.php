<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemDepartureNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemDeparture';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemDeparture;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemDeparture();
        if (property_exists($data, 'CityCode')) {
            $object->setCityCode($data->{'CityCode'});
        }
        if (property_exists($data, 'AirportCode')) {
            $object->setAirportCode($data->{'AirportCode'});
        }
        if (property_exists($data, 'SideTripIndicator')) {
            $object->setSideTripIndicator($data->{'SideTripIndicator'});
        }
        if (property_exists($data, 'AirlineCode')) {
            $object->setAirlineCode($data->{'AirlineCode'});
        }
        if (property_exists($data, 'GenericInd')) {
            $object->setGenericInd($data->{'GenericInd'});
        }
        if (property_exists($data, 'GlobalInd')) {
            $object->setGlobalInd($data->{'GlobalInd'});
        }
        if (property_exists($data, 'ArrivalCityCode')) {
            $object->setArrivalCityCode($data->{'ArrivalCityCode'});
        }
        if (property_exists($data, 'ArrivalAirportCode')) {
            $object->setArrivalAirportCode($data->{'ArrivalAirportCode'});
        }
        if (property_exists($data, 'InfantFareConstructionCity')) {
            $object->setInfantFareConstructionCity($data->{'InfantFareConstructionCity'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCityCode()) {
            $data->{'CityCode'} = $object->getCityCode();
        }
        if (null !== $object->getAirportCode()) {
            $data->{'AirportCode'} = $object->getAirportCode();
        }
        if (null !== $object->getSideTripIndicator()) {
            $data->{'SideTripIndicator'} = $object->getSideTripIndicator();
        }
        if (null !== $object->getAirlineCode()) {
            $data->{'AirlineCode'} = $object->getAirlineCode();
        }
        if (null !== $object->getGenericInd()) {
            $data->{'GenericInd'} = $object->getGenericInd();
        }
        if (null !== $object->getGlobalInd()) {
            $data->{'GlobalInd'} = $object->getGlobalInd();
        }
        if (null !== $object->getArrivalCityCode()) {
            $data->{'ArrivalCityCode'} = $object->getArrivalCityCode();
        }
        if (null !== $object->getArrivalAirportCode()) {
            $data->{'ArrivalAirportCode'} = $object->getArrivalAirportCode();
        }
        if (null !== $object->getInfantFareConstructionCity()) {
            $data->{'InfantFareConstructionCity'} = $object->getInfantFareConstructionCity();
        }

        return $data;
    }
}
