<?php

namespace Ammonkc\SabreApi\Model\GeoAutocomplete\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class GeoAutocompleteResponseResponseGroupedDoclistDocsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponseResponseGroupedDoclistDocsItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\GeoAutocomplete\\GeoAutocompleteResponseResponseGroupedDoclistDocsItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\GeoAutocomplete\GeoAutocompleteResponseResponseGroupedDoclistDocsItem();
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'city')) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'country')) {
            $object->setCountry($data->{'country'});
        }
        if (property_exists($data, 'countryName')) {
            $object->setCountryName($data->{'countryName'});
        }
        if (property_exists($data, 'stateName')) {
            $object->setStateName($data->{'stateName'});
        }
        if (property_exists($data, 'state')) {
            $object->setState($data->{'state'});
        }
        if (property_exists($data, 'category')) {
            $object->setCategory($data->{'category'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'dataset')) {
            $object->setDataset($data->{'dataset'});
        }
        if (property_exists($data, 'datasource')) {
            $object->setDatasource($data->{'datasource'});
        }
        if (property_exists($data, 'confidenceFactor')) {
            $object->setConfidenceFactor($data->{'confidenceFactor'});
        }
        if (property_exists($data, 'latitude')) {
            $object->setLatitude($data->{'latitude'});
        }
        if (property_exists($data, 'longitude')) {
            $object->setLongitude($data->{'longitude'});
        }
        if (property_exists($data, 'iataCityCode')) {
            $object->setIataCityCode($data->{'iataCityCode'});
        }
        if (property_exists($data, 'ranking')) {
            $object->setRanking($data->{'ranking'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }
        if (null !== $object->getCountryName()) {
            $data->{'countryName'} = $object->getCountryName();
        }
        if (null !== $object->getStateName()) {
            $data->{'stateName'} = $object->getStateName();
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        if (null !== $object->getCategory()) {
            $data->{'category'} = $object->getCategory();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getDataset()) {
            $data->{'dataset'} = $object->getDataset();
        }
        if (null !== $object->getDatasource()) {
            $data->{'datasource'} = $object->getDatasource();
        }
        if (null !== $object->getConfidenceFactor()) {
            $data->{'confidenceFactor'} = $object->getConfidenceFactor();
        }
        if (null !== $object->getLatitude()) {
            $data->{'latitude'} = $object->getLatitude();
        }
        if (null !== $object->getLongitude()) {
            $data->{'longitude'} = $object->getLongitude();
        }
        if (null !== $object->getIataCityCode()) {
            $data->{'iataCityCode'} = $object->getIataCityCode();
        }
        if (null !== $object->getRanking()) {
            $data->{'ranking'} = $object->getRanking();
        }

        return $data;
    }
}
