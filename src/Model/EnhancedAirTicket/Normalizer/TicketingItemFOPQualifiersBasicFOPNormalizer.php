<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemFOPQualifiersBasicFOPNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBasicFOP';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersBasicFOP;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersBasicFOP();
        if (property_exists($data, 'Reference')) {
            $object->setReference($data->{'Reference'});
        }
        if (property_exists($data, 'Type')) {
            $object->setType($data->{'Type'});
        }
        if (property_exists($data, 'Virtual')) {
            $object->setVirtual($data->{'Virtual'});
        }
        if (property_exists($data, 'CC_Info')) {
            $object->setCCInfo($this->denormalizer->denormalize($data->{'CC_Info'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBasicFOPCCInfo', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getReference()) {
            $data->{'Reference'} = $object->getReference();
        }
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }
        if (null !== $object->getVirtual()) {
            $data->{'Virtual'} = $object->getVirtual();
        }
        if (null !== $object->getCCInfo()) {
            $data->{'CC_Info'} = $this->normalizer->normalize($object->getCCInfo(), 'json', $context);
        }

        return $data;
    }
}
