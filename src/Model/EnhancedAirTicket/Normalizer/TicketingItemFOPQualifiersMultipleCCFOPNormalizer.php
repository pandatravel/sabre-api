<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemFOPQualifiersMultipleCCFOPNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersMultipleCCFOP';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersMultipleCCFOP;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersMultipleCCFOP();
        if (property_exists($data, 'Fare')) {
            $object->setFare($this->denormalizer->denormalize($data->{'Fare'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersMultipleCCFOPFare', 'json', $context));
        }
        if (property_exists($data, 'CC_One')) {
            $object->setCCOne($this->denormalizer->denormalize($data->{'CC_One'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersMultipleCCFOPCCOne', 'json', $context));
        }
        if (property_exists($data, 'CC_Two')) {
            $object->setCCTwo($this->denormalizer->denormalize($data->{'CC_Two'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersMultipleCCFOPCCTwo', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFare()) {
            $data->{'Fare'} = $this->normalizer->normalize($object->getFare(), 'json', $context);
        }
        if (null !== $object->getCCOne()) {
            $data->{'CC_One'} = $this->normalizer->normalize($object->getCCOne(), 'json', $context);
        }
        if (null !== $object->getCCTwo()) {
            $data->{'CC_Two'} = $this->normalizer->normalize($object->getCCTwo(), 'json', $context);
        }

        return $data;
    }
}
