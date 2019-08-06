<?php

namespace Ammonkc\SabreApi\Model\CityPairLookup\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CityPairLookupResponseOriginDestinationLocationsItemOriginLocationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CityPairLookup\\CityPairLookupResponseOriginDestinationLocationsItemOriginLocation';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CityPairLookup\CityPairLookupResponseOriginDestinationLocationsItemOriginLocation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CityPairLookup\CityPairLookupResponseOriginDestinationLocationsItemOriginLocation();
        if (property_exists($data, 'AirportCode')) {
            $object->setAirportCode($data->{'AirportCode'});
        }
        if (property_exists($data, 'AirportName')) {
            $object->setAirportName($data->{'AirportName'});
        }
        if (property_exists($data, 'CityName')) {
            $object->setCityName($data->{'CityName'});
        }
        if (property_exists($data, 'CountryCode')) {
            $object->setCountryCode($data->{'CountryCode'});
        }
        if (property_exists($data, 'CountryName')) {
            $object->setCountryName($data->{'CountryName'});
        }
        if (property_exists($data, 'RegionName')) {
            $object->setRegionName($data->{'RegionName'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAirportCode()) {
            $data->{'AirportCode'} = $object->getAirportCode();
        }
        if (null !== $object->getAirportName()) {
            $data->{'AirportName'} = $object->getAirportName();
        }
        if (null !== $object->getCityName()) {
            $data->{'CityName'} = $object->getCityName();
        }
        if (null !== $object->getCountryCode()) {
            $data->{'CountryCode'} = $object->getCountryCode();
        }
        if (null !== $object->getCountryName()) {
            $data->{'CountryName'} = $object->getCountryName();
        }
        if (null !== $object->getRegionName()) {
            $data->{'RegionName'} = $object->getRegionName();
        }

        return $data;
    }
}
