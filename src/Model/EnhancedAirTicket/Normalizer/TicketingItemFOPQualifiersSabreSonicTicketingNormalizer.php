<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemFOPQualifiersSabreSonicTicketingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersSabreSonicTicketing';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersSabreSonicTicketing;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersSabreSonicTicketing();
        if (property_exists($data, 'BasicFOP')) {
            $object->setBasicFOP($this->denormalizer->denormalize($data->{'BasicFOP'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersSabreSonicTicketingBasicFOP', 'json', $context));
        }
        if (property_exists($data, 'EnhancedMultipleFOP')) {
            $object->setEnhancedMultipleFOP($this->denormalizer->denormalize($data->{'EnhancedMultipleFOP'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOP', 'json', $context));
        }
        if (property_exists($data, 'MultipleFOP')) {
            $object->setMultipleFOP($this->denormalizer->denormalize($data->{'MultipleFOP'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOP', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBasicFOP()) {
            $data->{'BasicFOP'} = $this->normalizer->normalize($object->getBasicFOP(), 'json', $context);
        }
        if (null !== $object->getEnhancedMultipleFOP()) {
            $data->{'EnhancedMultipleFOP'} = $this->normalizer->normalize($object->getEnhancedMultipleFOP(), 'json', $context);
        }
        if (null !== $object->getMultipleFOP()) {
            $data->{'MultipleFOP'} = $this->normalizer->normalize($object->getMultipleFOP(), 'json', $context);
        }

        return $data;
    }
}
