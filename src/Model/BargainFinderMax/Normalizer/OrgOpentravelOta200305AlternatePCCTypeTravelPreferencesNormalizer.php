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

class OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AlternatePCCTypeTravelPreferences';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AlternatePCCTypeTravelPreferences';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AlternatePCCTypeTravelPreferences();
        if (property_exists($data, 'TPA_Extensions') && $data->{'TPA_Extensions'} !== null) {
            $object->setTPAExtensions($this->denormalizer->denormalize($data->{'TPA_Extensions'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesTPAExtensions', 'json', $context));
        }
        if (property_exists($data, 'VendorPref') && $data->{'VendorPref'} !== null) {
            $values = [];
            foreach ($data->{'VendorPref'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesVendorPref', 'json', $context);
            }
            $object->setVendorPref($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTPAExtensions()) {
            $data->{'TPA_Extensions'} = $this->normalizer->normalize($object->getTPAExtensions(), 'json', $context);
        }
        if (null !== $object->getVendorPref()) {
            $values = [];
            foreach ($object->getVendorPref() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'VendorPref'} = $values;
        }

        return $data;
    }
}
