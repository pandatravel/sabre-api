<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemPricingQualifiersItineraryOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersItineraryOptions';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemPricingQualifiersItineraryOptions;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemPricingQualifiersItineraryOptions();
        if (property_exists($data, 'SegmentSelect')) {
            $values = [];
            foreach ($data->{'SegmentSelect'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersItineraryOptionsSegmentSelectItem', 'json', $context);
            }
            $object->setSegmentSelect($values);
        }
        if (property_exists($data, 'SideTrip')) {
            $object->setSideTrip($this->denormalizer->denormalize($data->{'SideTrip'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersItineraryOptionsSideTrip', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSegmentSelect()) {
            $values = [];
            foreach ($object->getSegmentSelect() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'SegmentSelect'} = $values;
        }
        if (null !== $object->getSideTrip()) {
            $data->{'SideTrip'} = $this->normalizer->normalize($object->getSideTrip(), 'json', $context);
        }

        return $data;
    }
}
