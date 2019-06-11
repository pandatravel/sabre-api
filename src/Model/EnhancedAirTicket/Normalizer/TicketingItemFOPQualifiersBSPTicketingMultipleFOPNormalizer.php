<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemFOPQualifiersBSPTicketingMultipleFOPNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketingMultipleFOP';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersBSPTicketingMultipleFOP;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemFOPQualifiersBSPTicketingMultipleFOP();
        if (property_exists($data, 'Fare')) {
            $object->setFare($this->denormalizer->denormalize($data->{'Fare'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketingMultipleFOPFare', 'json', $context));
        }
        if (property_exists($data, 'FOP_One')) {
            $object->setFOPOne($this->denormalizer->denormalize($data->{'FOP_One'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPOne', 'json', $context));
        }
        if (property_exists($data, 'FOP_Two')) {
            $object->setFOPTwo($this->denormalizer->denormalize($data->{'FOP_Two'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketingMultipleFOPFOPTwo', 'json', $context));
        }
        if (property_exists($data, 'Taxes')) {
            $object->setTaxes($this->denormalizer->denormalize($data->{'Taxes'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemFOPQualifiersBSPTicketingMultipleFOPTaxes', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFare()) {
            $data->{'Fare'} = $this->normalizer->normalize($object->getFare(), 'json', $context);
        }
        if (null !== $object->getFOPOne()) {
            $data->{'FOP_One'} = $this->normalizer->normalize($object->getFOPOne(), 'json', $context);
        }
        if (null !== $object->getFOPTwo()) {
            $data->{'FOP_Two'} = $this->normalizer->normalize($object->getFOPTwo(), 'json', $context);
        }
        if (null !== $object->getTaxes()) {
            $data->{'Taxes'} = $this->normalizer->normalize($object->getTaxes(), 'json', $context);
        }

        return $data;
    }
}
