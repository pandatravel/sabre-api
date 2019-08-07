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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyContact';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyContact';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyContact();
        if (property_exists($data, 'Phone') && $data->{'Phone'} !== null) {
            $object->setPhone($data->{'Phone'});
        }
        if (property_exists($data, 'Mobile') && $data->{'Mobile'} !== null) {
            $object->setMobile($data->{'Mobile'});
        }
        if (property_exists($data, 'Fax') && $data->{'Fax'} !== null) {
            $object->setFax($data->{'Fax'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPhone()) {
            $data->{'Phone'} = $object->getPhone();
        }
        if (null !== $object->getMobile()) {
            $data->{'Mobile'} = $object->getMobile();
        }
        if (null !== $object->getFax()) {
            $data->{'Fax'} = $object->getFax();
        }

        return $data;
    }
}
