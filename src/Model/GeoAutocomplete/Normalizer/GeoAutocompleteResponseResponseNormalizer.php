<?php

namespace Ammonkc\SabreApi\Model\GeoAutocomplete\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class GeoAutocompleteResponseResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponseResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponseResponse';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\GeoAutocomplete\GeoAutocompleteResponseResponse();
        if (property_exists($data, 'responseHeader')) {
            $object->setResponseHeader($this->denormalizer->denormalize($data->{'responseHeader'}, 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponseResponseResponseHeader', 'json', $context));
        }
        if (property_exists($data, 'grouped')) {
            $object->setGrouped($this->denormalizer->denormalize($data->{'grouped'}, 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponseResponseGrouped', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getResponseHeader()) {
            $data->{'responseHeader'} = $this->normalizer->normalize($object->getResponseHeader(), 'json', $context);
        }
        if (null !== $object->getGrouped()) {
            $data->{'grouped'} = $this->normalizer->normalize($object->getGrouped(), 'json', $context);
        }

        return $data;
    }
}
