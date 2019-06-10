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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPayment';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPayment;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPayment();
        if (property_exists($data, 'PaymentCard')) {
            $object->setPaymentCard($this->denormalizer->denormalize($data->{'PaymentCard'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCard', 'json', $context));
        }
        if (property_exists($data, 'VirtualCard')) {
            $object->setVirtualCard($this->denormalizer->denormalize($data->{'VirtualCard'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentVirtualCard', 'json', $context));
        }
        if (property_exists($data, 'Agency')) {
            $object->setAgency($this->denormalizer->denormalize($data->{'Agency'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentAgency', 'json', $context));
        }
        if (property_exists($data, 'Corporate')) {
            $object->setCorporate($this->denormalizer->denormalize($data->{'Corporate'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentCorporate', 'json', $context));
        }
        if (property_exists($data, 'Company')) {
            $object->setCompany($this->denormalizer->denormalize($data->{'Company'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentCompany', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPaymentCard()) {
            $data->{'PaymentCard'} = $this->normalizer->normalize($object->getPaymentCard(), 'json', $context);
        }
        if (null !== $object->getVirtualCard()) {
            $data->{'VirtualCard'} = $this->normalizer->normalize($object->getVirtualCard(), 'json', $context);
        }
        if (null !== $object->getAgency()) {
            $data->{'Agency'} = $this->normalizer->normalize($object->getAgency(), 'json', $context);
        }
        if (null !== $object->getCorporate()) {
            $data->{'Corporate'} = $this->normalizer->normalize($object->getCorporate(), 'json', $context);
        }
        if (null !== $object->getCompany()) {
            $data->{'Company'} = $this->normalizer->normalize($object->getCompany(), 'json', $context);
        }

        return $data;
    }
}
