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

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirportsStopAirportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\InstaFlightsSearch\\AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirportsStopAirport';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\InstaFlightsSearch\AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirportsStopAirport;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\InstaFlightsSearch\AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemStopAirportsStopAirport();
        if (property_exists($data, 'Equipment')) {
            $object->setEquipment($data->{'Equipment'});
        }
        if (property_exists($data, 'DepartureDateTime')) {
            $object->setDepartureDateTime($data->{'DepartureDateTime'});
        }
        if (property_exists($data, 'ArrivalDateTime')) {
            $object->setArrivalDateTime($data->{'ArrivalDateTime'});
        }
        if (property_exists($data, 'LocationCode')) {
            $object->setLocationCode($data->{'LocationCode'});
        }
        if (property_exists($data, 'ElapsedTime')) {
            $object->setElapsedTime($data->{'ElapsedTime'});
        }
        if (property_exists($data, 'Duration')) {
            $object->setDuration($data->{'Duration'});
        }
        if (property_exists($data, 'GMTOffset')) {
            $object->setGMTOffset($data->{'GMTOffset'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEquipment()) {
            $data->{'Equipment'} = $object->getEquipment();
        }
        if (null !== $object->getDepartureDateTime()) {
            $data->{'DepartureDateTime'} = $object->getDepartureDateTime();
        }
        if (null !== $object->getArrivalDateTime()) {
            $data->{'ArrivalDateTime'} = $object->getArrivalDateTime();
        }
        if (null !== $object->getLocationCode()) {
            $data->{'LocationCode'} = $object->getLocationCode();
        }
        if (null !== $object->getElapsedTime()) {
            $data->{'ElapsedTime'} = $object->getElapsedTime();
        }
        if (null !== $object->getDuration()) {
            $data->{'Duration'} = $object->getDuration();
        }
        if (null !== $object->getGMTOffset()) {
            $data->{'GMTOffset'} = $object->getGMTOffset();
        }

        return $data;
    }
}
