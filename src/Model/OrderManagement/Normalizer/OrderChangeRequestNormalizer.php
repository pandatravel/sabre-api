<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\OrderManagement\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OrderChangeRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\OrderManagement\\OrderChangeRequest';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\OrderManagement\OrderChangeRequest;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\OrderManagement\OrderChangeRequest();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'actions')) {
            $values = [];
            foreach ($data->{'actions'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\OrderManagement\\Action', 'json', $context);
            }
            $object->setActions($values);
        }
        if (property_exists($data, 'party')) {
            $object->setParty($this->denormalizer->denormalize($data->{'party'}, 'Ammonkc\\SabreApi\\Model\\OrderManagement\\Party', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getActions()) {
            $values = [];
            foreach ($object->getActions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'actions'} = $values;
        }
        if (null !== $object->getParty()) {
            $data->{'party'} = $this->normalizer->normalize($object->getParty(), 'json', $context);
        }

        return $data;
    }
}
