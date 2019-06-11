<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlightNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\SeatMap\\Model\\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlight';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\SeatMap\Model\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlight;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\SeatMap\Model\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlight();
        if (property_exists($data, 'destination')) {
            $object->setDestination($data->{'destination'});
        }
        if (property_exists($data, 'origin')) {
            $object->setOrigin($data->{'origin'});
        }
        if (property_exists($data, 'DepartureDate')) {
            $object->setDepartureDate($this->denormalizer->denormalize($data->{'DepartureDate'}, 'Ammonkc\\SabreApi\\Model\\SeatMap\\Model\\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlightDepartureDate', 'json', $context));
        }
        if (property_exists($data, 'Marketing')) {
            $values = [];
            foreach ($data->{'Marketing'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\SeatMap\\Model\\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemFlightMarketingItem', 'json', $context);
            }
            $object->setMarketing($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDestination()) {
            $data->{'destination'} = $object->getDestination();
        }
        if (null !== $object->getOrigin()) {
            $data->{'origin'} = $object->getOrigin();
        }
        if (null !== $object->getDepartureDate()) {
            $data->{'DepartureDate'} = $this->normalizer->normalize($object->getDepartureDate(), 'json', $context);
        }
        if (null !== $object->getMarketing()) {
            $values = [];
            foreach ($object->getMarketing() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Marketing'} = $values;
        }

        return $data;
    }
}
