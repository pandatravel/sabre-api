<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SummaryItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\SummaryItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\SummaryItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\SummaryItem();
        if (property_exists($data, 'DocumentNumber')) {
            $object->setDocumentNumber($data->{'DocumentNumber'});
        }
        if (property_exists($data, 'LocalIssueDateTime')) {
            $object->setLocalIssueDateTime($data->{'LocalIssueDateTime'});
        }
        if (property_exists($data, 'DocumentType')) {
            $object->setDocumentType($data->{'DocumentType'});
        }
        if (property_exists($data, 'IssuingLocation')) {
            $object->setIssuingLocation($data->{'IssuingLocation'});
        }
        if (property_exists($data, 'Reservation')) {
            $object->setReservation($this->denormalizer->denormalize($data->{'Reservation'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\SummaryItemReservation', 'json', $context));
        }
        if (property_exists($data, 'FirstName')) {
            $object->setFirstName($data->{'FirstName'});
        }
        if (property_exists($data, 'LastName')) {
            $object->setLastName($data->{'LastName'});
        }
        if (property_exists($data, 'DocumentStatus')) {
            $object->setDocumentStatus($data->{'DocumentStatus'});
        }
        if (property_exists($data, 'TotalAmount')) {
            $object->setTotalAmount($this->denormalizer->denormalize($data->{'TotalAmount'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\SummaryItemTotalAmount', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDocumentNumber()) {
            $data->{'DocumentNumber'} = $object->getDocumentNumber();
        }
        if (null !== $object->getLocalIssueDateTime()) {
            $data->{'LocalIssueDateTime'} = $object->getLocalIssueDateTime();
        }
        if (null !== $object->getDocumentType()) {
            $data->{'DocumentType'} = $object->getDocumentType();
        }
        if (null !== $object->getIssuingLocation()) {
            $data->{'IssuingLocation'} = $object->getIssuingLocation();
        }
        if (null !== $object->getReservation()) {
            $data->{'Reservation'} = $this->normalizer->normalize($object->getReservation(), 'json', $context);
        }
        if (null !== $object->getFirstName()) {
            $data->{'FirstName'} = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data->{'LastName'} = $object->getLastName();
        }
        if (null !== $object->getDocumentStatus()) {
            $data->{'DocumentStatus'} = $object->getDocumentStatus();
        }
        if (null !== $object->getTotalAmount()) {
            $data->{'TotalAmount'} = $this->normalizer->normalize($object->getTotalAmount(), 'json', $context);
        }

        return $data;
    }
}
