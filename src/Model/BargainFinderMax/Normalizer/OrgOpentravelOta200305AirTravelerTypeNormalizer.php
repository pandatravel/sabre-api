<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OrgOpentravelOta200305AirTravelerTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirTravelerType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AirTravelerType;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AirTravelerType();
        if (property_exists($data, 'AccompaniedByInfant')) {
            $object->setAccompaniedByInfant($data->{'AccompaniedByInfant'});
        }
        if (property_exists($data, 'Address')) {
            $values = [];
            foreach ($data->{'Address'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AddressType', 'json', $context);
            }
            $object->setAddress($values);
        }
        if (property_exists($data, 'BirthDate')) {
            $object->setBirthDate($data->{'BirthDate'});
        }
        if (property_exists($data, 'CurrencyCode')) {
            $object->setCurrencyCode($data->{'CurrencyCode'});
        }
        if (property_exists($data, 'CustLoyalty')) {
            $values_1 = [];
            foreach ($data->{'CustLoyalty'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305CustLoyaltyType', 'json', $context);
            }
            $object->setCustLoyalty($values_1);
        }
        if (property_exists($data, 'Document')) {
            $values_2 = [];
            foreach ($data->{'Document'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305DocumentType', 'json', $context);
            }
            $object->setDocument($values_2);
        }
        if (property_exists($data, 'Email')) {
            $values_3 = [];
            foreach ($data->{'Email'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305EmailType', 'json', $context);
            }
            $object->setEmail($values_3);
        }
        if (property_exists($data, 'FlightSegmentRPHs')) {
            $object->setFlightSegmentRPHs($this->denormalizer->denormalize($data->{'FlightSegmentRPHs'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirTravelerTypeFlightSegmentRPHs', 'json', $context));
        }
        if (property_exists($data, 'Gender')) {
            $object->setGender($data->{'Gender'});
        }
        if (property_exists($data, 'PassengerTypeCode')) {
            $object->setPassengerTypeCode($data->{'PassengerTypeCode'});
        }
        if (property_exists($data, 'PassengerTypeQuantity')) {
            $object->setPassengerTypeQuantity($this->denormalizer->denormalize($data->{'PassengerTypeQuantity'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PassengerTypeQuantityType', 'json', $context));
        }
        if (property_exists($data, 'PersonName')) {
            $object->setPersonName($this->denormalizer->denormalize($data->{'PersonName'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PersonNameType', 'json', $context));
        }
        if (property_exists($data, 'ProfileRef')) {
            $object->setProfileRef($this->denormalizer->denormalize($data->{'ProfileRef'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirTravelerTypeProfileRef', 'json', $context));
        }
        if (property_exists($data, 'ShareMarketInd')) {
            $object->setShareMarketInd($data->{'ShareMarketInd'});
        }
        if (property_exists($data, 'ShareSynchInd')) {
            $object->setShareSynchInd($data->{'ShareSynchInd'});
        }
        if (property_exists($data, 'Telephone')) {
            $values_4 = [];
            foreach ($data->{'Telephone'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TelephoneType', 'json', $context);
            }
            $object->setTelephone($values_4);
        }
        if (property_exists($data, 'TravelerRefNumber')) {
            $object->setTravelerRefNumber($this->denormalizer->denormalize($data->{'TravelerRefNumber'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305TravelerRefNumberType', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccompaniedByInfant()) {
            $data->{'AccompaniedByInfant'} = $object->getAccompaniedByInfant();
        }
        if (null !== $object->getAddress()) {
            $values = [];
            foreach ($object->getAddress() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Address'} = $values;
        }
        if (null !== $object->getBirthDate()) {
            $data->{'BirthDate'} = $object->getBirthDate();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'CurrencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getCustLoyalty()) {
            $values_1 = [];
            foreach ($object->getCustLoyalty() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'CustLoyalty'} = $values_1;
        }
        if (null !== $object->getDocument()) {
            $values_2 = [];
            foreach ($object->getDocument() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'Document'} = $values_2;
        }
        if (null !== $object->getEmail()) {
            $values_3 = [];
            foreach ($object->getEmail() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'Email'} = $values_3;
        }
        if (null !== $object->getFlightSegmentRPHs()) {
            $data->{'FlightSegmentRPHs'} = $this->normalizer->normalize($object->getFlightSegmentRPHs(), 'json', $context);
        }
        if (null !== $object->getGender()) {
            $data->{'Gender'} = $object->getGender();
        }
        if (null !== $object->getPassengerTypeCode()) {
            $data->{'PassengerTypeCode'} = $object->getPassengerTypeCode();
        }
        if (null !== $object->getPassengerTypeQuantity()) {
            $data->{'PassengerTypeQuantity'} = $this->normalizer->normalize($object->getPassengerTypeQuantity(), 'json', $context);
        }
        if (null !== $object->getPersonName()) {
            $data->{'PersonName'} = $this->normalizer->normalize($object->getPersonName(), 'json', $context);
        }
        if (null !== $object->getProfileRef()) {
            $data->{'ProfileRef'} = $this->normalizer->normalize($object->getProfileRef(), 'json', $context);
        }
        if (null !== $object->getShareMarketInd()) {
            $data->{'ShareMarketInd'} = $object->getShareMarketInd();
        }
        if (null !== $object->getShareSynchInd()) {
            $data->{'ShareSynchInd'} = $object->getShareSynchInd();
        }
        if (null !== $object->getTelephone()) {
            $values_4 = [];
            foreach ($object->getTelephone() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'Telephone'} = $values_4;
        }
        if (null !== $object->getTravelerRefNumber()) {
            $data->{'TravelerRefNumber'} = $this->normalizer->normalize($object->getTravelerRefNumber(), 'json', $context);
        }

        return $data;
    }
}