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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSource';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSource';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSource();
        if (property_exists($data, 'RequestorID') && $data->{'RequestorID'} !== null) {
            $object->setRequestorID($this->denormalizer->denormalize($data->{'RequestorID'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceRequestorID', 'json', $context));
        }
        if (property_exists($data, 'AgencyAddress') && $data->{'AgencyAddress'} !== null) {
            $object->setAgencyAddress($this->denormalizer->denormalize($data->{'AgencyAddress'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddress', 'json', $context));
        }
        if (property_exists($data, 'AgencyContact') && $data->{'AgencyContact'} !== null) {
            $object->setAgencyContact($this->denormalizer->denormalize($data->{'AgencyContact'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyContact', 'json', $context));
        }
        if (property_exists($data, 'AgencyName') && $data->{'AgencyName'} !== null) {
            $object->setAgencyName($data->{'AgencyName'});
        }
        if (property_exists($data, 'ISOCountryCode') && $data->{'ISOCountryCode'} !== null) {
            $object->setISOCountryCode($data->{'ISOCountryCode'});
        }
        if (property_exists($data, 'PseudoCityCode') && $data->{'PseudoCityCode'} !== null) {
            $object->setPseudoCityCode($data->{'PseudoCityCode'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getRequestorID()) {
            $data->{'RequestorID'} = $this->normalizer->normalize($object->getRequestorID(), 'json', $context);
        }
        if (null !== $object->getAgencyAddress()) {
            $data->{'AgencyAddress'} = $this->normalizer->normalize($object->getAgencyAddress(), 'json', $context);
        }
        if (null !== $object->getAgencyContact()) {
            $data->{'AgencyContact'} = $this->normalizer->normalize($object->getAgencyContact(), 'json', $context);
        }
        if (null !== $object->getAgencyName()) {
            $data->{'AgencyName'} = $object->getAgencyName();
        }
        if (null !== $object->getISOCountryCode()) {
            $data->{'ISOCountryCode'} = $object->getISOCountryCode();
        }
        if (null !== $object->getPseudoCityCode()) {
            $data->{'PseudoCityCode'} = $object->getPseudoCityCode();
        }

        return $data;
    }
}
