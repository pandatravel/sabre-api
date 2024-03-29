<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\DestinationFinder\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DestinationFinderResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\DestinationFinder\\DestinationFinderResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\DestinationFinder\DestinationFinderResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\DestinationFinder\DestinationFinderResponse();
        if (property_exists($data, 'OriginLocation')) {
            $object->setOriginLocation($data->{'OriginLocation'});
        }
        if (property_exists($data, 'FareInfo')) {
            $values = [];
            foreach ($data->{'FareInfo'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\DestinationFinder\\DestinationFinderResponseFareInfoItem', 'json', $context);
            }
            $object->setFareInfo($values);
        }
        if (property_exists($data, 'UsageNote')) {
            $object->setUsageNote($data->{'UsageNote'});
        }
        if (property_exists($data, 'Warning')) {
            $object->setWarning($this->denormalizer->denormalize($data->{'Warning'}, 'Ammonkc\\SabreApi\\Model\\DestinationFinder\\DestinationFinderResponseWarning', 'json', $context));
        }
        if (property_exists($data, 'Links')) {
            $values_1 = [];
            foreach ($data->{'Links'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\DestinationFinder\\DestinationFinderResponseLinksItem', 'json', $context);
            }
            $object->setLinks($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getOriginLocation()) {
            $data->{'OriginLocation'} = $object->getOriginLocation();
        }
        if (null !== $object->getFareInfo()) {
            $values = [];
            foreach ($object->getFareInfo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'FareInfo'} = $values;
        }
        if (null !== $object->getUsageNote()) {
            $data->{'UsageNote'} = $object->getUsageNote();
        }
        if (null !== $object->getWarning()) {
            $data->{'Warning'} = $this->normalizer->normalize($object->getWarning(), 'json', $context);
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
