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

class OrgOpentravelOta200305StayRestrictionsTypeMaximumStayNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305StayRestrictionsTypeMaximumStay';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305StayRestrictionsTypeMaximumStay';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305StayRestrictionsTypeMaximumStay();
        if (property_exists($data, 'MaxStay') && $data->{'MaxStay'} !== null) {
            $object->setMaxStay($data->{'MaxStay'});
        }
        if (property_exists($data, 'MaxStayDate') && $data->{'MaxStayDate'} !== null) {
            $object->setMaxStayDate($data->{'MaxStayDate'});
        }
        if (property_exists($data, 'ReturnTimeOfDay') && $data->{'ReturnTimeOfDay'} !== null) {
            $object->setReturnTimeOfDay($data->{'ReturnTimeOfDay'});
        }
        if (property_exists($data, 'ReturnType') && $data->{'ReturnType'} !== null) {
            $object->setReturnType($data->{'ReturnType'});
        }
        if (property_exists($data, 'StayUnit') && $data->{'StayUnit'} !== null) {
            $object->setStayUnit($data->{'StayUnit'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMaxStay()) {
            $data->{'MaxStay'} = $object->getMaxStay();
        }
        if (null !== $object->getMaxStayDate()) {
            $data->{'MaxStayDate'} = $object->getMaxStayDate();
        }
        if (null !== $object->getReturnTimeOfDay()) {
            $data->{'ReturnTimeOfDay'} = $object->getReturnTimeOfDay();
        }
        if (null !== $object->getReturnType()) {
            $data->{'ReturnType'} = $object->getReturnType();
        }
        if (null !== $object->getStayUnit()) {
            $data->{'StayUnit'} = $object->getStayUnit();
        }

        return $data;
    }
}
