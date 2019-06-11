<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemPricingQualifiersValidityDatesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersValidityDatesItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemPricingQualifiersValidityDatesItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemPricingQualifiersValidityDatesItem();
        if (property_exists($data, 'NotValidAfter')) {
            $object->setNotValidAfter($data->{'NotValidAfter'});
        }
        if (property_exists($data, 'NotValidBefore')) {
            $object->setNotValidBefore($data->{'NotValidBefore'});
        }
        if (property_exists($data, 'Segment')) {
            $values = [];
            foreach ($data->{'Segment'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersValidityDatesItemSegmentItem', 'json', $context);
            }
            $object->setSegment($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getNotValidAfter()) {
            $data->{'NotValidAfter'} = $object->getNotValidAfter();
        }
        if (null !== $object->getNotValidBefore()) {
            $data->{'NotValidBefore'} = $object->getNotValidBefore();
        }
        if (null !== $object->getSegment()) {
            $values = [];
            foreach ($object->getSegment() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Segment'} = $values;
        }

        return $data;
    }
}
