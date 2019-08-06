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

class SegmentTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\SegmentType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\SegmentType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\SegmentType();
        if (property_exists($data, 'availabilityBreak')) {
            $object->setAvailabilityBreak($data->{'availabilityBreak'});
        }
        if (property_exists($data, 'bookingCode')) {
            $object->setBookingCode($data->{'bookingCode'});
        }
        if (property_exists($data, 'cabinCode')) {
            $object->setCabinCode($data->{'cabinCode'});
        }
        if (property_exists($data, 'dualInventoryCode')) {
            $object->setDualInventoryCode($data->{'dualInventoryCode'});
        }
        if (property_exists($data, 'mealCode')) {
            $object->setMealCode($data->{'mealCode'});
        }
        if (property_exists($data, 'seatsAvailable')) {
            $object->setSeatsAvailable($data->{'seatsAvailable'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAvailabilityBreak()) {
            $data->{'availabilityBreak'} = $object->getAvailabilityBreak();
        }
        if (null !== $object->getBookingCode()) {
            $data->{'bookingCode'} = $object->getBookingCode();
        }
        if (null !== $object->getCabinCode()) {
            $data->{'cabinCode'} = $object->getCabinCode();
        }
        if (null !== $object->getDualInventoryCode()) {
            $data->{'dualInventoryCode'} = $object->getDualInventoryCode();
        }
        if (null !== $object->getMealCode()) {
            $data->{'mealCode'} = $object->getMealCode();
        }
        if (null !== $object->getSeatsAvailable()) {
            $data->{'seatsAvailable'} = $object->getSeatsAvailable();
        }

        return $data;
    }
}
