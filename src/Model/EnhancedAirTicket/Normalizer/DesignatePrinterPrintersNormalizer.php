<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DesignatePrinterPrintersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrinters';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\DesignatePrinterPrinters;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\DesignatePrinterPrinters();
        if (property_exists($data, 'BagTag')) {
            $object->setBagTag($this->denormalizer->denormalize($data->{'BagTag'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrintersBagTag', 'json', $context));
        }
        if (property_exists($data, 'BoardingPass')) {
            $object->setBoardingPass($this->denormalizer->denormalize($data->{'BoardingPass'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrintersBoardingPass', 'json', $context));
        }
        if (property_exists($data, 'Hardcopy')) {
            $object->setHardcopy($this->denormalizer->denormalize($data->{'Hardcopy'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrintersHardcopy', 'json', $context));
        }
        if (property_exists($data, 'InvoiceItinerary')) {
            $object->setInvoiceItinerary($this->denormalizer->denormalize($data->{'InvoiceItinerary'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrintersInvoiceItinerary', 'json', $context));
        }
        if (property_exists($data, 'ListLabel')) {
            $object->setListLabel($this->denormalizer->denormalize($data->{'ListLabel'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrintersListLabel', 'json', $context));
        }
        if (property_exists($data, 'MiniItinerary')) {
            $object->setMiniItinerary($this->denormalizer->denormalize($data->{'MiniItinerary'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrintersMiniItinerary', 'json', $context));
        }
        if (property_exists($data, 'Report')) {
            $object->setReport($this->denormalizer->denormalize($data->{'Report'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrintersReport', 'json', $context));
        }
        if (property_exists($data, 'Ticket')) {
            $object->setTicket($this->denormalizer->denormalize($data->{'Ticket'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinterPrintersTicket', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBagTag()) {
            $data->{'BagTag'} = $this->normalizer->normalize($object->getBagTag(), 'json', $context);
        }
        if (null !== $object->getBoardingPass()) {
            $data->{'BoardingPass'} = $this->normalizer->normalize($object->getBoardingPass(), 'json', $context);
        }
        if (null !== $object->getHardcopy()) {
            $data->{'Hardcopy'} = $this->normalizer->normalize($object->getHardcopy(), 'json', $context);
        }
        if (null !== $object->getInvoiceItinerary()) {
            $data->{'InvoiceItinerary'} = $this->normalizer->normalize($object->getInvoiceItinerary(), 'json', $context);
        }
        if (null !== $object->getListLabel()) {
            $data->{'ListLabel'} = $this->normalizer->normalize($object->getListLabel(), 'json', $context);
        }
        if (null !== $object->getMiniItinerary()) {
            $data->{'MiniItinerary'} = $this->normalizer->normalize($object->getMiniItinerary(), 'json', $context);
        }
        if (null !== $object->getReport()) {
            $data->{'Report'} = $this->normalizer->normalize($object->getReport(), 'json', $context);
        }
        if (null !== $object->getTicket()) {
            $data->{'Ticket'} = $this->normalizer->normalize($object->getTicket(), 'json', $context);
        }

        return $data;
    }
}
