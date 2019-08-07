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

class OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformation';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformation();
        if (property_exists($data, 'ArrivalDateTime')) {
            $object->setArrivalDateTime($data->{'ArrivalDateTime'});
        }
        if (property_exists($data, 'ArrivalDates')) {
            $object->setArrivalDates($this->denormalizer->denormalize($data->{'ArrivalDates'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TravelDateTimeTypeArrivalDates', 'json', $context));
        }
        if (property_exists($data, 'ArrivalWindow')) {
            $object->setArrivalWindow($data->{'ArrivalWindow'});
        }
        if (property_exists($data, 'ConnectionLocations')) {
            $object->setConnectionLocations($this->denormalizer->denormalize($data->{'ConnectionLocations'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ConnectionType', 'json', $context));
        }
        if (property_exists($data, 'DepartureDateTime')) {
            $object->setDepartureDateTime($data->{'DepartureDateTime'});
        }
        if (property_exists($data, 'DepartureDates')) {
            $object->setDepartureDates($this->denormalizer->denormalize($data->{'DepartureDates'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TravelDateTimeTypeDepartureDates', 'json', $context));
        }
        if (property_exists($data, 'DepartureWindow')) {
            $object->setDepartureWindow($data->{'DepartureWindow'});
        }
        if (property_exists($data, 'DestinationLocation')) {
            $object->setDestinationLocation($this->denormalizer->denormalize($data->{'DestinationLocation'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation', 'json', $context));
        }
        if (property_exists($data, 'Fixed')) {
            $object->setFixed($data->{'Fixed'});
        }
        if (property_exists($data, 'FullDiversity')) {
            $object->setFullDiversity($data->{'FullDiversity'});
        }
        if (property_exists($data, 'OriginLocation')) {
            $object->setOriginLocation($this->denormalizer->denormalize($data->{'OriginLocation'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation', 'json', $context));
        }
        if (property_exists($data, 'RPH')) {
            $object->setRPH($data->{'RPH'});
        }
        if (property_exists($data, 'TPA_Extensions')) {
            $object->setTPAExtensions($this->denormalizer->denormalize($data->{'TPA_Extensions'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformationTPAExtensions', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getArrivalDateTime()) {
            $data->{'ArrivalDateTime'} = $object->getArrivalDateTime();
        }
        if (null !== $object->getArrivalDates()) {
            $data->{'ArrivalDates'} = $this->normalizer->normalize($object->getArrivalDates(), 'json', $context);
        }
        if (null !== $object->getArrivalWindow()) {
            $data->{'ArrivalWindow'} = $object->getArrivalWindow();
        }
        if (null !== $object->getConnectionLocations()) {
            $data->{'ConnectionLocations'} = $this->normalizer->normalize($object->getConnectionLocations(), 'json', $context);
        }
        if (null !== $object->getDepartureDateTime()) {
            $data->{'DepartureDateTime'} = $object->getDepartureDateTime();
        }
        if (null !== $object->getDepartureDates()) {
            $data->{'DepartureDates'} = $this->normalizer->normalize($object->getDepartureDates(), 'json', $context);
        }
        if (null !== $object->getDepartureWindow()) {
            $data->{'DepartureWindow'} = $object->getDepartureWindow();
        }
        if (null !== $object->getDestinationLocation()) {
            $data->{'DestinationLocation'} = $this->normalizer->normalize($object->getDestinationLocation(), 'json', $context);
        }
        if (null !== $object->getFixed()) {
            $data->{'Fixed'} = $object->getFixed();
        }
        if (null !== $object->getFullDiversity()) {
            $data->{'FullDiversity'} = $object->getFullDiversity();
        }
        if (null !== $object->getOriginLocation()) {
            $data->{'OriginLocation'} = $this->normalizer->normalize($object->getOriginLocation(), 'json', $context);
        }
        if (null !== $object->getRPH()) {
            $data->{'RPH'} = $object->getRPH();
        }
        if (null !== $object->getTPAExtensions()) {
            $data->{'TPA_Extensions'} = $this->normalizer->normalize($object->getTPAExtensions(), 'json', $context);
        }

        return $data;
    }
}
