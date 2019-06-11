<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemFOPQualifiersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiers';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiers;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiers();
        if (property_exists($data, 'BasicFOP')) {
            $object->setBasicFOP($this->denormalizer->denormalize($data->{'BasicFOP'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBasicFOP', 'json', $context));
        }
        if (property_exists($data, 'BSP_Ticketing')) {
            $object->setBSPTicketing($this->denormalizer->denormalize($data->{'BSP_Ticketing'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketing', 'json', $context));
        }
        if (property_exists($data, 'MultipleCC_FOP')) {
            $object->setMultipleCCFOP($this->denormalizer->denormalize($data->{'MultipleCC_FOP'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersMultipleCCFOP', 'json', $context));
        }
        if (property_exists($data, 'SabreSonicTicketing')) {
            $object->setSabreSonicTicketing($this->denormalizer->denormalize($data->{'SabreSonicTicketing'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersSabreSonicTicketing', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBasicFOP()) {
            $data->{'BasicFOP'} = $this->normalizer->normalize($object->getBasicFOP(), 'json', $context);
        }
        if (null !== $object->getBSPTicketing()) {
            $data->{'BSP_Ticketing'} = $this->normalizer->normalize($object->getBSPTicketing(), 'json', $context);
        }
        if (null !== $object->getMultipleCCFOP()) {
            $data->{'MultipleCC_FOP'} = $this->normalizer->normalize($object->getMultipleCCFOP(), 'json', $context);
        }
        if (null !== $object->getSabreSonicTicketing()) {
            $data->{'SabreSonicTicketing'} = $this->normalizer->normalize($object->getSabreSonicTicketing(), 'json', $context);
        }

        return $data;
    }
}
