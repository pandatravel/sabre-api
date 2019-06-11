<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AirTicketRQNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\AirTicketRQ';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\AirTicketRQ;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\AirTicketRQ();
        if (property_exists($data, 'version')) {
            $object->setVersion($data->{'version'});
        }
        if (property_exists($data, 'targetCity')) {
            $object->setTargetCity($data->{'targetCity'});
        }
        if (property_exists($data, 'DesignatePrinter')) {
            $object->setDesignatePrinter($this->denormalizer->denormalize($data->{'DesignatePrinter'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\DesignatePrinter', 'json', $context));
        }
        if (property_exists($data, 'Itinerary')) {
            $object->setItinerary($this->denormalizer->denormalize($data->{'Itinerary'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\Itinerary', 'json', $context));
        }
        if (property_exists($data, 'AccountingLines')) {
            $object->setAccountingLines($this->denormalizer->denormalize($data->{'AccountingLines'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\AccountingLines', 'json', $context));
        }
        if (property_exists($data, 'Ticketing')) {
            $values = [];
            foreach ($data->{'Ticketing'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItem', 'json', $context);
            }
            $object->setTicketing($values);
        }
        if (property_exists($data, 'PostProcessing')) {
            $object->setPostProcessing($this->denormalizer->denormalize($data->{'PostProcessing'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessing', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }
        if (null !== $object->getTargetCity()) {
            $data->{'targetCity'} = $object->getTargetCity();
        }
        if (null !== $object->getDesignatePrinter()) {
            $data->{'DesignatePrinter'} = $this->normalizer->normalize($object->getDesignatePrinter(), 'json', $context);
        }
        if (null !== $object->getItinerary()) {
            $data->{'Itinerary'} = $this->normalizer->normalize($object->getItinerary(), 'json', $context);
        }
        if (null !== $object->getAccountingLines()) {
            $data->{'AccountingLines'} = $this->normalizer->normalize($object->getAccountingLines(), 'json', $context);
        }
        if (null !== $object->getTicketing()) {
            $values = [];
            foreach ($object->getTicketing() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Ticketing'} = $values;
        }
        if (null !== $object->getPostProcessing()) {
            $data->{'PostProcessing'} = $this->normalizer->normalize($object->getPostProcessing(), 'json', $context);
        }

        return $data;
    }
}
