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

class SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\SeatMap\\Model\\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\SeatMap\Model\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\SeatMap\Model\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItem();
        if (property_exists($data, 'firstRow')) {
            $object->setFirstRow($data->{'firstRow'});
        }
        if (property_exists($data, 'lastRow')) {
            $object->setLastRow($data->{'lastRow'});
        }
        if (property_exists($data, 'Wing')) {
            $object->setWing($this->denormalizer->denormalize($data->{'Wing'}, 'Ammonkc\\SabreApi\\Model\\SeatMap\\Model\\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemWing', 'json', $context));
        }
        if (property_exists($data, 'CabinClass')) {
            $object->setCabinClass($this->denormalizer->denormalize($data->{'CabinClass'}, 'Ammonkc\\SabreApi\\Model\\SeatMap\\Model\\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemCabinClass', 'json', $context));
        }
        if (property_exists($data, 'Column')) {
            $values = [];
            foreach ($data->{'Column'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\SeatMap\\Model\\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemColumnItem', 'json', $context);
            }
            $object->setColumn($values);
        }
        if (property_exists($data, 'Row')) {
            $values_1 = [];
            foreach ($data->{'Row'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\SeatMap\\Model\\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemRowItem', 'json', $context);
            }
            $object->setRow($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFirstRow()) {
            $data->{'firstRow'} = $object->getFirstRow();
        }
        if (null !== $object->getLastRow()) {
            $data->{'lastRow'} = $object->getLastRow();
        }
        if (null !== $object->getWing()) {
            $data->{'Wing'} = $this->normalizer->normalize($object->getWing(), 'json', $context);
        }
        if (null !== $object->getCabinClass()) {
            $data->{'CabinClass'} = $this->normalizer->normalize($object->getCabinClass(), 'json', $context);
        }
        if (null !== $object->getColumn()) {
            $values = [];
            foreach ($object->getColumn() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Column'} = $values;
        }
        if (null !== $object->getRow()) {
            $values_1 = [];
            foreach ($object->getRow() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Row'} = $values_1;
        }

        return $data;
    }
}
