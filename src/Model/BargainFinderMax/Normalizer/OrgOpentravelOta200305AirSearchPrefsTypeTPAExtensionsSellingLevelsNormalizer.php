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

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevels';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevels;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevels();
        if (property_exists($data, 'SellingLevelRules')) {
            $object->setSellingLevelRules($this->denormalizer->denormalize($data->{'SellingLevelRules'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsSellingLevelRules', 'json', $context));
        }
        if (property_exists($data, 'ShowFareAmounts')) {
            $object->setShowFareAmounts($this->denormalizer->denormalize($data->{'ShowFareAmounts'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsShowFareAmounts', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSellingLevelRules()) {
            $data->{'SellingLevelRules'} = $this->normalizer->normalize($object->getSellingLevelRules(), 'json', $context);
        }
        if (null !== $object->getShowFareAmounts()) {
            $data->{'ShowFareAmounts'} = $this->normalizer->normalize($object->getShowFareAmounts(), 'json', $context);
        }

        return $data;
    }
}
