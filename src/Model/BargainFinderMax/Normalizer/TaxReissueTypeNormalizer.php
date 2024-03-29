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

class TaxReissueTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\TaxReissueType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\TaxReissueType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\TaxReissueType();
        if (property_exists($data, 'maxAmount') && $data->{'maxAmount'} !== null) {
            $object->setMaxAmount($data->{'maxAmount'});
        }
        if (property_exists($data, 'maxCurrency') && $data->{'maxCurrency'} !== null) {
            $object->setMaxCurrency($data->{'maxCurrency'});
        }
        if (property_exists($data, 'refundable') && $data->{'refundable'} !== null) {
            $object->setRefundable($data->{'refundable'});
        }
        if (property_exists($data, 'restrictionApply') && $data->{'restrictionApply'} !== null) {
            $object->setRestrictionApply($data->{'restrictionApply'});
        }
        if (property_exists($data, 'taxType') && $data->{'taxType'} !== null) {
            $object->setTaxType($data->{'taxType'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMaxAmount()) {
            $data->{'maxAmount'} = $object->getMaxAmount();
        }
        if (null !== $object->getMaxCurrency()) {
            $data->{'maxCurrency'} = $object->getMaxCurrency();
        }
        if (null !== $object->getRefundable()) {
            $data->{'refundable'} = $object->getRefundable();
        }
        if (null !== $object->getRestrictionApply()) {
            $data->{'restrictionApply'} = $object->getRestrictionApply();
        }
        if (null !== $object->getTaxType()) {
            $data->{'taxType'} = $object->getTaxType();
        }

        return $data;
    }
}
