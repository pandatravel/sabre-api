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

class OrgOpentravelOta200305AdvResTicketingTypeAdvTicketingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AdvResTicketingTypeAdvTicketing';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AdvResTicketingTypeAdvTicketing;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AdvResTicketingTypeAdvTicketing();
        if (property_exists($data, 'FromDepartPeriod')) {
            $object->setFromDepartPeriod($data->{'FromDepartPeriod'});
        }
        if (property_exists($data, 'FromDepartTimeOfDay')) {
            $object->setFromDepartTimeOfDay($data->{'FromDepartTimeOfDay'});
        }
        if (property_exists($data, 'FromDepartUnit')) {
            $object->setFromDepartUnit($data->{'FromDepartUnit'});
        }
        if (property_exists($data, 'FromResPeriod')) {
            $object->setFromResPeriod($data->{'FromResPeriod'});
        }
        if (property_exists($data, 'FromResTimeOfDay')) {
            $object->setFromResTimeOfDay($data->{'FromResTimeOfDay'});
        }
        if (property_exists($data, 'FromResUnit')) {
            $object->setFromResUnit($data->{'FromResUnit'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFromDepartPeriod()) {
            $data->{'FromDepartPeriod'} = $object->getFromDepartPeriod();
        }
        if (null !== $object->getFromDepartTimeOfDay()) {
            $data->{'FromDepartTimeOfDay'} = $object->getFromDepartTimeOfDay();
        }
        if (null !== $object->getFromDepartUnit()) {
            $data->{'FromDepartUnit'} = $object->getFromDepartUnit();
        }
        if (null !== $object->getFromResPeriod()) {
            $data->{'FromResPeriod'} = $object->getFromResPeriod();
        }
        if (null !== $object->getFromResTimeOfDay()) {
            $data->{'FromResTimeOfDay'} = $object->getFromResTimeOfDay();
        }
        if (null !== $object->getFromResUnit()) {
            $data->{'FromResUnit'} = $object->getFromResUnit();
        }

        return $data;
    }
}