<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItem();
        if (property_exists($data, 'DestinationLocation')) {
            $object->setDestinationLocation($this->denormalizer->denormalize($data->{'DestinationLocation'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemDestinationLocation', 'json', $context));
        }
        if (property_exists($data, 'Equipment')) {
            $object->setEquipment($this->denormalizer->denormalize($data->{'Equipment'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemEquipment', 'json', $context));
        }
        if (property_exists($data, 'MarketingAirline')) {
            $object->setMarketingAirline($this->denormalizer->denormalize($data->{'MarketingAirline'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemMarketingAirline', 'json', $context));
        }
        if (property_exists($data, 'MarriageGrp')) {
            $object->setMarriageGrp($data->{'MarriageGrp'});
        }
        if (property_exists($data, 'OperatingAirline')) {
            $object->setOperatingAirline($this->denormalizer->denormalize($data->{'OperatingAirline'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOperatingAirline', 'json', $context));
        }
        if (property_exists($data, 'OriginLocation')) {
            $object->setOriginLocation($this->denormalizer->denormalize($data->{'OriginLocation'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOriginLocation', 'json', $context));
        }
        if (property_exists($data, 'ArrivalDateTime')) {
            $object->setArrivalDateTime($data->{'ArrivalDateTime'});
        }
        if (property_exists($data, 'DepartureDateTime')) {
            $object->setDepartureDateTime($data->{'DepartureDateTime'});
        }
        if (property_exists($data, 'FlightNumber')) {
            $object->setFlightNumber($data->{'FlightNumber'});
        }
        if (property_exists($data, 'NumberInParty')) {
            $object->setNumberInParty($data->{'NumberInParty'});
        }
        if (property_exists($data, 'ResBookDesigCode')) {
            $object->setResBookDesigCode($data->{'ResBookDesigCode'});
        }
        if (property_exists($data, 'Status')) {
            $object->setStatus($data->{'Status'});
        }
        if (property_exists($data, 'InstantPurchase')) {
            $object->setInstantPurchase($data->{'InstantPurchase'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDestinationLocation()) {
            $data->{'DestinationLocation'} = $this->normalizer->normalize($object->getDestinationLocation(), 'json', $context);
        }
        if (null !== $object->getEquipment()) {
            $data->{'Equipment'} = $this->normalizer->normalize($object->getEquipment(), 'json', $context);
        }
        if (null !== $object->getMarketingAirline()) {
            $data->{'MarketingAirline'} = $this->normalizer->normalize($object->getMarketingAirline(), 'json', $context);
        }
        if (null !== $object->getMarriageGrp()) {
            $data->{'MarriageGrp'} = $object->getMarriageGrp();
        }
        if (null !== $object->getOperatingAirline()) {
            $data->{'OperatingAirline'} = $this->normalizer->normalize($object->getOperatingAirline(), 'json', $context);
        }
        if (null !== $object->getOriginLocation()) {
            $data->{'OriginLocation'} = $this->normalizer->normalize($object->getOriginLocation(), 'json', $context);
        }
        if (null !== $object->getArrivalDateTime()) {
            $data->{'ArrivalDateTime'} = $object->getArrivalDateTime();
        }
        if (null !== $object->getDepartureDateTime()) {
            $data->{'DepartureDateTime'} = $object->getDepartureDateTime();
        }
        if (null !== $object->getFlightNumber()) {
            $data->{'FlightNumber'} = $object->getFlightNumber();
        }
        if (null !== $object->getNumberInParty()) {
            $data->{'NumberInParty'} = $object->getNumberInParty();
        }
        if (null !== $object->getResBookDesigCode()) {
            $data->{'ResBookDesigCode'} = $object->getResBookDesigCode();
        }
        if (null !== $object->getStatus()) {
            $data->{'Status'} = $object->getStatus();
        }
        if (null !== $object->getInstantPurchase()) {
            $data->{'InstantPurchase'} = $object->getInstantPurchase();
        }

        return $data;
    }
}
