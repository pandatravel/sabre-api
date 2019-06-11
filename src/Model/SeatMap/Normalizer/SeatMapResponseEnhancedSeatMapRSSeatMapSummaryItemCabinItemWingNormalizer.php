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

class SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemWingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\SeatMap\\Model\\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemWing';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\SeatMap\Model\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemWing;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\SeatMap\Model\SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemWing();
        if (property_exists($data, 'firstRow')) {
            $object->setFirstRow($data->{'firstRow'});
        }
        if (property_exists($data, 'lastRow')) {
            $object->setLastRow($data->{'lastRow'});
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

        return $data;
    }
}
