<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersTourCodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersTourCode';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersTourCode';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersTourCode();
        if (property_exists($data, 'SuppressFareReplaceWithBT') && $data->{'SuppressFareReplaceWithBT'} !== null) {
            $object->setSuppressFareReplaceWithBT($this->denormalizer->denormalize($data->{'SuppressFareReplaceWithBT'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersTourCodeSuppressFareReplaceWithBT', 'json', $context));
        }
        if (property_exists($data, 'SuppressFareReplaceWithIT') && $data->{'SuppressFareReplaceWithIT'} !== null) {
            $object->setSuppressFareReplaceWithIT($this->denormalizer->denormalize($data->{'SuppressFareReplaceWithIT'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersTourCodeSuppressFareReplaceWithIT', 'json', $context));
        }
        if (property_exists($data, 'SuppressIT') && $data->{'SuppressIT'} !== null) {
            $object->setSuppressIT($this->denormalizer->denormalize($data->{'SuppressIT'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersTourCodeSuppressIT', 'json', $context));
        }
        if (property_exists($data, 'SuppressITSupressFare') && $data->{'SuppressITSupressFare'} !== null) {
            $object->setSuppressITSupressFare($this->denormalizer->denormalize($data->{'SuppressITSupressFare'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersTourCodeSuppressITSupressFare', 'json', $context));
        }
        if (property_exists($data, 'Text') && $data->{'Text'} !== null) {
            $object->setText($data->{'Text'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSuppressFareReplaceWithBT()) {
            $data->{'SuppressFareReplaceWithBT'} = $this->normalizer->normalize($object->getSuppressFareReplaceWithBT(), 'json', $context);
        }
        if (null !== $object->getSuppressFareReplaceWithIT()) {
            $data->{'SuppressFareReplaceWithIT'} = $this->normalizer->normalize($object->getSuppressFareReplaceWithIT(), 'json', $context);
        }
        if (null !== $object->getSuppressIT()) {
            $data->{'SuppressIT'} = $this->normalizer->normalize($object->getSuppressIT(), 'json', $context);
        }
        if (null !== $object->getSuppressITSupressFare()) {
            $data->{'SuppressITSupressFare'} = $this->normalizer->normalize($object->getSuppressITSupressFare(), 'json', $context);
        }
        if (null !== $object->getText()) {
            $data->{'Text'} = $object->getText();
        }

        return $data;
    }
}
