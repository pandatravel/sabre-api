<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OrgOpentravelOta200305PersonNameTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PersonNameType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PersonNameType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305PersonNameType();
        if (property_exists($data, 'GivenName') && $data->{'GivenName'} !== null) {
            $values = [];
            foreach ($data->{'GivenName'} as $value) {
                $values[] = $value;
            }
            $object->setGivenName($values);
        }
        if (property_exists($data, 'MiddleName') && $data->{'MiddleName'} !== null) {
            $values_1 = [];
            foreach ($data->{'MiddleName'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setMiddleName($values_1);
        }
        if (property_exists($data, 'NamePrefix') && $data->{'NamePrefix'} !== null) {
            $values_2 = [];
            foreach ($data->{'NamePrefix'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setNamePrefix($values_2);
        }
        if (property_exists($data, 'NameSuffix') && $data->{'NameSuffix'} !== null) {
            $values_3 = [];
            foreach ($data->{'NameSuffix'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setNameSuffix($values_3);
        }
        if (property_exists($data, 'NameTitle') && $data->{'NameTitle'} !== null) {
            $values_4 = [];
            foreach ($data->{'NameTitle'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setNameTitle($values_4);
        }
        if (property_exists($data, 'NameType') && $data->{'NameType'} !== null) {
            $object->setNameType($data->{'NameType'});
        }
        if (property_exists($data, 'ShareMarketInd') && $data->{'ShareMarketInd'} !== null) {
            $object->setShareMarketInd($data->{'ShareMarketInd'});
        }
        if (property_exists($data, 'ShareSynchInd') && $data->{'ShareSynchInd'} !== null) {
            $object->setShareSynchInd($data->{'ShareSynchInd'});
        }
        if (property_exists($data, 'Surname') && $data->{'Surname'} !== null) {
            $object->setSurname($data->{'Surname'});
        }
        if (property_exists($data, 'SurnamePrefix') && $data->{'SurnamePrefix'} !== null) {
            $object->setSurnamePrefix($data->{'SurnamePrefix'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getGivenName()) {
            $values = [];
            foreach ($object->getGivenName() as $value) {
                $values[] = $value;
            }
            $data->{'GivenName'} = $values;
        }
        if (null !== $object->getMiddleName()) {
            $values_1 = [];
            foreach ($object->getMiddleName() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'MiddleName'} = $values_1;
        }
        if (null !== $object->getNamePrefix()) {
            $values_2 = [];
            foreach ($object->getNamePrefix() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'NamePrefix'} = $values_2;
        }
        if (null !== $object->getNameSuffix()) {
            $values_3 = [];
            foreach ($object->getNameSuffix() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'NameSuffix'} = $values_3;
        }
        if (null !== $object->getNameTitle()) {
            $values_4 = [];
            foreach ($object->getNameTitle() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'NameTitle'} = $values_4;
        }
        if (null !== $object->getNameType()) {
            $data->{'NameType'} = $object->getNameType();
        }
        if (null !== $object->getShareMarketInd()) {
            $data->{'ShareMarketInd'} = $object->getShareMarketInd();
        }
        if (null !== $object->getShareSynchInd()) {
            $data->{'ShareSynchInd'} = $object->getShareSynchInd();
        }
        if (null !== $object->getSurname()) {
            $data->{'Surname'} = $object->getSurname();
        }
        if (null !== $object->getSurnamePrefix()) {
            $data->{'SurnamePrefix'} = $object->getSurnamePrefix();
        }

        return $data;
    }
}
