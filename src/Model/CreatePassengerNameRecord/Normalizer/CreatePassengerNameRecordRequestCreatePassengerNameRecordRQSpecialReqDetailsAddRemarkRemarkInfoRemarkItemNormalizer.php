<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoRemarkItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoRemarkItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoRemarkItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoRemarkItem();
        if (property_exists($data, 'Text') && $data->{'Text'} !== null) {
            $object->setText($data->{'Text'});
        }
        if (property_exists($data, 'Code') && $data->{'Code'} !== null) {
            $object->setCode($data->{'Code'});
        }
        if (property_exists($data, 'SegmentNumber') && $data->{'SegmentNumber'} !== null) {
            $object->setSegmentNumber($data->{'SegmentNumber'});
        }
        if (property_exists($data, 'Type') && $data->{'Type'} !== null) {
            $object->setType($data->{'Type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getText()) {
            $data->{'Text'} = $object->getText();
        }
        if (null !== $object->getCode()) {
            $data->{'Code'} = $object->getCode();
        }
        if (null !== $object->getSegmentNumber()) {
            $data->{'SegmentNumber'} = $object->getSegmentNumber();
        }
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }

        return $data;
    }
}
