<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemPricingQualifiersSpecificPenaltyRefundableNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersSpecificPenaltyRefundable';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemPricingQualifiersSpecificPenaltyRefundable;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemPricingQualifiersSpecificPenaltyRefundable();
        if (property_exists($data, 'Any')) {
            $object->setAny($data->{'Any'});
        }
        if (property_exists($data, 'CurrencyCode')) {
            $object->setCurrencyCode($data->{'CurrencyCode'});
        }
        if (property_exists($data, 'MaxPenalty')) {
            $object->setMaxPenalty($data->{'MaxPenalty'});
        }
        if (property_exists($data, 'BeforeDeparture')) {
            $object->setBeforeDeparture($data->{'BeforeDeparture'});
        }
        if (property_exists($data, 'AfterDeparture')) {
            $object->setAfterDeparture($data->{'AfterDeparture'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAny()) {
            $data->{'Any'} = $object->getAny();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'CurrencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getMaxPenalty()) {
            $data->{'MaxPenalty'} = $object->getMaxPenalty();
        }
        if (null !== $object->getBeforeDeparture()) {
            $data->{'BeforeDeparture'} = $object->getBeforeDeparture();
        }
        if (null !== $object->getAfterDeparture()) {
            $data->{'AfterDeparture'} = $object->getAfterDeparture();
        }

        return $data;
    }
}
