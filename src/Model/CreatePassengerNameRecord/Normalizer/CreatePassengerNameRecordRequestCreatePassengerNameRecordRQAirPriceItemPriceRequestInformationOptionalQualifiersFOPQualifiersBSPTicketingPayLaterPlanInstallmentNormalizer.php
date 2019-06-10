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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanInstallmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanInstallment';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanInstallment;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanInstallment();
        if (property_exists($data, 'Count')) {
            $object->setCount($data->{'Count'});
        }
        if (property_exists($data, 'PayLaterReferenceNumber')) {
            $object->setPayLaterReferenceNumber($data->{'PayLaterReferenceNumber'});
        }
        if (property_exists($data, 'Reference')) {
            $object->setReference($data->{'Reference'});
        }
        if (property_exists($data, 'Value')) {
            $object->setValue($data->{'Value'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCount()) {
            $data->{'Count'} = $object->getCount();
        }
        if (null !== $object->getPayLaterReferenceNumber()) {
            $data->{'PayLaterReferenceNumber'} = $object->getPayLaterReferenceNumber();
        }
        if (null !== $object->getReference()) {
            $data->{'Reference'} = $object->getReference();
        }
        if (null !== $object->getValue()) {
            $data->{'Value'} = $object->getValue();
        }

        return $data;
    }
}