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

class LegDescriptionTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\LegDescriptionType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\LegDescriptionType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\LegDescriptionType();
        if (property_exists($data, 'arrivalLocation') && $data->{'arrivalLocation'} !== null) {
            $object->setArrivalLocation($data->{'arrivalLocation'});
        }
        if (property_exists($data, 'departureDate') && $data->{'departureDate'} !== null) {
            $object->setDepartureDate($data->{'departureDate'});
        }
        if (property_exists($data, 'departureLocation') && $data->{'departureLocation'} !== null) {
            $object->setDepartureLocation($data->{'departureLocation'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getArrivalLocation()) {
            $data->{'arrivalLocation'} = $object->getArrivalLocation();
        }
        if (null !== $object->getDepartureDate()) {
            $data->{'departureDate'} = $object->getDepartureDate();
        }
        if (null !== $object->getDepartureLocation()) {
            $data->{'departureLocation'} = $object->getDepartureLocation();
        }

        return $data;
    }
}
