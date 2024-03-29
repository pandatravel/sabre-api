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

class HigherIntermediatePointTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\HigherIntermediatePointType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\HigherIntermediatePointType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\HigherIntermediatePointType();
        if (property_exists($data, 'amount') && $data->{'amount'} !== null) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'cabinHigh') && $data->{'cabinHigh'} !== null) {
            $object->setCabinHigh($data->{'cabinHigh'});
        }
        if (property_exists($data, 'cabinLow') && $data->{'cabinLow'} !== null) {
            $object->setCabinLow($data->{'cabinLow'});
        }
        if (property_exists($data, 'destination') && $data->{'destination'} !== null) {
            $object->setDestination($data->{'destination'});
        }
        if (property_exists($data, 'fareClassHigh') && $data->{'fareClassHigh'} !== null) {
            $object->setFareClassHigh($data->{'fareClassHigh'});
        }
        if (property_exists($data, 'fareClassLow') && $data->{'fareClassLow'} !== null) {
            $object->setFareClassLow($data->{'fareClassLow'});
        }
        if (property_exists($data, 'highDestination') && $data->{'highDestination'} !== null) {
            $object->setHighDestination($data->{'highDestination'});
        }
        if (property_exists($data, 'highOrigin') && $data->{'highOrigin'} !== null) {
            $object->setHighOrigin($data->{'highOrigin'});
        }
        if (property_exists($data, 'lowDestination') && $data->{'lowDestination'} !== null) {
            $object->setLowDestination($data->{'lowDestination'});
        }
        if (property_exists($data, 'lowOrigin') && $data->{'lowOrigin'} !== null) {
            $object->setLowOrigin($data->{'lowOrigin'});
        }
        if (property_exists($data, 'mileageSurchargePercentage') && $data->{'mileageSurchargePercentage'} !== null) {
            $object->setMileageSurchargePercentage($data->{'mileageSurchargePercentage'});
        }
        if (property_exists($data, 'origin') && $data->{'origin'} !== null) {
            $object->setOrigin($data->{'origin'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getCabinHigh()) {
            $data->{'cabinHigh'} = $object->getCabinHigh();
        }
        if (null !== $object->getCabinLow()) {
            $data->{'cabinLow'} = $object->getCabinLow();
        }
        if (null !== $object->getDestination()) {
            $data->{'destination'} = $object->getDestination();
        }
        if (null !== $object->getFareClassHigh()) {
            $data->{'fareClassHigh'} = $object->getFareClassHigh();
        }
        if (null !== $object->getFareClassLow()) {
            $data->{'fareClassLow'} = $object->getFareClassLow();
        }
        if (null !== $object->getHighDestination()) {
            $data->{'highDestination'} = $object->getHighDestination();
        }
        if (null !== $object->getHighOrigin()) {
            $data->{'highOrigin'} = $object->getHighOrigin();
        }
        if (null !== $object->getLowDestination()) {
            $data->{'lowDestination'} = $object->getLowDestination();
        }
        if (null !== $object->getLowOrigin()) {
            $data->{'lowOrigin'} = $object->getLowOrigin();
        }
        if (null !== $object->getMileageSurchargePercentage()) {
            $data->{'mileageSurchargePercentage'} = $object->getMileageSurchargePercentage();
        }
        if (null !== $object->getOrigin()) {
            $data->{'origin'} = $object->getOrigin();
        }

        return $data;
    }
}
