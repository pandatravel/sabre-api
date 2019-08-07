<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OrgOpentravelOta200305FlightTypePrefTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305FlightTypePrefType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305FlightTypePrefType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305FlightTypePrefType();
        if (property_exists($data, 'FlightType') && $data->{'FlightType'} !== null) {
            $object->setFlightType($data->{'FlightType'});
        }
        if (property_exists($data, 'MaxConnections') && $data->{'MaxConnections'} !== null) {
            $object->setMaxConnections($data->{'MaxConnections'});
        }
        if (property_exists($data, 'PreferLevel') && $data->{'PreferLevel'} !== null) {
            $object->setPreferLevel($data->{'PreferLevel'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFlightType()) {
            $data->{'FlightType'} = $object->getFlightType();
        }
        if (null !== $object->getMaxConnections()) {
            $data->{'MaxConnections'} = $object->getMaxConnections();
        }
        if (null !== $object->getPreferLevel()) {
            $data->{'PreferLevel'} = $object->getPreferLevel();
        }

        return $data;
    }
}
