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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiers';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiers';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiers();
        if (property_exists($data, 'Account') && $data->{'Account'} !== null) {
            $object->setAccount($this->denormalizer->denormalize($data->{'Account'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAccount', 'json', $context));
        }
        if (property_exists($data, 'AlternativePricing') && $data->{'AlternativePricing'} !== null) {
            $object->setAlternativePricing($this->denormalizer->denormalize($data->{'AlternativePricing'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricing', 'json', $context));
        }
        if (property_exists($data, 'BankersSellingRate') && $data->{'BankersSellingRate'} !== null) {
            $object->setBankersSellingRate($data->{'BankersSellingRate'});
        }
        if (property_exists($data, 'BargainFinder') && $data->{'BargainFinder'} !== null) {
            $object->setBargainFinder($this->denormalizer->denormalize($data->{'BargainFinder'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersBargainFinder', 'json', $context));
        }
        if (property_exists($data, 'BasicEconomyExclude') && $data->{'BasicEconomyExclude'} !== null) {
            $values = [];
            foreach ($data->{'BasicEconomyExclude'} as $value) {
                $values[] = $value;
            }
            $object->setBasicEconomyExclude($values);
        }
        if (property_exists($data, 'Brand') && $data->{'Brand'} !== null) {
            $values_1 = [];
            foreach ($data->{'Brand'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersBrandItem', 'json', $context);
            }
            $object->setBrand($values_1);
        }
        if (property_exists($data, 'BuyingDate') && $data->{'BuyingDate'} !== null) {
            $object->setBuyingDate($data->{'BuyingDate'});
        }
        if (property_exists($data, 'Cabin') && $data->{'Cabin'} !== null) {
            $object->setCabin($data->{'Cabin'});
        }
        if (property_exists($data, 'CommandPricing') && $data->{'CommandPricing'} !== null) {
            $values_2 = [];
            foreach ($data->{'CommandPricing'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItem', 'json', $context);
            }
            $object->setCommandPricing($values_2);
        }
        if (property_exists($data, 'CommissionContract') && $data->{'CommissionContract'} !== null) {
            $values_3 = [];
            foreach ($data->{'CommissionContract'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setCommissionContract($values_3);
        }
        if (property_exists($data, 'Corporate') && $data->{'Corporate'} !== null) {
            $object->setCorporate($this->denormalizer->denormalize($data->{'Corporate'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCorporate', 'json', $context));
        }
        if (property_exists($data, 'Fare') && $data->{'Fare'} !== null) {
            $object->setFare($this->denormalizer->denormalize($data->{'Fare'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFare', 'json', $context));
        }
        if (property_exists($data, 'FareOptions') && $data->{'FareOptions'} !== null) {
            $object->setFareOptions($this->denormalizer->denormalize($data->{'FareOptions'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFareOptions', 'json', $context));
        }
        if (property_exists($data, 'ItineraryOptions') && $data->{'ItineraryOptions'} !== null) {
            $object->setItineraryOptions($this->denormalizer->denormalize($data->{'ItineraryOptions'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptions', 'json', $context));
        }
        if (property_exists($data, 'ManuallyAdjustedSellingLevel') && $data->{'ManuallyAdjustedSellingLevel'} !== null) {
            $values_4 = [];
            foreach ($data->{'ManuallyAdjustedSellingLevel'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersManuallyAdjustedSellingLevelItem', 'json', $context);
            }
            $object->setManuallyAdjustedSellingLevel($values_4);
        }
        if (property_exists($data, 'NameSelect') && $data->{'NameSelect'} !== null) {
            $values_5 = [];
            foreach ($data->{'NameSelect'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNameSelectItem', 'json', $context);
            }
            $object->setNameSelect($values_5);
        }
        if (property_exists($data, 'NetRemit') && $data->{'NetRemit'} !== null) {
            $object->setNetRemit($this->denormalizer->denormalize($data->{'NetRemit'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemit', 'json', $context));
        }
        if (property_exists($data, 'Overrides') && $data->{'Overrides'} !== null) {
            $object->setOverrides($this->denormalizer->denormalize($data->{'Overrides'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverrides', 'json', $context));
        }
        if (property_exists($data, 'PassengerStatus') && $data->{'PassengerStatus'} !== null) {
            $object->setPassengerStatus($data->{'PassengerStatus'});
        }
        if (property_exists($data, 'PassengerType') && $data->{'PassengerType'} !== null) {
            $values_6 = [];
            foreach ($data->{'PassengerType'} as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersPassengerTypeItem', 'json', $context);
            }
            $object->setPassengerType($values_6);
        }
        if (property_exists($data, 'PlusUp') && $data->{'PlusUp'} !== null) {
            $object->setPlusUp($this->denormalizer->denormalize($data->{'PlusUp'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersPlusUp', 'json', $context));
        }
        if (property_exists($data, 'RetailerRuleQualifier') && $data->{'RetailerRuleQualifier'} !== null) {
            $object->setRetailerRuleQualifier($this->denormalizer->denormalize($data->{'RetailerRuleQualifier'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersRetailerRuleQualifier', 'json', $context));
        }
        if (property_exists($data, 'ShipsRegistry') && $data->{'ShipsRegistry'} !== null) {
            $object->setShipsRegistry($data->{'ShipsRegistry'});
        }
        if (property_exists($data, 'SpanishLargeFamilyDiscountLevel') && $data->{'SpanishLargeFamilyDiscountLevel'} !== null) {
            $object->setSpanishLargeFamilyDiscountLevel($data->{'SpanishLargeFamilyDiscountLevel'});
        }
        if (property_exists($data, 'SpanishResidentDiscount') && $data->{'SpanishResidentDiscount'} !== null) {
            $object->setSpanishResidentDiscount($data->{'SpanishResidentDiscount'});
        }
        if (property_exists($data, 'SpecificFare') && $data->{'SpecificFare'} !== null) {
            $values_7 = [];
            foreach ($data->{'SpecificFare'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersSpecificFareItem', 'json', $context);
            }
            $object->setSpecificFare($values_7);
        }
        if (property_exists($data, 'SpecificPenalty') && $data->{'SpecificPenalty'} !== null) {
            $object->setSpecificPenalty($this->denormalizer->denormalize($data->{'SpecificPenalty'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersSpecificPenalty', 'json', $context));
        }
        if (property_exists($data, 'Taxes') && $data->{'Taxes'} !== null) {
            $object->setTaxes($this->denormalizer->denormalize($data->{'Taxes'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxes', 'json', $context));
        }
        if (property_exists($data, 'ValidityDates') && $data->{'ValidityDates'} !== null) {
            $values_8 = [];
            foreach ($data->{'ValidityDates'} as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersValidityDatesItem', 'json', $context);
            }
            $object->setValidityDates($values_8);
        }
        if (property_exists($data, 'AlternateCurrencyCode') && $data->{'AlternateCurrencyCode'} !== null) {
            $object->setAlternateCurrencyCode($data->{'AlternateCurrencyCode'});
        }
        if (property_exists($data, 'CurrencyCode') && $data->{'CurrencyCode'} !== null) {
            $object->setCurrencyCode($data->{'CurrencyCode'});
        }
        if (property_exists($data, 'AggregatedContentExclude') && $data->{'AggregatedContentExclude'} !== null) {
            $object->setAggregatedContentExclude($data->{'AggregatedContentExclude'});
        }
        if (property_exists($data, 'FareFocusExclude') && $data->{'FareFocusExclude'} !== null) {
            $object->setFareFocusExclude($data->{'FareFocusExclude'});
        }
        if (property_exists($data, 'NoDate') && $data->{'NoDate'} !== null) {
            $object->setNoDate($data->{'NoDate'});
        }
        if (property_exists($data, 'RoundTheWorld') && $data->{'RoundTheWorld'} !== null) {
            $object->setRoundTheWorld($data->{'RoundTheWorld'});
        }
        if (property_exists($data, 'Source') && $data->{'Source'} !== null) {
            $object->setSource($data->{'Source'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccount()) {
            $data->{'Account'} = $this->normalizer->normalize($object->getAccount(), 'json', $context);
        }
        if (null !== $object->getAlternativePricing()) {
            $data->{'AlternativePricing'} = $this->normalizer->normalize($object->getAlternativePricing(), 'json', $context);
        }
        if (null !== $object->getBankersSellingRate()) {
            $data->{'BankersSellingRate'} = $object->getBankersSellingRate();
        }
        if (null !== $object->getBargainFinder()) {
            $data->{'BargainFinder'} = $this->normalizer->normalize($object->getBargainFinder(), 'json', $context);
        }
        if (null !== $object->getBasicEconomyExclude()) {
            $values = [];
            foreach ($object->getBasicEconomyExclude() as $value) {
                $values[] = $value;
            }
            $data->{'BasicEconomyExclude'} = $values;
        }
        if (null !== $object->getBrand()) {
            $values_1 = [];
            foreach ($object->getBrand() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Brand'} = $values_1;
        }
        if (null !== $object->getBuyingDate()) {
            $data->{'BuyingDate'} = $object->getBuyingDate();
        }
        if (null !== $object->getCabin()) {
            $data->{'Cabin'} = $object->getCabin();
        }
        if (null !== $object->getCommandPricing()) {
            $values_2 = [];
            foreach ($object->getCommandPricing() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'CommandPricing'} = $values_2;
        }
        if (null !== $object->getCommissionContract()) {
            $values_3 = [];
            foreach ($object->getCommissionContract() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'CommissionContract'} = $values_3;
        }
        if (null !== $object->getCorporate()) {
            $data->{'Corporate'} = $this->normalizer->normalize($object->getCorporate(), 'json', $context);
        }
        if (null !== $object->getFare()) {
            $data->{'Fare'} = $this->normalizer->normalize($object->getFare(), 'json', $context);
        }
        if (null !== $object->getFareOptions()) {
            $data->{'FareOptions'} = $this->normalizer->normalize($object->getFareOptions(), 'json', $context);
        }
        if (null !== $object->getItineraryOptions()) {
            $data->{'ItineraryOptions'} = $this->normalizer->normalize($object->getItineraryOptions(), 'json', $context);
        }
        if (null !== $object->getManuallyAdjustedSellingLevel()) {
            $values_4 = [];
            foreach ($object->getManuallyAdjustedSellingLevel() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'ManuallyAdjustedSellingLevel'} = $values_4;
        }
        if (null !== $object->getNameSelect()) {
            $values_5 = [];
            foreach ($object->getNameSelect() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'NameSelect'} = $values_5;
        }
        if (null !== $object->getNetRemit()) {
            $data->{'NetRemit'} = $this->normalizer->normalize($object->getNetRemit(), 'json', $context);
        }
        if (null !== $object->getOverrides()) {
            $data->{'Overrides'} = $this->normalizer->normalize($object->getOverrides(), 'json', $context);
        }
        if (null !== $object->getPassengerStatus()) {
            $data->{'PassengerStatus'} = $object->getPassengerStatus();
        }
        if (null !== $object->getPassengerType()) {
            $values_6 = [];
            foreach ($object->getPassengerType() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data->{'PassengerType'} = $values_6;
        }
        if (null !== $object->getPlusUp()) {
            $data->{'PlusUp'} = $this->normalizer->normalize($object->getPlusUp(), 'json', $context);
        }
        if (null !== $object->getRetailerRuleQualifier()) {
            $data->{'RetailerRuleQualifier'} = $this->normalizer->normalize($object->getRetailerRuleQualifier(), 'json', $context);
        }
        if (null !== $object->getShipsRegistry()) {
            $data->{'ShipsRegistry'} = $object->getShipsRegistry();
        }
        if (null !== $object->getSpanishLargeFamilyDiscountLevel()) {
            $data->{'SpanishLargeFamilyDiscountLevel'} = $object->getSpanishLargeFamilyDiscountLevel();
        }
        if (null !== $object->getSpanishResidentDiscount()) {
            $data->{'SpanishResidentDiscount'} = $object->getSpanishResidentDiscount();
        }
        if (null !== $object->getSpecificFare()) {
            $values_7 = [];
            foreach ($object->getSpecificFare() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'SpecificFare'} = $values_7;
        }
        if (null !== $object->getSpecificPenalty()) {
            $data->{'SpecificPenalty'} = $this->normalizer->normalize($object->getSpecificPenalty(), 'json', $context);
        }
        if (null !== $object->getTaxes()) {
            $data->{'Taxes'} = $this->normalizer->normalize($object->getTaxes(), 'json', $context);
        }
        if (null !== $object->getValidityDates()) {
            $values_8 = [];
            foreach ($object->getValidityDates() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data->{'ValidityDates'} = $values_8;
        }
        if (null !== $object->getAlternateCurrencyCode()) {
            $data->{'AlternateCurrencyCode'} = $object->getAlternateCurrencyCode();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'CurrencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getAggregatedContentExclude()) {
            $data->{'AggregatedContentExclude'} = $object->getAggregatedContentExclude();
        }
        if (null !== $object->getFareFocusExclude()) {
            $data->{'FareFocusExclude'} = $object->getFareFocusExclude();
        }
        if (null !== $object->getNoDate()) {
            $data->{'NoDate'} = $object->getNoDate();
        }
        if (null !== $object->getRoundTheWorld()) {
            $data->{'RoundTheWorld'} = $object->getRoundTheWorld();
        }
        if (null !== $object->getSource()) {
            $data->{'Source'} = $object->getSource();
        }

        return $data;
    }
}
