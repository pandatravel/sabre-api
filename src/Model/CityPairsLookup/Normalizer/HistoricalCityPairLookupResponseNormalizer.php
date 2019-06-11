<?php

namespace Ammonkc\SabreApi\Model\CityPairsLookup\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HistoricalCityPairLookupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CityPairsLookup\\HistoricalCityPairLookupResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CityPairsLookup\HistoricalCityPairLookupResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CityPairsLookup\HistoricalCityPairLookupResponse();
        if (property_exists($data, 'Links')) {
            $values = [];
            foreach ($data->{'Links'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CityPairsLookup\\CommonLinksItem', 'json', $context);
            }
            $object->setLinks($values);
        }
        if (property_exists($data, 'OriginDestinationLocations')) {
            $values_1 = [];
            foreach ($data->{'OriginDestinationLocations'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\CityPairsLookup\\CityPairLookupResponseOriginDestinationLocationsItem', 'json', $context);
            }
            $object->setOriginDestinationLocations($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLinks()) {
            $values = [];
            foreach ($object->getLinks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Links'} = $values;
        }
        if (null !== $object->getOriginDestinationLocations()) {
            $values_1 = [];
            foreach ($object->getOriginDestinationLocations() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'OriginDestinationLocations'} = $values_1;
        }

        return $data;
    }
}
