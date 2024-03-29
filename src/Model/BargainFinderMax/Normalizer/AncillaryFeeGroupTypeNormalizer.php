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

class AncillaryFeeGroupTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\AncillaryFeeGroupType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\AncillaryFeeGroupType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\AncillaryFeeGroupType();
        if (property_exists($data, 'ancillaryFees') && $data->{'ancillaryFees'} !== null) {
            $values = [];
            foreach ($data->{'ancillaryFees'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\AncillaryFeeType', 'json', $context);
            }
            $object->setAncillaryFees($values);
        }
        if (property_exists($data, 'message') && $data->{'message'} !== null) {
            $object->setMessage($data->{'message'});
        }
        if (property_exists($data, 'orderStandardBag') && $data->{'orderStandardBag'} !== null) {
            $object->setOrderStandardBag($this->denormalizer->denormalize($data->{'orderStandardBag'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrderStandardBag', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAncillaryFees()) {
            $values = [];
            foreach ($object->getAncillaryFees() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'ancillaryFees'} = $values;
        }
        if (null !== $object->getMessage()) {
            $data->{'message'} = $object->getMessage();
        }
        if (null !== $object->getOrderStandardBag()) {
            $data->{'orderStandardBag'} = $this->normalizer->normalize($object->getOrderStandardBag(), 'json', $context);
        }

        return $data;
    }
}
