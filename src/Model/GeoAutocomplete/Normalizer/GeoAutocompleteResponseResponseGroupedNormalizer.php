<?php

namespace Ammonkc\SabreApi\Model\GeoAutocomplete\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class GeoAutocompleteResponseResponseGroupedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponseResponseGrouped';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponseResponseGrouped';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\GeoAutocomplete\GeoAutocompleteResponseResponseGrouped();
        if (property_exists($data, 'category')) {
            $object->setCategory($data->{'category'});
        }
        if (property_exists($data, 'matches')) {
            $object->setMatches($data->{'matches'});
        }
        if (property_exists($data, 'doclist')) {
            $object->setDoclist($this->denormalizer->denormalize($data->{'doclist'}, 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponseResponseGroupedDoclist', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCategory()) {
            $data->{'category'} = $object->getCategory();
        }
        if (null !== $object->getMatches()) {
            $data->{'matches'} = $object->getMatches();
        }
        if (null !== $object->getDoclist()) {
            $data->{'doclist'} = $this->normalizer->normalize($object->getDoclist(), 'json', $context);
        }

        return $data;
    }
}
