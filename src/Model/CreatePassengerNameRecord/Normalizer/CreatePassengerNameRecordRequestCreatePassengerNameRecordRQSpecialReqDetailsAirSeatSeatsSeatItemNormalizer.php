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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAirSeatSeatsSeatItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAirSeatSeatsSeatItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAirSeatSeatsSeatItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAirSeatSeatsSeatItem();
        if (property_exists($data, 'BoardingPass') && $data->{'BoardingPass'} !== null) {
            $object->setBoardingPass($data->{'BoardingPass'});
        }
        if (property_exists($data, 'ChangeOfGauge') && $data->{'ChangeOfGauge'} !== null) {
            $object->setChangeOfGauge($data->{'ChangeOfGauge'});
        }
        if (property_exists($data, 'NameNumber') && $data->{'NameNumber'} !== null) {
            $object->setNameNumber($data->{'NameNumber'});
        }
        if (property_exists($data, 'Number') && $data->{'Number'} !== null) {
            $object->setNumber($data->{'Number'});
        }
        if (property_exists($data, 'Preference') && $data->{'Preference'} !== null) {
            $object->setPreference($data->{'Preference'});
        }
        if (property_exists($data, 'SegmentNumber') && $data->{'SegmentNumber'} !== null) {
            $object->setSegmentNumber($data->{'SegmentNumber'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBoardingPass()) {
            $data->{'BoardingPass'} = $object->getBoardingPass();
        }
        if (null !== $object->getChangeOfGauge()) {
            $data->{'ChangeOfGauge'} = $object->getChangeOfGauge();
        }
        if (null !== $object->getNameNumber()) {
            $data->{'NameNumber'} = $object->getNameNumber();
        }
        if (null !== $object->getNumber()) {
            $data->{'Number'} = $object->getNumber();
        }
        if (null !== $object->getPreference()) {
            $data->{'Preference'} = $object->getPreference();
        }
        if (null !== $object->getSegmentNumber()) {
            $data->{'SegmentNumber'} = $object->getSegmentNumber();
        }

        return $data;
    }
}
