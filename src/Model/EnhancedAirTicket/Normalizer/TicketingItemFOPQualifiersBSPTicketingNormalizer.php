<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemFOPQualifiersBSPTicketingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketing';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersBSPTicketing;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersBSPTicketing();
        if (property_exists($data, 'MultipleFOP')) {
            $object->setMultipleFOP($this->denormalizer->denormalize($data->{'MultipleFOP'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketingMultipleFOP', 'json', $context));
        }
        if (property_exists($data, 'MultipleMiscFOP')) {
            $object->setMultipleMiscFOP($this->denormalizer->denormalize($data->{'MultipleMiscFOP'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketingMultipleMiscFOP', 'json', $context));
        }
        if (property_exists($data, 'PayLaterPlan')) {
            $object->setPayLaterPlan($this->denormalizer->denormalize($data->{'PayLaterPlan'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketingPayLaterPlan', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMultipleFOP()) {
            $data->{'MultipleFOP'} = $this->normalizer->normalize($object->getMultipleFOP(), 'json', $context);
        }
        if (null !== $object->getMultipleMiscFOP()) {
            $data->{'MultipleMiscFOP'} = $this->normalizer->normalize($object->getMultipleMiscFOP(), 'json', $context);
        }
        if (null !== $object->getPayLaterPlan()) {
            $data->{'PayLaterPlan'} = $this->normalizer->normalize($object->getPayLaterPlan(), 'json', $context);
        }

        return $data;
    }
}
