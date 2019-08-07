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

class ArrivalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\Arrival';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\Arrival';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\Arrival();
        if (property_exists($data, 'airport') && $data->{'airport'} !== null) {
            $object->setAirport($data->{'airport'});
        }
        if (property_exists($data, 'city') && $data->{'city'} !== null) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'country') && $data->{'country'} !== null) {
            $object->setCountry($data->{'country'});
        }
        if (property_exists($data, 'dateAdjustment') && $data->{'dateAdjustment'} !== null) {
            $object->setDateAdjustment($data->{'dateAdjustment'});
        }
        if (property_exists($data, 'state') && $data->{'state'} !== null) {
            $object->setState($data->{'state'});
        }
        if (property_exists($data, 'terminal') && $data->{'terminal'} !== null) {
            $object->setTerminal($data->{'terminal'});
        }
        if (property_exists($data, 'time') && $data->{'time'} !== null) {
            $object->setTime($data->{'time'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAirport()) {
            $data->{'airport'} = $object->getAirport();
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }
        if (null !== $object->getDateAdjustment()) {
            $data->{'dateAdjustment'} = $object->getDateAdjustment();
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        if (null !== $object->getTerminal()) {
            $data->{'terminal'} = $object->getTerminal();
        }
        if (null !== $object->getTime()) {
            $data->{'time'} = $object->getTime();
        }

        return $data;
    }
}
