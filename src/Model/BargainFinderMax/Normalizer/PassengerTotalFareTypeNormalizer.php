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

class PassengerTotalFareTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\PassengerTotalFareType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\PassengerTotalFareType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\PassengerTotalFareType();
        if (property_exists($data, 'baseFareAmount') && $data->{'baseFareAmount'} !== null) {
            $object->setBaseFareAmount($data->{'baseFareAmount'});
        }
        if (property_exists($data, 'baseFareCurrency') && $data->{'baseFareCurrency'} !== null) {
            $object->setBaseFareCurrency($data->{'baseFareCurrency'});
        }
        if (property_exists($data, 'bookingFeeAmount') && $data->{'bookingFeeAmount'} !== null) {
            $object->setBookingFeeAmount($data->{'bookingFeeAmount'});
        }
        if (property_exists($data, 'cat35CommissionAmount') && $data->{'cat35CommissionAmount'} !== null) {
            $object->setCat35CommissionAmount($data->{'cat35CommissionAmount'});
        }
        if (property_exists($data, 'cat35CommissionPercentage') && $data->{'cat35CommissionPercentage'} !== null) {
            $object->setCat35CommissionPercentage($data->{'cat35CommissionPercentage'});
        }
        if (property_exists($data, 'cat35MarkupAmount') && $data->{'cat35MarkupAmount'} !== null) {
            $object->setCat35MarkupAmount($data->{'cat35MarkupAmount'});
        }
        if (property_exists($data, 'commissionAmount') && $data->{'commissionAmount'} !== null) {
            $object->setCommissionAmount($data->{'commissionAmount'});
        }
        if (property_exists($data, 'commissionAmountInEquivalent') && $data->{'commissionAmountInEquivalent'} !== null) {
            $object->setCommissionAmountInEquivalent($data->{'commissionAmountInEquivalent'});
        }
        if (property_exists($data, 'commissionPercentage') && $data->{'commissionPercentage'} !== null) {
            $object->setCommissionPercentage($data->{'commissionPercentage'});
        }
        if (property_exists($data, 'commissionSource') && $data->{'commissionSource'} !== null) {
            $object->setCommissionSource($data->{'commissionSource'});
        }
        if (property_exists($data, 'constructionAmount') && $data->{'constructionAmount'} !== null) {
            $object->setConstructionAmount($data->{'constructionAmount'});
        }
        if (property_exists($data, 'constructionCurrency') && $data->{'constructionCurrency'} !== null) {
            $object->setConstructionCurrency($data->{'constructionCurrency'});
        }
        if (property_exists($data, 'creditCardFeeAmount') && $data->{'creditCardFeeAmount'} !== null) {
            $object->setCreditCardFeeAmount($data->{'creditCardFeeAmount'});
        }
        if (property_exists($data, 'currency') && $data->{'currency'} !== null) {
            $object->setCurrency($data->{'currency'});
        }
        if (property_exists($data, 'effectiveDeviationType') && $data->{'effectiveDeviationType'} !== null) {
            $object->setEffectiveDeviationType($data->{'effectiveDeviationType'});
        }
        if (property_exists($data, 'effectivePriceDeviation') && $data->{'effectivePriceDeviation'} !== null) {
            $object->setEffectivePriceDeviation($data->{'effectivePriceDeviation'});
        }
        if (property_exists($data, 'equivalentAmount') && $data->{'equivalentAmount'} !== null) {
            $object->setEquivalentAmount($data->{'equivalentAmount'});
        }
        if (property_exists($data, 'equivalentCurrency') && $data->{'equivalentCurrency'} !== null) {
            $object->setEquivalentCurrency($data->{'equivalentCurrency'});
        }
        if (property_exists($data, 'exchangeRateOne') && $data->{'exchangeRateOne'} !== null) {
            $object->setExchangeRateOne($data->{'exchangeRateOne'});
        }
        if (property_exists($data, 'noMarkupBaseFareAmount') && $data->{'noMarkupBaseFareAmount'} !== null) {
            $object->setNoMarkupBaseFareAmount($data->{'noMarkupBaseFareAmount'});
        }
        if (property_exists($data, 'stopoverChargeAmount') && $data->{'stopoverChargeAmount'} !== null) {
            $object->setStopoverChargeAmount($data->{'stopoverChargeAmount'});
        }
        if (property_exists($data, 'totalFare') && $data->{'totalFare'} !== null) {
            $object->setTotalFare($data->{'totalFare'});
        }
        if (property_exists($data, 'totalTaxAmount') && $data->{'totalTaxAmount'} !== null) {
            $object->setTotalTaxAmount($data->{'totalTaxAmount'});
        }
        if (property_exists($data, 'totalTtypeObFee') && $data->{'totalTtypeObFee'} !== null) {
            $object->setTotalTtypeObFee($data->{'totalTtypeObFee'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBaseFareAmount()) {
            $data->{'baseFareAmount'} = $object->getBaseFareAmount();
        }
        if (null !== $object->getBaseFareCurrency()) {
            $data->{'baseFareCurrency'} = $object->getBaseFareCurrency();
        }
        if (null !== $object->getBookingFeeAmount()) {
            $data->{'bookingFeeAmount'} = $object->getBookingFeeAmount();
        }
        if (null !== $object->getCat35CommissionAmount()) {
            $data->{'cat35CommissionAmount'} = $object->getCat35CommissionAmount();
        }
        if (null !== $object->getCat35CommissionPercentage()) {
            $data->{'cat35CommissionPercentage'} = $object->getCat35CommissionPercentage();
        }
        if (null !== $object->getCat35MarkupAmount()) {
            $data->{'cat35MarkupAmount'} = $object->getCat35MarkupAmount();
        }
        if (null !== $object->getCommissionAmount()) {
            $data->{'commissionAmount'} = $object->getCommissionAmount();
        }
        if (null !== $object->getCommissionAmountInEquivalent()) {
            $data->{'commissionAmountInEquivalent'} = $object->getCommissionAmountInEquivalent();
        }
        if (null !== $object->getCommissionPercentage()) {
            $data->{'commissionPercentage'} = $object->getCommissionPercentage();
        }
        if (null !== $object->getCommissionSource()) {
            $data->{'commissionSource'} = $object->getCommissionSource();
        }
        if (null !== $object->getConstructionAmount()) {
            $data->{'constructionAmount'} = $object->getConstructionAmount();
        }
        if (null !== $object->getConstructionCurrency()) {
            $data->{'constructionCurrency'} = $object->getConstructionCurrency();
        }
        if (null !== $object->getCreditCardFeeAmount()) {
            $data->{'creditCardFeeAmount'} = $object->getCreditCardFeeAmount();
        }
        if (null !== $object->getCurrency()) {
            $data->{'currency'} = $object->getCurrency();
        }
        if (null !== $object->getEffectiveDeviationType()) {
            $data->{'effectiveDeviationType'} = $object->getEffectiveDeviationType();
        }
        if (null !== $object->getEffectivePriceDeviation()) {
            $data->{'effectivePriceDeviation'} = $object->getEffectivePriceDeviation();
        }
        if (null !== $object->getEquivalentAmount()) {
            $data->{'equivalentAmount'} = $object->getEquivalentAmount();
        }
        if (null !== $object->getEquivalentCurrency()) {
            $data->{'equivalentCurrency'} = $object->getEquivalentCurrency();
        }
        if (null !== $object->getExchangeRateOne()) {
            $data->{'exchangeRateOne'} = $object->getExchangeRateOne();
        }
        if (null !== $object->getNoMarkupBaseFareAmount()) {
            $data->{'noMarkupBaseFareAmount'} = $object->getNoMarkupBaseFareAmount();
        }
        if (null !== $object->getStopoverChargeAmount()) {
            $data->{'stopoverChargeAmount'} = $object->getStopoverChargeAmount();
        }
        if (null !== $object->getTotalFare()) {
            $data->{'totalFare'} = $object->getTotalFare();
        }
        if (null !== $object->getTotalTaxAmount()) {
            $data->{'totalTaxAmount'} = $object->getTotalTaxAmount();
        }
        if (null !== $object->getTotalTtypeObFee()) {
            $data->{'totalTtypeObFee'} = $object->getTotalTtypeObFee();
        }

        return $data;
    }
}
