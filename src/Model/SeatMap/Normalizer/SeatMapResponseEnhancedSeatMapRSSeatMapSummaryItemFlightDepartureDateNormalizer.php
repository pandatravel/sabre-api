<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlightDepartureDateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\SeatMap\\Model\\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlightDepartureDate';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\SeatMap\Model\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlightDepartureDate;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\SeatMap\Model\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlightDepartureDate();
        if (property_exists($data, 'localTime')) {
            $object->setLocalTime($data->{'localTime'});
        }
        if (property_exists($data, 'content')) {
            $object->setContent($data->{'content'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLocalTime()) {
            $data->{'localTime'} = $object->getLocalTime();
        }
        if (null !== $object->getContent()) {
            $data->{'content'} = $object->getContent();
        }

        return $data;
    }
}
