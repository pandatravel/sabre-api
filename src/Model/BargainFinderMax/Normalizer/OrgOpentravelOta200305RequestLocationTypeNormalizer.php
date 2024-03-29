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

class OrgOpentravelOta200305RequestLocationTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305RequestLocationType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305RequestLocationType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305RequestLocationType();
        if (property_exists($data, 'AirportsGroup') && $data->{'AirportsGroup'} !== null) {
            $object->setAirportsGroup($data->{'AirportsGroup'});
        }
        if (property_exists($data, 'CodeContext') && $data->{'CodeContext'} !== null) {
            $object->setCodeContext($data->{'CodeContext'});
        }
        if (property_exists($data, 'LocationCode') && $data->{'LocationCode'} !== null) {
            $object->setLocationCode($data->{'LocationCode'});
        }
        if (property_exists($data, 'content') && $data->{'content'} !== null) {
            $object->setContent($data->{'content'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAirportsGroup()) {
            $data->{'AirportsGroup'} = $object->getAirportsGroup();
        }
        if (null !== $object->getCodeContext()) {
            $data->{'CodeContext'} = $object->getCodeContext();
        }
        if (null !== $object->getLocationCode()) {
            $data->{'LocationCode'} = $object->getLocationCode();
        }
        if (null !== $object->getContent()) {
            $data->{'content'} = $object->getContent();
        }

        return $data;
    }
}
