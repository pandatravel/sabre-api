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

class AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDates';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDates;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDates();
        if (property_exists($data, 'DaysRange')) {
            $values = [];
            foreach ($data->{'DaysRange'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDatesDaysRangeItem', 'json', $context);
            }
            $object->setDaysRange($values);
        }
        if (property_exists($data, 'LengthOfStayRange')) {
            $values = [];
            foreach ($data->{'LengthOfStayRange'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\AdvancedCalendarSearch\\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDatesLengthOfStayRangeItem', 'json', $context);
            }
            $object->setLengthOfStayRange($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDaysRange()) {
            $values = [];
            foreach ($object->getDaysRange() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'DaysRange'} = $values;
        }
        if (null !== $object->getLengthOfStayRange()) {
            $values = [];
            foreach ($object->getLengthOfStayRange() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'LengthOfStayRange'} = $values;
        }

        return $data;
    }
}