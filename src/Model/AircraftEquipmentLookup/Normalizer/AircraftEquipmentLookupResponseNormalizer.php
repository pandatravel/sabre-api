<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AircraftEquipmentLookup\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AircraftEquipmentLookupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\AircraftEquipmentLookup\\AircraftEquipmentLookupResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\AircraftEquipmentLookup\AircraftEquipmentLookupResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\AircraftEquipmentLookup\AircraftEquipmentLookupResponse();
        if (property_exists($data, 'AircraftInfo')) {
            $values = [];
            foreach ($data->{'AircraftInfo'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\AircraftEquipmentLookup\\AircraftEquipmentLookupResponseAircraftInfoItem', 'json', $context);
            }
            $object->setAircraftInfo($values);
        }
        if (property_exists($data, 'Links')) {
            $values_1 = [];
            foreach ($data->{'Links'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\AircraftEquipmentLookup\\CommonLinksItem', 'json', $context);
            }
            $object->setLinks($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAircraftInfo()) {
            $values = [];
            foreach ($object->getAircraftInfo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'AircraftInfo'} = $values;
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
