<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureTimeZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\InstaFlightsSearch\\AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureTimeZone';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\InstaFlightsSearch\AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureTimeZone;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\InstaFlightsSearch\AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemDepartureTimeZone();
        if (property_exists($data, 'GMTOffset')) {
            $object->setGMTOffset($data->{'GMTOffset'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getGMTOffset()) {
            $data->{'GMTOffset'} = $object->getGMTOffset();
        }

        return $data;
    }
}
