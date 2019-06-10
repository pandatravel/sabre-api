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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFare';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFare;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFare();
        if (property_exists($data, 'BaseFare')) {
            $object->setBaseFare($this->denormalizer->denormalize($data->{'BaseFare'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareBaseFare', 'json', $context));
        }
        if (property_exists($data, 'EquivFare')) {
            $object->setEquivFare($this->denormalizer->denormalize($data->{'EquivFare'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareEquivFare', 'json', $context));
        }
        if (property_exists($data, 'AncillaryServiceCode')) {
            $object->setAncillaryServiceCode($data->{'AncillaryServiceCode'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBaseFare()) {
            $data->{'BaseFare'} = $this->normalizer->normalize($object->getBaseFare(), 'json', $context);
        }
        if (null !== $object->getEquivFare()) {
            $data->{'EquivFare'} = $this->normalizer->normalize($object->getEquivFare(), 'json', $context);
        }
        if (null !== $object->getAncillaryServiceCode()) {
            $data->{'AncillaryServiceCode'} = $object->getAncillaryServiceCode();
        }

        return $data;
    }
}
