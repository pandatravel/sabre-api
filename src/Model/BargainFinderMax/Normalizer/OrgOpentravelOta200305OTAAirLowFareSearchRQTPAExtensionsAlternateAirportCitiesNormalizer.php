<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCitiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCities';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCities';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCities();
        if (property_exists($data, 'AlternateLocation')) {
            $values = [];
            foreach ($data->{'AlternateLocation'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCitiesAlternateLocation', 'json', $context);
            }
            $object->setAlternateLocation($values);
        }
        if (property_exists($data, 'SpecifiedLocation')) {
            $object->setSpecifiedLocation($this->denormalizer->denormalize($data->{'SpecifiedLocation'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCitiesSpecifiedLocation', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAlternateLocation()) {
            $values = [];
            foreach ($object->getAlternateLocation() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'AlternateLocation'} = $values;
        }
        if (null !== $object->getSpecifiedLocation()) {
            $data->{'SpecifiedLocation'} = $this->normalizer->normalize($object->getSpecifiedLocation(), 'json', $context);
        }

        return $data;
    }
}
