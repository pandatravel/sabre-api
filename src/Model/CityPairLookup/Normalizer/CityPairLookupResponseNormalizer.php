<?php

namespace Ammonkc\SabreApi\Model\CityPairLookup\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CityPairLookupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CityPairLookup\\CityPairLookupResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CityPairLookup\CityPairLookupResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CityPairLookup\CityPairLookupResponse();
        if (property_exists($data, 'OriginDestinationLocations')) {
            $values = [];
            foreach ($data->{'OriginDestinationLocations'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CityPairLookup\\CityPairLookupResponseOriginDestinationLocationsItem', 'json', $context);
            }
            $object->setOriginDestinationLocations($values);
        }
        if (property_exists($data, 'Links')) {
            $values_1 = [];
            foreach ($data->{'Links'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\CityPairLookup\\CommonLinksItem', 'json', $context);
            }
            $object->setLinks($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getOriginDestinationLocations()) {
            $values = [];
            foreach ($object->getOriginDestinationLocations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'OriginDestinationLocations'} = $values;
        }
        if (null !== $object->getLinks()) {
            $values_1 = [];
            foreach ($object->getLinks() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Links'} = $values_1;
        }

        return $data;
    }
}
