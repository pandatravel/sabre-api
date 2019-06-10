<?php

namespace Ammonkc\SabreApi\Model\PointOfSaleCountryCodeLookup\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PointofSaleCountryCodeLookupResponseCountriesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\PointOfSaleCountryCodeLookup\\PointofSaleCountryCodeLookupResponseCountriesItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\PointOfSaleCountryCodeLookup\PointofSaleCountryCodeLookupResponseCountriesItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\PointOfSaleCountryCodeLookup\PointofSaleCountryCodeLookupResponseCountriesItem();
        if (property_exists($data, 'CountryCode')) {
            $object->setCountryCode($data->{'CountryCode'});
        }
        if (property_exists($data, 'CountryName')) {
            $object->setCountryName($data->{'CountryName'});
        }
        if (property_exists($data, 'Links')) {
            $values = [];
            foreach ($data->{'Links'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\PointOfSaleCountryCodeLookup\\PointofSaleCountryCodeLookupResponseCountriesItemLinksItem', 'json', $context);
            }
            $object->setLinks($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCountryCode()) {
            $data->{'CountryCode'} = $object->getCountryCode();
        }
        if (null !== $object->getCountryName()) {
            $data->{'CountryName'} = $object->getCountryName();
        }
        if (null !== $object->getLinks()) {
            $values = [];
            foreach ($object->getLinks() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Links'} = $values;
        }

        return $data;
    }
}
