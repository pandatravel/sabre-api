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

class OrgOpentravelOta200305NumTripsTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305NumTripsType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305NumTripsType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305NumTripsType();
        if (property_exists($data, 'Number') && $data->{'Number'} !== null) {
            $object->setNumber($data->{'Number'});
        }
        if (property_exists($data, 'PerDateMax') && $data->{'PerDateMax'} !== null) {
            $object->setPerDateMax($data->{'PerDateMax'});
        }
        if (property_exists($data, 'PerDateMin') && $data->{'PerDateMin'} !== null) {
            $object->setPerDateMin($data->{'PerDateMin'});
        }
        if (property_exists($data, 'PerMarket') && $data->{'PerMarket'} !== null) {
            $object->setPerMarket($data->{'PerMarket'});
        }
        if (property_exists($data, 'PerMonth') && $data->{'PerMonth'} !== null) {
            $object->setPerMonth($data->{'PerMonth'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getNumber()) {
            $data->{'Number'} = $object->getNumber();
        }
        if (null !== $object->getPerDateMax()) {
            $data->{'PerDateMax'} = $object->getPerDateMax();
        }
        if (null !== $object->getPerDateMin()) {
            $data->{'PerDateMin'} = $object->getPerDateMin();
        }
        if (null !== $object->getPerMarket()) {
            $data->{'PerMarket'} = $object->getPerMarket();
        }
        if (null !== $object->getPerMonth()) {
            $data->{'PerMonth'} = $object->getPerMonth();
        }

        return $data;
    }
}
