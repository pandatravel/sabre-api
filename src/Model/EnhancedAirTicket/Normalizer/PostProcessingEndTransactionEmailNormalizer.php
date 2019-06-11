<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PostProcessingEndTransactionEmailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessingEndTransactionEmail';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\PostProcessingEndTransactionEmail;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\PostProcessingEndTransactionEmail();
        if (property_exists($data, 'Ind')) {
            $object->setInd($data->{'Ind'});
        }
        if (property_exists($data, 'eTicket')) {
            $object->setETicket($this->denormalizer->denormalize($data->{'eTicket'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessingEndTransactionEmailETicket', 'json', $context));
        }
        if (property_exists($data, 'Invoice')) {
            $object->setInvoice($this->denormalizer->denormalize($data->{'Invoice'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessingEndTransactionEmailInvoice', 'json', $context));
        }
        if (property_exists($data, 'Itinerary')) {
            $object->setItinerary($this->denormalizer->denormalize($data->{'Itinerary'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessingEndTransactionEmailItinerary', 'json', $context));
        }
        if (property_exists($data, 'PersonName')) {
            $object->setPersonName($this->denormalizer->denormalize($data->{'PersonName'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessingEndTransactionEmailPersonName', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getInd()) {
            $data->{'Ind'} = $object->getInd();
        }
        if (null !== $object->getETicket()) {
            $data->{'eTicket'} = $this->normalizer->normalize($object->getETicket(), 'json', $context);
        }
        if (null !== $object->getInvoice()) {
            $data->{'Invoice'} = $this->normalizer->normalize($object->getInvoice(), 'json', $context);
        }
        if (null !== $object->getItinerary()) {
            $data->{'Itinerary'} = $this->normalizer->normalize($object->getItinerary(), 'json', $context);
        }
        if (null !== $object->getPersonName()) {
            $data->{'PersonName'} = $this->normalizer->normalize($object->getPersonName(), 'json', $context);
        }

        return $data;
    }
}
