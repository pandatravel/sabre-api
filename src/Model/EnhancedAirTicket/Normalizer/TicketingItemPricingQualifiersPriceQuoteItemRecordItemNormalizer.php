<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemPricingQualifiersPriceQuoteItemRecordItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersPriceQuoteItemRecordItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemPricingQualifiersPriceQuoteItemRecordItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemPricingQualifiersPriceQuoteItemRecordItem();
        if (property_exists($data, 'EndNumber')) {
            $object->setEndNumber($data->{'EndNumber'});
        }
        if (property_exists($data, 'Number')) {
            $object->setNumber($data->{'Number'});
        }
        if (property_exists($data, 'Reissue')) {
            $object->setReissue($data->{'Reissue'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEndNumber()) {
            $data->{'EndNumber'} = $object->getEndNumber();
        }
        if (null !== $object->getNumber()) {
            $data->{'Number'} = $object->getNumber();
        }
        if (null !== $object->getReissue()) {
            $data->{'Reissue'} = $object->getReissue();
        }

        return $data;
    }
}
