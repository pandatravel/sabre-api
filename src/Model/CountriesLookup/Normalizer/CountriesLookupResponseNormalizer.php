<?php

namespace Ammonkc\SabreApi\Model\CountriesLookup\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CountriesLookupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CountriesLookup\\CountriesLookupResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CountriesLookup\CountriesLookupResponse;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CountriesLookup\CountriesLookupResponse();
        if (property_exists($data, 'PointOfSale')) {
            $object->setPointOfSale($data->{'PointOfSale'});
        }
        if (property_exists($data, 'OriginCountries')) {
            $values = [];
            foreach ($data->{'OriginCountries'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CountriesLookup\\CountriesLookupResponseOriginCountriesItem', 'json', $context);
            }
            $object->setOriginCountries($values);
        }
        if (property_exists($data, 'DestinationCountries')) {
            $values_1 = [];
            foreach ($data->{'DestinationCountries'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\CountriesLookup\\CountriesLookupResponseDestinationCountriesItem', 'json', $context);
            }
            $object->setDestinationCountries($values_1);
        }
        if (property_exists($data, 'Links')) {
            $values_2 = [];
            foreach ($data->{'Links'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Ammonkc\\SabreApi\\Model\\CountriesLookup\\CommonLinksItem', 'json', $context);
            }
            $object->setLinks($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getPointOfSale()) {
            $data->{'PointOfSale'} = $object->getPointOfSale();
        }
        if (null !== $object->getOriginCountries()) {
            $values = [];
            foreach ($object->getOriginCountries() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'OriginCountries'} = $values;
        }
        if (null !== $object->getDestinationCountries()) {
            $values_1 = [];
            foreach ($object->getDestinationCountries() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'DestinationCountries'} = $values_1;
        }
        if (null !== $object->getLinks()) {
            $values_2 = [];
            foreach ($object->getLinks() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'Links'} = $values_2;
        }

        return $data;
    }
}
