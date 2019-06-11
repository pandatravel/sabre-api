<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItem();
        if (property_exists($data, 'FlightQualifiers')) {
            $object->setFlightQualifiers($this->denormalizer->denormalize($data->{'FlightQualifiers'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFlightQualifiers', 'json', $context));
        }
        if (property_exists($data, 'FOP_Qualifiers')) {
            $object->setFOPQualifiers($this->denormalizer->denormalize($data->{'FOP_Qualifiers'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiers', 'json', $context));
        }
        if (property_exists($data, 'MiscQualifiers')) {
            $object->setMiscQualifiers($this->denormalizer->denormalize($data->{'MiscQualifiers'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiers', 'json', $context));
        }
        if (property_exists($data, 'PricingQualifiers')) {
            $object->setPricingQualifiers($this->denormalizer->denormalize($data->{'PricingQualifiers'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiers', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFlightQualifiers()) {
            $data->{'FlightQualifiers'} = $this->normalizer->normalize($object->getFlightQualifiers(), 'json', $context);
        }
        if (null !== $object->getFOPQualifiers()) {
            $data->{'FOP_Qualifiers'} = $this->normalizer->normalize($object->getFOPQualifiers(), 'json', $context);
        }
        if (null !== $object->getMiscQualifiers()) {
            $data->{'MiscQualifiers'} = $this->normalizer->normalize($object->getMiscQualifiers(), 'json', $context);
        }
        if (null !== $object->getPricingQualifiers()) {
            $data->{'PricingQualifiers'} = $this->normalizer->normalize($object->getPricingQualifiers(), 'json', $context);
        }

        return $data;
    }
}
