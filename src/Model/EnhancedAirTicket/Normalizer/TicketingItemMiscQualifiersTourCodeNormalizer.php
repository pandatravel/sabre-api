<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemMiscQualifiersTourCodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersTourCode';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemMiscQualifiersTourCode;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemMiscQualifiersTourCode();
        if (property_exists($data, 'SuppressFareReplaceWithBT')) {
            $object->setSuppressFareReplaceWithBT($this->denormalizer->denormalize($data->{'SuppressFareReplaceWithBT'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithBT', 'json', $context));
        }
        if (property_exists($data, 'SuppressFareReplaceWithIT')) {
            $object->setSuppressFareReplaceWithIT($this->denormalizer->denormalize($data->{'SuppressFareReplaceWithIT'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithIT', 'json', $context));
        }
        if (property_exists($data, 'SuppressIT')) {
            $object->setSuppressIT($this->denormalizer->denormalize($data->{'SuppressIT'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersTourCodeSuppressIT', 'json', $context));
        }
        if (property_exists($data, 'SuppressITSupressFare')) {
            $object->setSuppressITSupressFare($this->denormalizer->denormalize($data->{'SuppressITSupressFare'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemMiscQualifiersTourCodeSuppressITSupressFare', 'json', $context));
        }
        if (property_exists($data, 'Text')) {
            $object->setText($data->{'Text'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSuppressFareReplaceWithBT()) {
            $data->{'SuppressFareReplaceWithBT'} = $this->normalizer->normalize($object->getSuppressFareReplaceWithBT(), 'json', $context);
        }
        if (null !== $object->getSuppressFareReplaceWithIT()) {
            $data->{'SuppressFareReplaceWithIT'} = $this->normalizer->normalize($object->getSuppressFareReplaceWithIT(), 'json', $context);
        }
        if (null !== $object->getSuppressIT()) {
            $data->{'SuppressIT'} = $this->normalizer->normalize($object->getSuppressIT(), 'json', $context);
        }
        if (null !== $object->getSuppressITSupressFare()) {
            $data->{'SuppressITSupressFare'} = $this->normalizer->normalize($object->getSuppressITSupressFare(), 'json', $context);
        }
        if (null !== $object->getText()) {
            $data->{'Text'} = $object->getText();
        }

        return $data;
    }
}
