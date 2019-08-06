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

class OrgOpentravelOta200305ExchangeOriginDestinationFlightTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ExchangeOriginDestinationFlightType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ExchangeOriginDestinationFlightType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305ExchangeOriginDestinationFlightType();
        if (property_exists($data, 'Airline')) {
            $object->setAirline($this->denormalizer->denormalize($data->{'Airline'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirlineType', 'json', $context));
        }
        if (property_exists($data, 'ArrivalDateTime')) {
            $object->setArrivalDateTime($data->{'ArrivalDateTime'});
        }
        if (property_exists($data, 'BookingDateTime')) {
            $object->setBookingDateTime($data->{'BookingDateTime'});
        }
        if (property_exists($data, 'ClassOfService')) {
            $object->setClassOfService($data->{'ClassOfService'});
        }
        if (property_exists($data, 'DepartureDateTime')) {
            $object->setDepartureDateTime($data->{'DepartureDateTime'});
        }
        if (property_exists($data, 'DestinationLocation')) {
            $object->setDestinationLocation($this->denormalizer->denormalize($data->{'DestinationLocation'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305RequestLocationType', 'json', $context));
        }
        if (property_exists($data, 'Fare')) {
            $object->setFare($this->denormalizer->denormalize($data->{'Fare'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ExchangeOriginDestinationFlightTypeFare', 'json', $context));
        }
        if (property_exists($data, 'Flown')) {
            $object->setFlown($data->{'Flown'});
        }
        if (property_exists($data, 'MarriageStatus')) {
            $object->setMarriageStatus($data->{'MarriageStatus'});
        }
        if (property_exists($data, 'MileageDisplay')) {
            $values = [];
            foreach ($data->{'MileageDisplay'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305MileageDisplayType', 'json', $context);
            }
            $object->setMileageDisplay($values);
        }
        if (property_exists($data, 'Number')) {
            $object->setNumber($data->{'Number'});
        }
        if (property_exists($data, 'OriginLocation')) {
            $object->setOriginLocation($this->denormalizer->denormalize($data->{'OriginLocation'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305RequestLocationType', 'json', $context));
        }
        if (property_exists($data, 'PlusUp')) {
            $values_1 = [];
            foreach ($data->{'PlusUp'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PlusUpType', 'json', $context);
            }
            $object->setPlusUp($values_1);
        }
        if (property_exists($data, 'Reservation')) {
            $object->setReservation($this->denormalizer->denormalize($data->{'Reservation'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ReservationType', 'json', $context));
        }
        if (property_exists($data, 'SideTrip')) {
            $object->setSideTrip($this->denormalizer->denormalize($data->{'SideTrip'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305SideTripType', 'json', $context));
        }
        if (property_exists($data, 'Surcharge')) {
            $values_2 = [];
            foreach ($data->{'Surcharge'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305SurchargeType', 'json', $context);
            }
            $object->setSurcharge($values_2);
        }
        if (property_exists($data, 'Type')) {
            $object->setType($data->{'Type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAirline()) {
            $data->{'Airline'} = $this->normalizer->normalize($object->getAirline(), 'json', $context);
        }
        if (null !== $object->getArrivalDateTime()) {
            $data->{'ArrivalDateTime'} = $object->getArrivalDateTime();
        }
        if (null !== $object->getBookingDateTime()) {
            $data->{'BookingDateTime'} = $object->getBookingDateTime();
        }
        if (null !== $object->getClassOfService()) {
            $data->{'ClassOfService'} = $object->getClassOfService();
        }
        if (null !== $object->getDepartureDateTime()) {
            $data->{'DepartureDateTime'} = $object->getDepartureDateTime();
        }
        if (null !== $object->getDestinationLocation()) {
            $data->{'DestinationLocation'} = $this->normalizer->normalize($object->getDestinationLocation(), 'json', $context);
        }
        if (null !== $object->getFare()) {
            $data->{'Fare'} = $this->normalizer->normalize($object->getFare(), 'json', $context);
        }
        if (null !== $object->getFlown()) {
            $data->{'Flown'} = $object->getFlown();
        }
        if (null !== $object->getMarriageStatus()) {
            $data->{'MarriageStatus'} = $object->getMarriageStatus();
        }
        if (null !== $object->getMileageDisplay()) {
            $values = [];
            foreach ($object->getMileageDisplay() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'MileageDisplay'} = $values;
        }
        if (null !== $object->getNumber()) {
            $data->{'Number'} = $object->getNumber();
        }
        if (null !== $object->getOriginLocation()) {
            $data->{'OriginLocation'} = $this->normalizer->normalize($object->getOriginLocation(), 'json', $context);
        }
        if (null !== $object->getPlusUp()) {
            $values_1 = [];
            foreach ($object->getPlusUp() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'PlusUp'} = $values_1;
        }
        if (null !== $object->getReservation()) {
            $data->{'Reservation'} = $this->normalizer->normalize($object->getReservation(), 'json', $context);
        }
        if (null !== $object->getSideTrip()) {
            $data->{'SideTrip'} = $this->normalizer->normalize($object->getSideTrip(), 'json', $context);
        }
        if (null !== $object->getSurcharge()) {
            $values_2 = [];
            foreach ($object->getSurcharge() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'Surcharge'} = $values_2;
        }
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }

        return $data;
    }
}
