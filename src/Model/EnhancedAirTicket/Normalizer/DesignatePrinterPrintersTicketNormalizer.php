<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DesignatePrinterPrintersTicketNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrintersTicket';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\DesignatePrinterPrintersTicket;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\DesignatePrinterPrintersTicket();
        if (property_exists($data, 'CountryCode')) {
            $object->setCountryCode($data->{'CountryCode'});
        }
        if (property_exists($data, 'LNIATA')) {
            $object->setLNIATA($data->{'LNIATA'});
        }
        if (property_exists($data, 'MiniItinerary')) {
            $object->setMiniItinerary($this->denormalizer->denormalize($data->{'MiniItinerary'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrintersTicketMiniItinerary', 'json', $context));
        }
        if (property_exists($data, 'Remote')) {
            $object->setRemote($this->denormalizer->denormalize($data->{'Remote'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrintersTicketRemote', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCountryCode()) {
            $data->{'CountryCode'} = $object->getCountryCode();
        }
        if (null !== $object->getLNIATA()) {
            $data->{'LNIATA'} = $object->getLNIATA();
        }
        if (null !== $object->getMiniItinerary()) {
            $data->{'MiniItinerary'} = $this->normalizer->normalize($object->getMiniItinerary(), 'json', $context);
        }
        if (null !== $object->getRemote()) {
            $data->{'Remote'} = $this->normalizer->normalize($object->getRemote(), 'json', $context);
        }

        return $data;
    }
}
