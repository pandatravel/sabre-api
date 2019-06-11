<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOneCCInfoPaymentCard();
        if (property_exists($data, 'CardSecurityCode')) {
            $object->setCardSecurityCode($data->{'CardSecurityCode'});
        }
        if (property_exists($data, 'Code')) {
            $object->setCode($data->{'Code'});
        }
        if (property_exists($data, 'ExpireDate')) {
            $object->setExpireDate($data->{'ExpireDate'});
        }
        if (property_exists($data, 'ExtendedPayment')) {
            $object->setExtendedPayment($data->{'ExtendedPayment'});
        }
        if (property_exists($data, 'ManualApprovalCode')) {
            $object->setManualApprovalCode($data->{'ManualApprovalCode'});
        }
        if (property_exists($data, 'Number')) {
            $object->setNumber($data->{'Number'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCardSecurityCode()) {
            $data->{'CardSecurityCode'} = $object->getCardSecurityCode();
        }
        if (null !== $object->getCode()) {
            $data->{'Code'} = $object->getCode();
        }
        if (null !== $object->getExpireDate()) {
            $data->{'ExpireDate'} = $object->getExpireDate();
        }
        if (null !== $object->getExtendedPayment()) {
            $data->{'ExtendedPayment'} = $object->getExtendedPayment();
        }
        if (null !== $object->getManualApprovalCode()) {
            $data->{'ManualApprovalCode'} = $object->getManualApprovalCode();
        }
        if (null !== $object->getNumber()) {
            $data->{'Number'} = $object->getNumber();
        }

        return $data;
    }
}
