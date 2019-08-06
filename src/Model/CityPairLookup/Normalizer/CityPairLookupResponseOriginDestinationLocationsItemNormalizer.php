<?php

namespace Ammonkc\SabreApi\Model\CityPairLookup\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CityPairLookupResponseOriginDestinationLocationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CityPairLookup\\CityPairLookupResponseOriginDestinationLocationsItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CityPairLookup\CityPairLookupResponseOriginDestinationLocationsItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CityPairLookup\CityPairLookupResponseOriginDestinationLocationsItem();
        if (property_exists($data, 'OriginDestinationLocations')) {
            $object->setOriginDestinationLocations($data->{'OriginDestinationLocations'});
        }
        if (property_exists($data, 'OriginLocation')) {
            $object->setOriginLocation($this->denormalizer->denormalize($data->{'OriginLocation'}, 'Ammonkc\\SabreApi\\Model\\CityPairLookup\\CityPairLookupResponseOriginDestinationLocationsItemOriginLocation', 'json', $context));
        }
        if (property_exists($data, 'DestinationLocation')) {
            $object->setDestinationLocation($this->denormalizer->denormalize($data->{'DestinationLocation'}, 'Ammonkc\\SabreApi\\Model\\CityPairLookup\\CityPairLookupResponseOriginDestinationLocationsItemDestinationLocation', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getOriginDestinationLocations()) {
            $data->{'OriginDestinationLocations'} = $object->getOriginDestinationLocations();
        }
        if (null !== $object->getOriginLocation()) {
            $data->{'OriginLocation'} = $this->normalizer->normalize($object->getOriginLocation(), 'json', $context);
        }
        if (null !== $object->getDestinationLocation()) {
            $data->{'DestinationLocation'} = $this->normalizer->normalize($object->getDestinationLocation(), 'json', $context);
        }

        return $data;
    }
}
