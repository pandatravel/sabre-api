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

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPartitionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPartitions';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPartitions';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPartitions();
        if (property_exists($data, 'Group') && $data->{'Group'} !== null) {
            $values = [];
            foreach ($data->{'Group'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305CachePartitionGroupType', 'json', $context);
            }
            $object->setGroup($values);
        }
        if (property_exists($data, 'Partition') && $data->{'Partition'} !== null) {
            $values_1 = [];
            foreach ($data->{'Partition'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305CachePartitionType', 'json', $context);
            }
            $object->setPartition($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getGroup()) {
            $values = [];
            foreach ($object->getGroup() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Group'} = $values;
        }
        if (null !== $object->getPartition()) {
            $values_1 = [];
            foreach ($object->getPartition() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Partition'} = $values_1;
        }

        return $data;
    }
}
