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

class GroupedItineraryResponseGroupedItineraryResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\GroupedItineraryResponseGroupedItineraryResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\GroupedItineraryResponseGroupedItineraryResponse';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\GroupedItineraryResponseGroupedItineraryResponse();
        if (property_exists($data, 'baggageAllowanceDescs') && $data->{'baggageAllowanceDescs'} !== null) {
            $values = [];
            foreach ($data->{'baggageAllowanceDescs'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\BaggageAllowanceType', 'json', $context);
            }
            $object->setBaggageAllowanceDescs($values);
        }
        if (property_exists($data, 'baggageChargeDescs') && $data->{'baggageChargeDescs'} !== null) {
            $values_1 = [];
            foreach ($data->{'baggageChargeDescs'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\BaggageChargeType', 'json', $context);
            }
            $object->setBaggageChargeDescs($values_1);
        }
        if (property_exists($data, 'brandFeatureDescs') && $data->{'brandFeatureDescs'} !== null) {
            $values_2 = [];
            foreach ($data->{'brandFeatureDescs'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\BrandFeatureType', 'json', $context);
            }
            $object->setBrandFeatureDescs($values_2);
        }
        if (property_exists($data, 'cacheSourceDescs') && $data->{'cacheSourceDescs'} !== null) {
            $values_3 = [];
            foreach ($data->{'cacheSourceDescs'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\CacheSourceDescType', 'json', $context);
            }
            $object->setCacheSourceDescs($values_3);
        }
        if (property_exists($data, 'fareComponentDescs') && $data->{'fareComponentDescs'} !== null) {
            $values_4 = [];
            foreach ($data->{'fareComponentDescs'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\FareComponentType', 'json', $context);
            }
            $object->setFareComponentDescs($values_4);
        }
        if (property_exists($data, 'itineraryGroups') && $data->{'itineraryGroups'} !== null) {
            $values_5 = [];
            foreach ($data->{'itineraryGroups'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\ItineraryGroupType', 'json', $context);
            }
            $object->setItineraryGroups($values_5);
        }
        if (property_exists($data, 'legDescs') && $data->{'legDescs'} !== null) {
            $values_6 = [];
            foreach ($data->{'legDescs'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\LegType', 'json', $context);
            }
            $object->setLegDescs($values_6);
        }
        if (property_exists($data, 'messages') && $data->{'messages'} !== null) {
            $values_7 = [];
            foreach ($data->{'messages'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\MessageType', 'json', $context);
            }
            $object->setMessages($values_7);
        }
        if (property_exists($data, 'obFeeDescs') && $data->{'obFeeDescs'} !== null) {
            $values_8 = [];
            foreach ($data->{'obFeeDescs'} as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OBFeeType', 'json', $context);
            }
            $object->setObFeeDescs($values_8);
        }
        if (property_exists($data, 'scheduleDescs') && $data->{'scheduleDescs'} !== null) {
            $values_9 = [];
            foreach ($data->{'scheduleDescs'} as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\ScheduleDescType', 'json', $context);
            }
            $object->setScheduleDescs($values_9);
        }
        if (property_exists($data, 'scheduleMessages') && $data->{'scheduleMessages'} !== null) {
            $values_10 = [];
            foreach ($data->{'scheduleMessages'} as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\ScheduleMessageType', 'json', $context);
            }
            $object->setScheduleMessages($values_10);
        }
        if (property_exists($data, 'statistics') && $data->{'statistics'} !== null) {
            $object->setStatistics($this->denormalizer->denormalize($data->{'statistics'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\StatisticsType', 'json', $context));
        }
        if (property_exists($data, 'taxDescs') && $data->{'taxDescs'} !== null) {
            $values_11 = [];
            foreach ($data->{'taxDescs'} as $value_11) {
                $values_11[] = $this->denormalizer->denormalize($value_11, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\TaxType', 'json', $context);
            }
            $object->setTaxDescs($values_11);
        }
        if (property_exists($data, 'taxSummaryDescs') && $data->{'taxSummaryDescs'} !== null) {
            $values_12 = [];
            foreach ($data->{'taxSummaryDescs'} as $value_12) {
                $values_12[] = $this->denormalizer->denormalize($value_12, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\TaxSummaryType', 'json', $context);
            }
            $object->setTaxSummaryDescs($values_12);
        }
        if (property_exists($data, 'validatingCarrierDescs') && $data->{'validatingCarrierDescs'} !== null) {
            $values_13 = [];
            foreach ($data->{'validatingCarrierDescs'} as $value_13) {
                $values_13[] = $this->denormalizer->denormalize($value_13, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\ValidatingCarrierType', 'json', $context);
            }
            $object->setValidatingCarrierDescs($values_13);
        }
        if (property_exists($data, 'version') && $data->{'version'} !== null) {
            $object->setVersion($data->{'version'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBaggageAllowanceDescs()) {
            $values = [];
            foreach ($object->getBaggageAllowanceDescs() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'baggageAllowanceDescs'} = $values;
        }
        if (null !== $object->getBaggageChargeDescs()) {
            $values_1 = [];
            foreach ($object->getBaggageChargeDescs() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'baggageChargeDescs'} = $values_1;
        }
        if (null !== $object->getBrandFeatureDescs()) {
            $values_2 = [];
            foreach ($object->getBrandFeatureDescs() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'brandFeatureDescs'} = $values_2;
        }
        if (null !== $object->getCacheSourceDescs()) {
            $values_3 = [];
            foreach ($object->getCacheSourceDescs() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'cacheSourceDescs'} = $values_3;
        }
        if (null !== $object->getFareComponentDescs()) {
            $values_4 = [];
            foreach ($object->getFareComponentDescs() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'fareComponentDescs'} = $values_4;
        }
        if (null !== $object->getItineraryGroups()) {
            $values_5 = [];
            foreach ($object->getItineraryGroups() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'itineraryGroups'} = $values_5;
        }
        if (null !== $object->getLegDescs()) {
            $values_6 = [];
            foreach ($object->getLegDescs() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'legDescs'} = $values_6;
        }
        if (null !== $object->getMessages()) {
            $values_7 = [];
            foreach ($object->getMessages() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'messages'} = $values_7;
        }
        if (null !== $object->getObFeeDescs()) {
            $values_8 = [];
            foreach ($object->getObFeeDescs() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data->{'obFeeDescs'} = $values_8;
        }
        if (null !== $object->getScheduleDescs()) {
            $values_9 = [];
            foreach ($object->getScheduleDescs() as $value_9) {
                $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $data->{'scheduleDescs'} = $values_9;
        }
        if (null !== $object->getScheduleMessages()) {
            $values_10 = [];
            foreach ($object->getScheduleMessages() as $value_10) {
                $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
            }
            $data->{'scheduleMessages'} = $values_10;
        }
        if (null !== $object->getStatistics()) {
            $data->{'statistics'} = $this->normalizer->normalize($object->getStatistics(), 'json', $context);
        }
        if (null !== $object->getTaxDescs()) {
            $values_11 = [];
            foreach ($object->getTaxDescs() as $value_11) {
                $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
            }
            $data->{'taxDescs'} = $values_11;
        }
        if (null !== $object->getTaxSummaryDescs()) {
            $values_12 = [];
            foreach ($object->getTaxSummaryDescs() as $value_12) {
                $values_12[] = $this->normalizer->normalize($value_12, 'json', $context);
            }
            $data->{'taxSummaryDescs'} = $values_12;
        }
        if (null !== $object->getValidatingCarrierDescs()) {
            $values_13 = [];
            foreach ($object->getValidatingCarrierDescs() as $value_13) {
                $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
            }
            $data->{'validatingCarrierDescs'} = $values_13;
        }
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }

        return $data;
    }
}
