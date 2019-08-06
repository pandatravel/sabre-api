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

class OrgOpentravelOta200305AddressTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AddressType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AddressType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AddressType();
        if (property_exists($data, 'AddressLine')) {
            $values = [];
            foreach ($data->{'AddressLine'} as $value) {
                $values[] = $value;
            }
            $object->setAddressLine($values);
        }
        if (property_exists($data, 'BldgRoom')) {
            $object->setBldgRoom($data->{'BldgRoom'});
        }
        if (property_exists($data, 'CityName')) {
            $object->setCityName($data->{'CityName'});
        }
        if (property_exists($data, 'CountryName')) {
            $object->setCountryName($this->denormalizer->denormalize($data->{'CountryName'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305CountryNameType', 'json', $context));
        }
        if (property_exists($data, 'County')) {
            $object->setCounty($data->{'County'});
        }
        if (property_exists($data, 'FormattedInd')) {
            $object->setFormattedInd($data->{'FormattedInd'});
        }
        if (property_exists($data, 'PostalCode')) {
            $object->setPostalCode($data->{'PostalCode'});
        }
        if (property_exists($data, 'ShareMarketInd')) {
            $object->setShareMarketInd($data->{'ShareMarketInd'});
        }
        if (property_exists($data, 'ShareSynchInd')) {
            $object->setShareSynchInd($data->{'ShareSynchInd'});
        }
        if (property_exists($data, 'StateProv')) {
            $object->setStateProv($this->denormalizer->denormalize($data->{'StateProv'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305StateProvType', 'json', $context));
        }
        if (property_exists($data, 'StreetNmbr')) {
            $object->setStreetNmbr($this->denormalizer->denormalize($data->{'StreetNmbr'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305StreetNmbrType', 'json', $context));
        }
        if (property_exists($data, 'Type')) {
            $object->setType($data->{'Type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAddressLine()) {
            $values = [];
            foreach ($object->getAddressLine() as $value) {
                $values[] = $value;
            }
            $data->{'AddressLine'} = $values;
        }
        if (null !== $object->getBldgRoom()) {
            $data->{'BldgRoom'} = $object->getBldgRoom();
        }
        if (null !== $object->getCityName()) {
            $data->{'CityName'} = $object->getCityName();
        }
        if (null !== $object->getCountryName()) {
            $data->{'CountryName'} = $this->normalizer->normalize($object->getCountryName(), 'json', $context);
        }
        if (null !== $object->getCounty()) {
            $data->{'County'} = $object->getCounty();
        }
        if (null !== $object->getFormattedInd()) {
            $data->{'FormattedInd'} = $object->getFormattedInd();
        }
        if (null !== $object->getPostalCode()) {
            $data->{'PostalCode'} = $object->getPostalCode();
        }
        if (null !== $object->getShareMarketInd()) {
            $data->{'ShareMarketInd'} = $object->getShareMarketInd();
        }
        if (null !== $object->getShareSynchInd()) {
            $data->{'ShareSynchInd'} = $object->getShareSynchInd();
        }
        if (null !== $object->getStateProv()) {
            $data->{'StateProv'} = $this->normalizer->normalize($object->getStateProv(), 'json', $context);
        }
        if (null !== $object->getStreetNmbr()) {
            $data->{'StreetNmbr'} = $this->normalizer->normalize($object->getStreetNmbr(), 'json', $context);
        }
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }

        return $data;
    }
}
