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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItem();
        if (property_exists($data, 'ArrivalAirport')) {
            $object->setArrivalAirport($this->denormalizer->denormalize($data->{'ArrivalAirport'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItemArrivalAirport', 'json', $context));
        }
        if (property_exists($data, 'DepartureAirport')) {
            $object->setDepartureAirport($this->denormalizer->denormalize($data->{'DepartureAirport'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItemDepartureAirport', 'json', $context));
        }
        if (property_exists($data, 'Equipment')) {
            $object->setEquipment($this->denormalizer->denormalize($data->{'Equipment'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItemEquipment', 'json', $context));
        }
        if (property_exists($data, 'FareBreakInfo')) {
            $object->setFareBreakInfo($this->denormalizer->denormalize($data->{'FareBreakInfo'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItemFareBreakInfo', 'json', $context));
        }
        if (property_exists($data, 'HiddenStops')) {
            $object->setHiddenStops($this->denormalizer->denormalize($data->{'HiddenStops'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItemHiddenStops', 'json', $context));
        }
        if (property_exists($data, 'MarketingAirline')) {
            $object->setMarketingAirline($this->denormalizer->denormalize($data->{'MarketingAirline'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItemMarketingAirline', 'json', $context));
        }
        if (property_exists($data, 'OperatingAirline')) {
            $object->setOperatingAirline($this->denormalizer->denormalize($data->{'OperatingAirline'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItemOperatingAirline', 'json', $context));
        }
        if (property_exists($data, 'DepartureDateTime')) {
            $object->setDepartureDateTime($data->{'DepartureDateTime'});
        }
        if (property_exists($data, 'ArrivalDateTime')) {
            $object->setArrivalDateTime($data->{'ArrivalDateTime'});
        }
        if (property_exists($data, 'FlightNumber')) {
            $object->setFlightNumber($data->{'FlightNumber'});
        }
        if (property_exists($data, 'ResBookDesigCode')) {
            $object->setResBookDesigCode($data->{'ResBookDesigCode'});
        }
        if (property_exists($data, 'ForceConnectionInd')) {
            $object->setForceConnectionInd($data->{'ForceConnectionInd'});
        }
        if (property_exists($data, 'ForceStopOverInd')) {
            $object->setForceStopOverInd($data->{'ForceStopOverInd'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getArrivalAirport()) {
            $data->{'ArrivalAirport'} = $this->normalizer->normalize($object->getArrivalAirport(), 'json', $context);
        }
        if (null !== $object->getDepartureAirport()) {
            $data->{'DepartureAirport'} = $this->normalizer->normalize($object->getDepartureAirport(), 'json', $context);
        }
        if (null !== $object->getEquipment()) {
            $data->{'Equipment'} = $this->normalizer->normalize($object->getEquipment(), 'json', $context);
        }
        if (null !== $object->getFareBreakInfo()) {
            $data->{'FareBreakInfo'} = $this->normalizer->normalize($object->getFareBreakInfo(), 'json', $context);
        }
        if (null !== $object->getHiddenStops()) {
            $data->{'HiddenStops'} = $this->normalizer->normalize($object->getHiddenStops(), 'json', $context);
        }
        if (null !== $object->getMarketingAirline()) {
            $data->{'MarketingAirline'} = $this->normalizer->normalize($object->getMarketingAirline(), 'json', $context);
        }
        if (null !== $object->getOperatingAirline()) {
            $data->{'OperatingAirline'} = $this->normalizer->normalize($object->getOperatingAirline(), 'json', $context);
        }
        if (null !== $object->getDepartureDateTime()) {
            $data->{'DepartureDateTime'} = $object->getDepartureDateTime();
        }
        if (null !== $object->getArrivalDateTime()) {
            $data->{'ArrivalDateTime'} = $object->getArrivalDateTime();
        }
        if (null !== $object->getFlightNumber()) {
            $data->{'FlightNumber'} = $object->getFlightNumber();
        }
        if (null !== $object->getResBookDesigCode()) {
            $data->{'ResBookDesigCode'} = $object->getResBookDesigCode();
        }
        if (null !== $object->getForceConnectionInd()) {
            $data->{'ForceConnectionInd'} = $object->getForceConnectionInd();
        }
        if (null !== $object->getForceStopOverInd()) {
            $data->{'ForceStopOverInd'} = $object->getForceStopOverInd();
        }

        return $data;
    }
}
