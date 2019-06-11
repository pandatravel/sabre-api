<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PostProcessingEndTransactionEmailItineraryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessingEndTransactionEmailItinerary';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\PostProcessingEndTransactionEmailItinerary;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\PostProcessingEndTransactionEmailItinerary();
        if (property_exists($data, 'Ind')) {
            $object->setInd($data->{'Ind'});
        }
        if (property_exists($data, 'PDF')) {
            $object->setPDF($this->denormalizer->denormalize($data->{'PDF'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessingEndTransactionEmailItineraryPDF', 'json', $context));
        }
        if (property_exists($data, 'Segment')) {
            $values = [];
            foreach ($data->{'Segment'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\PostProcessingEndTransactionEmailItinerarySegmentItem', 'json', $context);
            }
            $object->setSegment($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getInd()) {
            $data->{'Ind'} = $object->getInd();
        }
        if (null !== $object->getPDF()) {
            $data->{'PDF'} = $this->normalizer->normalize($object->getPDF(), 'json', $context);
        }
        if (null !== $object->getSegment()) {
            $values = [];
            foreach ($object->getSegment() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Segment'} = $values;
        }

        return $data;
    }
}
