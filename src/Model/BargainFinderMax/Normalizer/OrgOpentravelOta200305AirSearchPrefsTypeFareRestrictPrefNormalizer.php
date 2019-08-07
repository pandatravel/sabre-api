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

class OrgOpentravelOta200305AirSearchPrefsTypeFareRestrictPrefNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirSearchPrefsTypeFareRestrictPref';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AirSearchPrefsTypeFareRestrictPref;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AirSearchPrefsTypeFareRestrictPref();
        if (property_exists($data, 'AdvResTicketing')) {
            $object->setAdvResTicketing($this->denormalizer->denormalize($data->{'AdvResTicketing'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AdvResTicketingType', 'json', $context));
        }
        if (property_exists($data, 'FareRestriction')) {
            $object->setFareRestriction($data->{'FareRestriction'});
        }
        if (property_exists($data, 'PreferLevel')) {
            $object->setPreferLevel($data->{'PreferLevel'});
        }
        if (property_exists($data, 'StayRestrictions')) {
            $object->setStayRestrictions($this->denormalizer->denormalize($data->{'StayRestrictions'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305StayRestrictionsType', 'json', $context));
        }
        if (property_exists($data, 'VoluntaryChanges')) {
            $object->setVoluntaryChanges($this->denormalizer->denormalize($data->{'VoluntaryChanges'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305VoluntaryChangesType', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAdvResTicketing()) {
            $data->{'AdvResTicketing'} = $this->normalizer->normalize($object->getAdvResTicketing(), 'json', $context);
        }
        if (null !== $object->getFareRestriction()) {
            $data->{'FareRestriction'} = $object->getFareRestriction();
        }
        if (null !== $object->getPreferLevel()) {
            $data->{'PreferLevel'} = $object->getPreferLevel();
        }
        if (null !== $object->getStayRestrictions()) {
            $data->{'StayRestrictions'} = $this->normalizer->normalize($object->getStayRestrictions(), 'json', $context);
        }
        if (null !== $object->getVoluntaryChanges()) {
            $data->{'VoluntaryChanges'} = $this->normalizer->normalize($object->getVoluntaryChanges(), 'json', $context);
        }

        return $data;
    }
}
