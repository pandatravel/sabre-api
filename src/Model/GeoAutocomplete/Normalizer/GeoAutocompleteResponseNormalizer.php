<?php

namespace Ammonkc\SabreApi\Model\GeoAutocomplete\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class GeoAutocompleteResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponse';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\GeoAutocomplete\GeoAutocompleteResponse();
        if (property_exists($data, 'Links')) {
            $values = [];
            foreach ($data->{'Links'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponseLinksItem', 'json', $context);
            }
            $object->setLinks($values);
        }
        if (property_exists($data, 'Response')) {
            $object->setResponse($this->denormalizer->denormalize($data->{'Response'}, 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponseResponse', 'json', $context));
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
        if (null !== $object->getResponse()) {
            $data->{'Response'} = $this->normalizer->normalize($object->getResponse(), 'json', $context);
        }

        return $data;
    }
}
