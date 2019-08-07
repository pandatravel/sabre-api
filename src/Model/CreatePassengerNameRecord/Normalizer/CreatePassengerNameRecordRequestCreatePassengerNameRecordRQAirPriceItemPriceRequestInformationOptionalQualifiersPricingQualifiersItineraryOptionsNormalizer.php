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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptions';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptions';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptions();
        if (property_exists($data, 'BreakFare') && $data->{'BreakFare'} !== null) {
            $values = [];
            foreach ($data->{'BreakFare'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptionsBreakFareItem', 'json', $context);
            }
            $object->setBreakFare($values);
        }
        if (property_exists($data, 'ForceConnection') && $data->{'ForceConnection'} !== null) {
            $values_1 = [];
            foreach ($data->{'ForceConnection'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptionsForceConnectionItem', 'json', $context);
            }
            $object->setForceConnection($values_1);
        }
        if (property_exists($data, 'ForceStopOver') && $data->{'ForceStopOver'} !== null) {
            $values_2 = [];
            foreach ($data->{'ForceStopOver'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptionsForceStopOverItem', 'json', $context);
            }
            $object->setForceStopOver($values_2);
        }
        if (property_exists($data, 'OverrideBreak') && $data->{'OverrideBreak'} !== null) {
            $values_3 = [];
            foreach ($data->{'OverrideBreak'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptionsOverrideBreakItem', 'json', $context);
            }
            $object->setOverrideBreak($values_3);
        }
        if (property_exists($data, 'SegmentSelect') && $data->{'SegmentSelect'} !== null) {
            $values_4 = [];
            foreach ($data->{'SegmentSelect'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptionsSegmentSelectItem', 'json', $context);
            }
            $object->setSegmentSelect($values_4);
        }
        if (property_exists($data, 'SideTrip') && $data->{'SideTrip'} !== null) {
            $object->setSideTrip($this->denormalizer->denormalize($data->{'SideTrip'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptionsSideTrip', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBreakFare()) {
            $values = [];
            foreach ($object->getBreakFare() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'BreakFare'} = $values;
        }
        if (null !== $object->getForceConnection()) {
            $values_1 = [];
            foreach ($object->getForceConnection() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'ForceConnection'} = $values_1;
        }
        if (null !== $object->getForceStopOver()) {
            $values_2 = [];
            foreach ($object->getForceStopOver() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'ForceStopOver'} = $values_2;
        }
        if (null !== $object->getOverrideBreak()) {
            $values_3 = [];
            foreach ($object->getOverrideBreak() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'OverrideBreak'} = $values_3;
        }
        if (null !== $object->getSegmentSelect()) {
            $values_4 = [];
            foreach ($object->getSegmentSelect() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'SegmentSelect'} = $values_4;
        }
        if (null !== $object->getSideTrip()) {
            $data->{'SideTrip'} = $this->normalizer->normalize($object->getSideTrip(), 'json', $context);
        }

        return $data;
    }
}
