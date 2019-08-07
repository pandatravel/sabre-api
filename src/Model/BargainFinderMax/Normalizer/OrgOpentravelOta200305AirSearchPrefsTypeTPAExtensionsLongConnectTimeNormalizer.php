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

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectTimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectTime';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectTime';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectTime();
        if (property_exists($data, 'Enable') && $data->{'Enable'} !== null) {
            $object->setEnable($data->{'Enable'});
        }
        if (property_exists($data, 'Max') && $data->{'Max'} !== null) {
            $object->setMax($data->{'Max'});
        }
        if (property_exists($data, 'Min') && $data->{'Min'} !== null) {
            $object->setMin($data->{'Min'});
        }
        if (property_exists($data, 'NumberOfSolutions') && $data->{'NumberOfSolutions'} !== null) {
            $object->setNumberOfSolutions($data->{'NumberOfSolutions'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getEnable()) {
            $data->{'Enable'} = $object->getEnable();
        }
        if (null !== $object->getMax()) {
            $data->{'Max'} = $object->getMax();
        }
        if (null !== $object->getMin()) {
            $data->{'Min'} = $object->getMin();
        }
        if (null !== $object->getNumberOfSolutions()) {
            $data->{'NumberOfSolutions'} = $object->getNumberOfSolutions();
        }

        return $data;
    }
}
