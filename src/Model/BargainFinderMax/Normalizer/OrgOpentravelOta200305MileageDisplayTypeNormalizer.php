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

class OrgOpentravelOta200305MileageDisplayTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305MileageDisplayType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305MileageDisplayType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305MileageDisplayType();
        if (property_exists($data, 'City') && $data->{'City'} !== null) {
            $object->setCity($data->{'City'});
        }
        if (property_exists($data, 'Surcharge') && $data->{'Surcharge'} !== null) {
            $object->setSurcharge($data->{'Surcharge'});
        }
        if (property_exists($data, 'Type') && $data->{'Type'} !== null) {
            $object->setType($data->{'Type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCity()) {
            $data->{'City'} = $object->getCity();
        }
        if (null !== $object->getSurcharge()) {
            $data->{'Surcharge'} = $object->getSurcharge();
        }
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }

        return $data;
    }
}
