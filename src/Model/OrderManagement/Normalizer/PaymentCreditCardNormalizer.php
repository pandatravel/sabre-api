<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\OrderManagement\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PaymentCreditCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\OrderManagement\\PaymentCreditCard';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\OrderManagement\PaymentCreditCard;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\OrderManagement\PaymentCreditCard();
        if (property_exists($data, 'cardNumber')) {
            $object->setCardNumber($data->{'cardNumber'});
        }
        if (property_exists($data, 'cardNumberToken')) {
            $object->setCardNumberToken($data->{'cardNumberToken'});
        }
        if (property_exists($data, 'vendorCode')) {
            $object->setVendorCode($data->{'vendorCode'});
        }
        if (property_exists($data, 'expirationDate')) {
            $object->setExpirationDate($data->{'expirationDate'});
        }
        if (property_exists($data, 'cvv')) {
            $object->setCvv($data->{'cvv'});
        }
        if (property_exists($data, 'cvvToken')) {
            $object->setCvvToken($data->{'cvvToken'});
        }
        if (property_exists($data, 'contactInfoRefId')) {
            $object->setContactInfoRefId($data->{'contactInfoRefId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCardNumber()) {
            $data->{'cardNumber'} = $object->getCardNumber();
        }
        if (null !== $object->getCardNumberToken()) {
            $data->{'cardNumberToken'} = $object->getCardNumberToken();
        }
        if (null !== $object->getVendorCode()) {
            $data->{'vendorCode'} = $object->getVendorCode();
        }
        if (null !== $object->getExpirationDate()) {
            $data->{'expirationDate'} = $object->getExpirationDate();
        }
        if (null !== $object->getCvv()) {
            $data->{'cvv'} = $object->getCvv();
        }
        if (null !== $object->getCvvToken()) {
            $data->{'cvvToken'} = $object->getCvvToken();
        }
        if (null !== $object->getContactInfoRefId()) {
            $data->{'contactInfoRefId'} = $object->getContactInfoRefId();
        }

        return $data;
    }
}
