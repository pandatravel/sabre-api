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

class SurfaceTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\SurfaceType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\SurfaceType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\SurfaceType();
        if (property_exists($data, 'extraMileageAllowance') && $data->{'extraMileageAllowance'} !== null) {
            $object->setExtraMileageAllowance($data->{'extraMileageAllowance'});
        }
        if (property_exists($data, 'stopover') && $data->{'stopover'} !== null) {
            $object->setStopover($data->{'stopover'});
        }
        if (property_exists($data, 'stopoverCharge') && $data->{'stopoverCharge'} !== null) {
            $object->setStopoverCharge($data->{'stopoverCharge'});
        }
        if (property_exists($data, 'stopoverChargeCurrency') && $data->{'stopoverChargeCurrency'} !== null) {
            $object->setStopoverChargeCurrency($data->{'stopoverChargeCurrency'});
        }
        if (property_exists($data, 'unchargeable') && $data->{'unchargeable'} !== null) {
            $object->setUnchargeable($data->{'unchargeable'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getExtraMileageAllowance()) {
            $data->{'extraMileageAllowance'} = $object->getExtraMileageAllowance();
        }
        if (null !== $object->getStopover()) {
            $data->{'stopover'} = $object->getStopover();
        }
        if (null !== $object->getStopoverCharge()) {
            $data->{'stopoverCharge'} = $object->getStopoverCharge();
        }
        if (null !== $object->getStopoverChargeCurrency()) {
            $data->{'stopoverChargeCurrency'} = $object->getStopoverChargeCurrency();
        }
        if (null !== $object->getUnchargeable()) {
            $data->{'unchargeable'} = $object->getUnchargeable();
        }

        return $data;
    }
}
