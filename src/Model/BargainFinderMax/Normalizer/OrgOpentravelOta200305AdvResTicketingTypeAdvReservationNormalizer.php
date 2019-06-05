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

class OrgOpentravelOta200305AdvResTicketingTypeAdvReservationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AdvResTicketingTypeAdvReservation';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AdvResTicketingTypeAdvReservation;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AdvResTicketingTypeAdvReservation();
        if (property_exists($data, 'LatestPeriod')) {
            $object->setLatestPeriod($data->{'LatestPeriod'});
        }
        if (property_exists($data, 'LatestTimeOfDay')) {
            $object->setLatestTimeOfDay($data->{'LatestTimeOfDay'});
        }
        if (property_exists($data, 'LatestUnit')) {
            $object->setLatestUnit($data->{'LatestUnit'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLatestPeriod()) {
            $data->{'LatestPeriod'} = $object->getLatestPeriod();
        }
        if (null !== $object->getLatestTimeOfDay()) {
            $data->{'LatestTimeOfDay'} = $object->getLatestTimeOfDay();
        }
        if (null !== $object->getLatestUnit()) {
            $data->{'LatestUnit'} = $object->getLatestUnit();
        }

        return $data;
    }
}