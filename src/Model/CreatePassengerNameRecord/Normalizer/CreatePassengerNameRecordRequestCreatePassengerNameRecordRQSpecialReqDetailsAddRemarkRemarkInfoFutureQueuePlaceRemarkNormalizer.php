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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoFutureQueuePlaceRemarkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoFutureQueuePlaceRemark';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoFutureQueuePlaceRemark;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoFutureQueuePlaceRemark();
        if (property_exists($data, 'Date')) {
            $object->setDate($data->{'Date'});
        }
        if (property_exists($data, 'PrefatoryInstructionCode')) {
            $object->setPrefatoryInstructionCode($data->{'PrefatoryInstructionCode'});
        }
        if (property_exists($data, 'PseudoCityCode')) {
            $object->setPseudoCityCode($data->{'PseudoCityCode'});
        }
        if (property_exists($data, 'QueueIdentifier')) {
            $object->setQueueIdentifier($data->{'QueueIdentifier'});
        }
        if (property_exists($data, 'Time')) {
            $object->setTime($data->{'Time'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDate()) {
            $data->{'Date'} = $object->getDate();
        }
        if (null !== $object->getPrefatoryInstructionCode()) {
            $data->{'PrefatoryInstructionCode'} = $object->getPrefatoryInstructionCode();
        }
        if (null !== $object->getPseudoCityCode()) {
            $data->{'PseudoCityCode'} = $object->getPseudoCityCode();
        }
        if (null !== $object->getQueueIdentifier()) {
            $data->{'QueueIdentifier'} = $object->getQueueIdentifier();
        }
        if (null !== $object->getTime()) {
            $data->{'Time'} = $object->getTime();
        }

        return $data;
    }
}
