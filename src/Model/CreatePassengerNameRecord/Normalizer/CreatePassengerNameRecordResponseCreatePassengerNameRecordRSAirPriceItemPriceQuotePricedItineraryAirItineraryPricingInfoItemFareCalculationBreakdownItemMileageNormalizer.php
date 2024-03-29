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

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemMileageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemMileage';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemMileage';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemMileage();
        if (property_exists($data, 'ExtraAllowanceInd') && $data->{'ExtraAllowanceInd'} !== null) {
            $object->setExtraAllowanceInd($data->{'ExtraAllowanceInd'});
        }
        if (property_exists($data, 'MileageExclusionInd') && $data->{'MileageExclusionInd'} !== null) {
            $object->setMileageExclusionInd($data->{'MileageExclusionInd'});
        }
        if (property_exists($data, 'MileageReductionPTInd') && $data->{'MileageReductionPTInd'} !== null) {
            $object->setMileageReductionPTInd($data->{'MileageReductionPTInd'});
        }
        if (property_exists($data, 'MileageEqualizationInd') && $data->{'MileageEqualizationInd'} !== null) {
            $object->setMileageEqualizationInd($data->{'MileageEqualizationInd'});
        }
        if (property_exists($data, 'MileageSymbol') && $data->{'MileageSymbol'} !== null) {
            $object->setMileageSymbol($data->{'MileageSymbol'});
        }
        if (property_exists($data, 'MileageSurchargeInd') && $data->{'MileageSurchargeInd'} !== null) {
            $object->setMileageSurchargeInd($data->{'MileageSurchargeInd'});
        }
        if (property_exists($data, 'HIPConstructionCityCode') && $data->{'HIPConstructionCityCode'} !== null) {
            $object->setHIPConstructionCityCode($data->{'HIPConstructionCityCode'});
        }
        if (property_exists($data, 'HIPCityCodes') && $data->{'HIPCityCodes'} !== null) {
            $object->setHIPCityCodes($data->{'HIPCityCodes'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getExtraAllowanceInd()) {
            $data->{'ExtraAllowanceInd'} = $object->getExtraAllowanceInd();
        }
        if (null !== $object->getMileageExclusionInd()) {
            $data->{'MileageExclusionInd'} = $object->getMileageExclusionInd();
        }
        if (null !== $object->getMileageReductionPTInd()) {
            $data->{'MileageReductionPTInd'} = $object->getMileageReductionPTInd();
        }
        if (null !== $object->getMileageEqualizationInd()) {
            $data->{'MileageEqualizationInd'} = $object->getMileageEqualizationInd();
        }
        if (null !== $object->getMileageSymbol()) {
            $data->{'MileageSymbol'} = $object->getMileageSymbol();
        }
        if (null !== $object->getMileageSurchargeInd()) {
            $data->{'MileageSurchargeInd'} = $object->getMileageSurchargeInd();
        }
        if (null !== $object->getHIPConstructionCityCode()) {
            $data->{'HIPConstructionCityCode'} = $object->getHIPConstructionCityCode();
        }
        if (null !== $object->getHIPCityCodes()) {
            $data->{'HIPCityCodes'} = $object->getHIPCityCodes();
        }

        return $data;
    }
}
