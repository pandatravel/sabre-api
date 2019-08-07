<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfo';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfo';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfo();
        if (property_exists($data, 'FOP_Remark')) {
            $object->setFOPRemark($this->denormalizer->denormalize($data->{'FOP_Remark'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoFOPRemark', 'json', $context));
        }
        if (property_exists($data, 'FutureQueuePlaceRemark')) {
            $object->setFutureQueuePlaceRemark($this->denormalizer->denormalize($data->{'FutureQueuePlaceRemark'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoFutureQueuePlaceRemark', 'json', $context));
        }
        if (property_exists($data, 'Remark')) {
            $values = [];
            foreach ($data->{'Remark'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoRemarkItem', 'json', $context);
            }
            $object->setRemark($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFOPRemark()) {
            $data->{'FOP_Remark'} = $this->normalizer->normalize($object->getFOPRemark(), 'json', $context);
        }
        if (null !== $object->getFutureQueuePlaceRemark()) {
            $data->{'FutureQueuePlaceRemark'} = $this->normalizer->normalize($object->getFutureQueuePlaceRemark(), 'json', $context);
        }
        if (null !== $object->getRemark()) {
            $values = [];
            foreach ($object->getRemark() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Remark'} = $values;
        }

        return $data;
    }
}
