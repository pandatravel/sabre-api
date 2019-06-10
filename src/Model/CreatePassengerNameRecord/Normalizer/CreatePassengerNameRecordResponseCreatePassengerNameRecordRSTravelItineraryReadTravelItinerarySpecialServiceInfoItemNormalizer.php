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

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItem();
        if (property_exists($data, 'Service')) {
            $object->setService($this->denormalizer->denormalize($data->{'Service'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemService', 'json', $context));
        }
        if (property_exists($data, 'RPH')) {
            $object->setRPH($data->{'RPH'});
        }
        if (property_exists($data, 'Type')) {
            $object->setType($data->{'Type'});
        }
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getService()) {
            $data->{'Service'} = $this->normalizer->normalize($object->getService(), 'json', $context);
        }
        if (null !== $object->getRPH()) {
            $data->{'RPH'} = $object->getRPH();
        }
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }

        return $data;
    }
}
