<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class TicketingItemPricingQualifiersNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiers';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemPricingQualifiers;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\EnhancedAirTicket\TicketingItemPricingQualifiers();
        if (property_exists($data, 'Brand')) {
            $values = [];
            foreach ($data->{'Brand'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersBrandItem', 'json', $context);
            }
            $object->setBrand($values);
        }
        if (property_exists($data, 'FareFocusExclude')) {
            $object->setFareFocusExclude($this->denormalizer->denormalize($data->{'FareFocusExclude'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersFareFocusExclude', 'json', $context));
        }
        if (property_exists($data, 'Fare')) {
            $object->setFare($this->denormalizer->denormalize($data->{'Fare'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersFare', 'json', $context));
        }
        if (property_exists($data, 'ItineraryOptions')) {
            $object->setItineraryOptions($this->denormalizer->denormalize($data->{'ItineraryOptions'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersItineraryOptions', 'json', $context));
        }
        if (property_exists($data, 'NameSelect')) {
            $values_1 = [];
            foreach ($data->{'NameSelect'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersNameSelectItem', 'json', $context);
            }
            $object->setNameSelect($values_1);
        }
        if (property_exists($data, 'PhaseIV')) {
            $values_2 = [];
            foreach ($data->{'PhaseIV'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersPhaseIVItem', 'json', $context);
            }
            $object->setPhaseIV($values_2);
        }
        if (property_exists($data, 'PriceQuote')) {
            $values_3 = [];
            foreach ($data->{'PriceQuote'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersPriceQuoteItem', 'json', $context);
            }
            $object->setPriceQuote($values_3);
        }
        if (property_exists($data, 'RefundableBalance')) {
            $object->setRefundableBalance($this->denormalizer->denormalize($data->{'RefundableBalance'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersRefundableBalance', 'json', $context));
        }
        if (property_exists($data, 'SpanishLargeFamilyDiscountLevel')) {
            $object->setSpanishLargeFamilyDiscountLevel($data->{'SpanishLargeFamilyDiscountLevel'});
        }
        if (property_exists($data, 'SpecificFare')) {
            $values_4 = [];
            foreach ($data->{'SpecificFare'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersSpecificFareItem', 'json', $context);
            }
            $object->setSpecificFare($values_4);
        }
        if (property_exists($data, 'SpecificPenalty')) {
            $object->setSpecificPenalty($this->denormalizer->denormalize($data->{'SpecificPenalty'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersSpecificPenalty', 'json', $context));
        }
        if (property_exists($data, 'Taxes')) {
            $object->setTaxes($this->denormalizer->denormalize($data->{'Taxes'}, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersTaxes', 'json', $context));
        }
        if (property_exists($data, 'ValidityDates')) {
            $values_5 = [];
            foreach ($data->{'ValidityDates'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Ammonkc\\SabreApi\\Model\\EnhancedAirTicket\\TicketingItemPricingQualifiersValidityDatesItem', 'json', $context);
            }
            $object->setValidityDates($values_5);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBrand()) {
            $values = [];
            foreach ($object->getBrand() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Brand'} = $values;
        }
        if (null !== $object->getFareFocusExclude()) {
            $data->{'FareFocusExclude'} = $this->normalizer->normalize($object->getFareFocusExclude(), 'json', $context);
        }
        if (null !== $object->getFare()) {
            $data->{'Fare'} = $this->normalizer->normalize($object->getFare(), 'json', $context);
        }
        if (null !== $object->getItineraryOptions()) {
            $data->{'ItineraryOptions'} = $this->normalizer->normalize($object->getItineraryOptions(), 'json', $context);
        }
        if (null !== $object->getNameSelect()) {
            $values_1 = [];
            foreach ($object->getNameSelect() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'NameSelect'} = $values_1;
        }
        if (null !== $object->getPhaseIV()) {
            $values_2 = [];
            foreach ($object->getPhaseIV() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'PhaseIV'} = $values_2;
        }
        if (null !== $object->getPriceQuote()) {
            $values_3 = [];
            foreach ($object->getPriceQuote() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'PriceQuote'} = $values_3;
        }
        if (null !== $object->getRefundableBalance()) {
            $data->{'RefundableBalance'} = $this->normalizer->normalize($object->getRefundableBalance(), 'json', $context);
        }
        if (null !== $object->getSpanishLargeFamilyDiscountLevel()) {
            $data->{'SpanishLargeFamilyDiscountLevel'} = $object->getSpanishLargeFamilyDiscountLevel();
        }
        if (null !== $object->getSpecificFare()) {
            $values_4 = [];
            foreach ($object->getSpecificFare() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'SpecificFare'} = $values_4;
        }
        if (null !== $object->getSpecificPenalty()) {
            $data->{'SpecificPenalty'} = $this->normalizer->normalize($object->getSpecificPenalty(), 'json', $context);
        }
        if (null !== $object->getTaxes()) {
            $data->{'Taxes'} = $this->normalizer->normalize($object->getTaxes(), 'json', $context);
        }
        if (null !== $object->getValidityDates()) {
            $values_5 = [];
            foreach ($object->getValidityDates() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'ValidityDates'} = $values_5;
        }

        return $data;
    }
}
