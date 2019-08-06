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

class BaggageAllowanceTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\BaggageAllowanceType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\BaggageAllowanceType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\BaggageAllowanceType();
        if (property_exists($data, 'description1')) {
            $object->setDescription1($data->{'description1'});
        }
        if (property_exists($data, 'description2')) {
            $object->setDescription2($data->{'description2'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'pieceCount')) {
            $object->setPieceCount($data->{'pieceCount'});
        }
        if (property_exists($data, 'unit')) {
            $object->setUnit($data->{'unit'});
        }
        if (property_exists($data, 'weight')) {
            $object->setWeight($data->{'weight'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDescription1()) {
            $data->{'description1'} = $object->getDescription1();
        }
        if (null !== $object->getDescription2()) {
            $data->{'description2'} = $object->getDescription2();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getPieceCount()) {
            $data->{'pieceCount'} = $object->getPieceCount();
        }
        if (null !== $object->getUnit()) {
            $data->{'unit'} = $object->getUnit();
        }
        if (null !== $object->getWeight()) {
            $data->{'weight'} = $object->getWeight();
        }

        return $data;
    }
}
