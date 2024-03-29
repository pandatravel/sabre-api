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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCustLoyaltyItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCustLoyaltyItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCustLoyaltyItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCustLoyaltyItem();
        if (property_exists($data, 'MembershipID') && $data->{'MembershipID'} !== null) {
            $object->setMembershipID($data->{'MembershipID'});
        }
        if (property_exists($data, 'NameNumber') && $data->{'NameNumber'} !== null) {
            $object->setNameNumber($data->{'NameNumber'});
        }
        if (property_exists($data, 'ProgramID') && $data->{'ProgramID'} !== null) {
            $object->setProgramID($data->{'ProgramID'});
        }
        if (property_exists($data, 'SegmentNumber') && $data->{'SegmentNumber'} !== null) {
            $object->setSegmentNumber($data->{'SegmentNumber'});
        }
        if (property_exists($data, 'TravelingCarrierCode') && $data->{'TravelingCarrierCode'} !== null) {
            $object->setTravelingCarrierCode($data->{'TravelingCarrierCode'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMembershipID()) {
            $data->{'MembershipID'} = $object->getMembershipID();
        }
        if (null !== $object->getNameNumber()) {
            $data->{'NameNumber'} = $object->getNameNumber();
        }
        if (null !== $object->getProgramID()) {
            $data->{'ProgramID'} = $object->getProgramID();
        }
        if (null !== $object->getSegmentNumber()) {
            $data->{'SegmentNumber'} = $object->getSegmentNumber();
        }
        if (null !== $object->getTravelingCarrierCode()) {
            $data->{'TravelingCarrierCode'} = $object->getTravelingCarrierCode();
        }

        return $data;
    }
}
