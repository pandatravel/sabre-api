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

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheck';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheck';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheck();
        if (property_exists($data, 'Carrier') && $data->{'Carrier'} !== null) {
            $values = [];
            foreach ($data->{'Carrier'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckCarrier', 'json', $context);
            }
            $object->setCarrier($values);
        }
        if (property_exists($data, 'Country') && $data->{'Country'} !== null) {
            $values_1 = [];
            foreach ($data->{'Country'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckCountry', 'json', $context);
            }
            $object->setCountry($values_1);
        }
        if (property_exists($data, 'IETValidation') && $data->{'IETValidation'} !== null) {
            $object->setIETValidation($this->denormalizer->denormalize($data->{'IETValidation'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckIETValidation', 'json', $context));
        }
        if (property_exists($data, 'SettlementValidation') && $data->{'SettlementValidation'} !== null) {
            $object->setSettlementValidation($this->denormalizer->denormalize($data->{'SettlementValidation'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckSettlementValidation', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCarrier()) {
            $values = [];
            foreach ($object->getCarrier() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Carrier'} = $values;
        }
        if (null !== $object->getCountry()) {
            $values_1 = [];
            foreach ($object->getCountry() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Country'} = $values_1;
        }
        if (null !== $object->getIETValidation()) {
            $data->{'IETValidation'} = $this->normalizer->normalize($object->getIETValidation(), 'json', $context);
        }
        if (null !== $object->getSettlementValidation()) {
            $data->{'SettlementValidation'} = $this->normalizer->normalize($object->getSettlementValidation(), 'json', $context);
        }

        return $data;
    }
}
