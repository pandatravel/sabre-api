<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DesignatePrinterNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinter';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\DesignatePrinter;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\DesignatePrinter();
        if (property_exists($data, 'Printers')) {
            $object->setPrinters($this->denormalizer->denormalize($data->{'Printers'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrinters', 'json', $context));
        }
        if (property_exists($data, 'Profile')) {
            $object->setProfile($this->denormalizer->denormalize($data->{'Profile'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterProfile', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPrinters()) {
            $data->{'Printers'} = $this->normalizer->normalize($object->getPrinters(), 'json', $context);
        }
        if (null !== $object->getProfile()) {
            $data->{'Profile'} = $this->normalizer->normalize($object->getProfile(), 'json', $context);
        }

        return $data;
    }
}
