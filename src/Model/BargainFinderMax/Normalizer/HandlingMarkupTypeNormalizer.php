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

class HandlingMarkupTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\HandlingMarkupType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\HandlingMarkupType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\HandlingMarkupType();
        if (property_exists($data, 'amount') && $data->{'amount'} !== null) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
        }
        if (property_exists($data, 'extendedDescription') && $data->{'extendedDescription'} !== null) {
            $object->setExtendedDescription($data->{'extendedDescription'});
        }
        if (property_exists($data, 'fareRetailerRule') && $data->{'fareRetailerRule'} !== null) {
            $object->setFareRetailerRule($data->{'fareRetailerRule'});
        }
        if (property_exists($data, 'hiddenHandlingFee') && $data->{'hiddenHandlingFee'} !== null) {
            $object->setHiddenHandlingFee($data->{'hiddenHandlingFee'});
        }
        if (property_exists($data, 'nonHiddenHandlingFee') && $data->{'nonHiddenHandlingFee'} !== null) {
            $object->setNonHiddenHandlingFee($data->{'nonHiddenHandlingFee'});
        }
        if (property_exists($data, 'type') && $data->{'type'} !== null) {
            $object->setType($data->{'type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getExtendedDescription()) {
            $data->{'extendedDescription'} = $object->getExtendedDescription();
        }
        if (null !== $object->getFareRetailerRule()) {
            $data->{'fareRetailerRule'} = $object->getFareRetailerRule();
        }
        if (null !== $object->getHiddenHandlingFee()) {
            $data->{'hiddenHandlingFee'} = $object->getHiddenHandlingFee();
        }
        if (null !== $object->getNonHiddenHandlingFee()) {
            $data->{'nonHiddenHandlingFee'} = $object->getNonHiddenHandlingFee();
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }

        return $data;
    }
}
