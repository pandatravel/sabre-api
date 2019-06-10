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

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfoAssociatedReferenceInformationAssociatedPNRSummariesAssociatedPNRSummaryItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfoAssociatedReferenceInformationAssociatedPNRSummariesAssociatedPNRSummaryItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfoAssociatedReferenceInformationAssociatedPNRSummariesAssociatedPNRSummaryItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfoAssociatedReferenceInformationAssociatedPNRSummariesAssociatedPNRSummaryItem();
        if (property_exists($data, 'RecordLocator')) {
            $object->setRecordLocator($data->{'RecordLocator'});
        }
        if (property_exists($data, 'NumberOfSeats')) {
            $object->setNumberOfSeats($data->{'NumberOfSeats'});
        }
        if (property_exists($data, 'TicketingTimeLimitInfo')) {
            $object->setTicketingTimeLimitInfo($data->{'TicketingTimeLimitInfo'});
        }
        if (property_exists($data, 'FreeText')) {
            $object->setFreeText($data->{'FreeText'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRecordLocator()) {
            $data->{'RecordLocator'} = $object->getRecordLocator();
        }
        if (null !== $object->getNumberOfSeats()) {
            $data->{'NumberOfSeats'} = $object->getNumberOfSeats();
        }
        if (null !== $object->getTicketingTimeLimitInfo()) {
            $data->{'TicketingTimeLimitInfo'} = $object->getTicketingTimeLimitInfo();
        }
        if (null !== $object->getFreeText()) {
            $data->{'FreeText'} = $object->getFreeText();
        }

        return $data;
    }
}
