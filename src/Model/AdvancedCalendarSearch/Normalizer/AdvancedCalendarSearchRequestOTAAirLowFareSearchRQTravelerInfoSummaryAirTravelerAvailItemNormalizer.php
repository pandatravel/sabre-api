<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AdvancedCalendarSearch\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryAirTravelerAvailItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryAirTravelerAvailItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryAirTravelerAvailItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryAirTravelerAvailItem();
        if (property_exists($data, 'PassengerTypeQuantity')) {
            $values = [];
            foreach ($data->{'PassengerTypeQuantity'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryAirTravelerAvailItemPassengerTypeQuantityItem', 'json', $context);
            }
            $object->setPassengerTypeQuantity($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPassengerTypeQuantity()) {
            $values = [];
            foreach ($object->getPassengerTypeQuantity() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'PassengerTypeQuantity'} = $values;
        }

        return $data;
    }
}