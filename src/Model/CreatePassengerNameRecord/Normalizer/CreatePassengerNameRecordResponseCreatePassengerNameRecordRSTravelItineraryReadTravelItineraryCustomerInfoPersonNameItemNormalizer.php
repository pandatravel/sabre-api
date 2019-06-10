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

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItem();
        if (property_exists($data, 'Email')) {
            $values = [];
            foreach ($data->{'Email'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemEmailItem', 'json', $context);
            }
            $object->setEmail($values);
        }
        if (property_exists($data, 'GivenName')) {
            $object->setGivenName($data->{'GivenName'});
        }
        if (property_exists($data, 'GroupInfo')) {
            $object->setGroupInfo($this->denormalizer->denormalize($data->{'GroupInfo'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfo', 'json', $context));
        }
        if (property_exists($data, 'ProfileIndex')) {
            $values_1 = [];
            foreach ($data->{'ProfileIndex'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemProfileIndexItem', 'json', $context);
            }
            $object->setProfileIndex($values_1);
        }
        if (property_exists($data, 'Surname')) {
            $object->setSurname($data->{'Surname'});
        }
        if (property_exists($data, 'WithInfant')) {
            $object->setWithInfant($data->{'WithInfant'});
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
        if (property_exists($data, 'RPH')) {
            $object->setRPH($data->{'RPH'});
        }
        if (property_exists($data, 'Id')) {
            $object->setId($data->{'Id'});
        }
        if (property_exists($data, 'elementId')) {
            $object->setElementId($data->{'elementId'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEmail()) {
            $values = [];
            foreach ($object->getEmail() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Email'} = $values;
        }
        if (null !== $object->getGivenName()) {
            $data->{'GivenName'} = $object->getGivenName();
        }
        if (null !== $object->getGroupInfo()) {
            $data->{'GroupInfo'} = $this->normalizer->normalize($object->getGroupInfo(), 'json', $context);
        }
        if (null !== $object->getProfileIndex()) {
            $values_1 = [];
            foreach ($object->getProfileIndex() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'ProfileIndex'} = $values_1;
        }
        if (null !== $object->getSurname()) {
            $data->{'Surname'} = $object->getSurname();
        }
        if (null !== $object->getWithInfant()) {
            $data->{'WithInfant'} = $object->getWithInfant();
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
        if (null !== $object->getRPH()) {
            $data->{'RPH'} = $object->getRPH();
        }
        if (null !== $object->getId()) {
            $data->{'Id'} = $object->getId();
        }
        if (null !== $object->getElementId()) {
            $data->{'elementId'} = $object->getElementId();
        }

        return $data;
    }
}