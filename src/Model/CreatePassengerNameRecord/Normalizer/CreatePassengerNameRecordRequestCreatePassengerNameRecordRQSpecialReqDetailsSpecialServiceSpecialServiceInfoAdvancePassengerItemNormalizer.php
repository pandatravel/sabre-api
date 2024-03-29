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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItem();
        if (property_exists($data, 'Document') && $data->{'Document'} !== null) {
            $object->setDocument($this->denormalizer->denormalize($data->{'Document'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemDocument', 'json', $context));
        }
        if (property_exists($data, 'PersonName') && $data->{'PersonName'} !== null) {
            $object->setPersonName($this->denormalizer->denormalize($data->{'PersonName'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemPersonName', 'json', $context));
        }
        if (property_exists($data, 'ResidentDestinationAddress') && $data->{'ResidentDestinationAddress'} !== null) {
            $object->setResidentDestinationAddress($this->denormalizer->denormalize($data->{'ResidentDestinationAddress'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemResidentDestinationAddress', 'json', $context));
        }
        if (property_exists($data, 'VendorPrefs') && $data->{'VendorPrefs'} !== null) {
            $object->setVendorPrefs($this->denormalizer->denormalize($data->{'VendorPrefs'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemVendorPrefs', 'json', $context));
        }
        if (property_exists($data, 'SegmentNumber') && $data->{'SegmentNumber'} !== null) {
            $object->setSegmentNumber($data->{'SegmentNumber'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDocument()) {
            $data->{'Document'} = $this->normalizer->normalize($object->getDocument(), 'json', $context);
        }
        if (null !== $object->getPersonName()) {
            $data->{'PersonName'} = $this->normalizer->normalize($object->getPersonName(), 'json', $context);
        }
        if (null !== $object->getResidentDestinationAddress()) {
            $data->{'ResidentDestinationAddress'} = $this->normalizer->normalize($object->getResidentDestinationAddress(), 'json', $context);
        }
        if (null !== $object->getVendorPrefs()) {
            $data->{'VendorPrefs'} = $this->normalizer->normalize($object->getVendorPrefs(), 'json', $context);
        }
        if (null !== $object->getSegmentNumber()) {
            $data->{'SegmentNumber'} = $object->getSegmentNumber();
        }

        return $data;
    }
}
