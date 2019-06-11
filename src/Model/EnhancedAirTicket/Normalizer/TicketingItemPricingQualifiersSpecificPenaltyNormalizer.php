<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemPricingQualifiersSpecificPenaltyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersSpecificPenalty';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemPricingQualifiersSpecificPenalty;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemPricingQualifiersSpecificPenalty();
        if (property_exists($data, 'AdditionalInfo')) {
            $object->setAdditionalInfo($data->{'AdditionalInfo'});
        }
        if (property_exists($data, 'Changeable')) {
            $object->setChangeable($this->denormalizer->denormalize($data->{'Changeable'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersSpecificPenaltyChangeable', 'json', $context));
        }
        if (property_exists($data, 'EitherOr')) {
            $object->setEitherOr($this->denormalizer->denormalize($data->{'EitherOr'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersSpecificPenaltyEitherOr', 'json', $context));
        }
        if (property_exists($data, 'Refundable')) {
            $object->setRefundable($this->denormalizer->denormalize($data->{'Refundable'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersSpecificPenaltyRefundable', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAdditionalInfo()) {
            $data->{'AdditionalInfo'} = $object->getAdditionalInfo();
        }
        if (null !== $object->getChangeable()) {
            $data->{'Changeable'} = $this->normalizer->normalize($object->getChangeable(), 'json', $context);
        }
        if (null !== $object->getEitherOr()) {
            $data->{'EitherOr'} = $this->normalizer->normalize($object->getEitherOr(), 'json', $context);
        }
        if (null !== $object->getRefundable()) {
            $data->{'Refundable'} = $this->normalizer->normalize($object->getRefundable(), 'json', $context);
        }

        return $data;
    }
}
