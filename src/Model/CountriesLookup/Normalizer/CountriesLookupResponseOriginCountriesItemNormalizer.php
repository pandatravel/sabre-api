<?php

namespace Ammonkc\SabreApi\Model\CountriesLookup\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CountriesLookupResponseOriginCountriesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CountriesLookup\\CountriesLookupResponseOriginCountriesItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CountriesLookup\CountriesLookupResponseOriginCountriesItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CountriesLookup\CountriesLookupResponseOriginCountriesItem();
        if (property_exists($data, 'CountryCode')) {
            $object->setCountryCode($data->{'CountryCode'});
        }
        if (property_exists($data, 'CountryName')) {
            $object->setCountryName($data->{'CountryName'});
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

        return $data;
    }
}
