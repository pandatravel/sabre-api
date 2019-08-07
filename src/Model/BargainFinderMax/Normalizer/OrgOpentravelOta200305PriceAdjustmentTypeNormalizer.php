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

class OrgOpentravelOta200305PriceAdjustmentTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceAdjustmentType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceAdjustmentType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305PriceAdjustmentType();
        if (property_exists($data, 'BaseFare') && $data->{'BaseFare'} !== null) {
            $object->setBaseFare($this->denormalizer->denormalize($data->{'BaseFare'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceAdjustmentTypeBaseFare', 'json', $context));
        }
        if (property_exists($data, 'EquivFare') && $data->{'EquivFare'} !== null) {
            $object->setEquivFare($this->denormalizer->denormalize($data->{'EquivFare'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceAdjustmentTypeEquivFare', 'json', $context));
        }
        if (property_exists($data, 'TotalFare') && $data->{'TotalFare'} !== null) {
            $object->setTotalFare($this->denormalizer->denormalize($data->{'TotalFare'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceAdjustmentTypeTotalFare', 'json', $context));
        }
        if (property_exists($data, 'TotalTax') && $data->{'TotalTax'} !== null) {
            $object->setTotalTax($this->denormalizer->denormalize($data->{'TotalTax'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceAdjustmentTypeTotalTax', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBaseFare()) {
            $data->{'BaseFare'} = $this->normalizer->normalize($object->getBaseFare(), 'json', $context);
        }
        if (null !== $object->getEquivFare()) {
            $data->{'EquivFare'} = $this->normalizer->normalize($object->getEquivFare(), 'json', $context);
        }
        if (null !== $object->getTotalFare()) {
            $data->{'TotalFare'} = $this->normalizer->normalize($object->getTotalFare(), 'json', $context);
        }
        if (null !== $object->getTotalTax()) {
            $data->{'TotalTax'} = $this->normalizer->normalize($object->getTotalTax(), 'json', $context);
        }

        return $data;
    }
}
