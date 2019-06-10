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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItem();
        if (property_exists($data, 'GivenName')) {
            $object->setGivenName($data->{'GivenName'});
        }
        if (property_exists($data, 'GroupInfo')) {
            $object->setGroupInfo($this->denormalizer->denormalize($data->{'GroupInfo'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfo', 'json', $context));
        }
        if (property_exists($data, 'Surname')) {
            $object->setSurname($data->{'Surname'});
        }
        if (property_exists($data, 'Infant')) {
            $object->setInfant($data->{'Infant'});
        }
        if (property_exists($data, 'NameNumber')) {
            $object->setNameNumber($data->{'NameNumber'});
        }
        if (property_exists($data, 'NameReference')) {
            $object->setNameReference($data->{'NameReference'});
        }
        if (property_exists($data, 'PassengerType')) {
            $object->setPassengerType($data->{'PassengerType'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getGivenName()) {
            $data->{'GivenName'} = $object->getGivenName();
        }
        if (null !== $object->getGroupInfo()) {
            $data->{'GroupInfo'} = $this->normalizer->normalize($object->getGroupInfo(), 'json', $context);
        }
        if (null !== $object->getSurname()) {
            $data->{'Surname'} = $object->getSurname();
        }
        if (null !== $object->getInfant()) {
            $data->{'Infant'} = $object->getInfant();
        }
        if (null !== $object->getNameNumber()) {
            $data->{'NameNumber'} = $object->getNameNumber();
        }
        if (null !== $object->getNameReference()) {
            $data->{'NameReference'} = $object->getNameReference();
        }
        if (null !== $object->getPassengerType()) {
            $data->{'PassengerType'} = $object->getPassengerType();
        }

        return $data;
    }
}