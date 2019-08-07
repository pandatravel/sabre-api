<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItem();
        if (property_exists($data, 'AirFareInfo') && $data->{'AirFareInfo'} !== null) {
            $object->setAirFareInfo($this->denormalizer->denormalize($data->{'AirFareInfo'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfo', 'json', $context));
        }
        if (property_exists($data, 'FlightSegment') && $data->{'FlightSegment'} !== null) {
            $values = [];
            foreach ($data->{'FlightSegment'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItem', 'json', $context);
            }
            $object->setFlightSegment($values);
        }
        if (property_exists($data, 'RPH') && $data->{'RPH'} !== null) {
            $object->setRPH($data->{'RPH'});
        }
        if (property_exists($data, 'TicketingCarrier') && $data->{'TicketingCarrier'} !== null) {
            $object->setTicketingCarrier($data->{'TicketingCarrier'});
        }
        if (property_exists($data, 'ValidatingCarrier') && $data->{'ValidatingCarrier'} !== null) {
            $object->setValidatingCarrier($data->{'ValidatingCarrier'});
        }
        if (property_exists($data, 'SalePseudoCityCode') && $data->{'SalePseudoCityCode'} !== null) {
            $object->setSalePseudoCityCode($data->{'SalePseudoCityCode'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAirFareInfo()) {
            $data->{'AirFareInfo'} = $this->normalizer->normalize($object->getAirFareInfo(), 'json', $context);
        }
        if (null !== $object->getFlightSegment()) {
            $values = [];
            foreach ($object->getFlightSegment() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'FlightSegment'} = $values;
        }
        if (null !== $object->getRPH()) {
            $data->{'RPH'} = $object->getRPH();
        }
        if (null !== $object->getTicketingCarrier()) {
            $data->{'TicketingCarrier'} = $object->getTicketingCarrier();
        }
        if (null !== $object->getValidatingCarrier()) {
            $data->{'ValidatingCarrier'} = $object->getValidatingCarrier();
        }
        if (null !== $object->getSalePseudoCityCode()) {
            $data->{'SalePseudoCityCode'} = $object->getSalePseudoCityCode();
        }

        return $data;
    }
}
