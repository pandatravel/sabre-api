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

class TotalFareTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\TotalFareType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\TotalFareType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\TotalFareType();
        if (property_exists($data, 'airExtrasAmount') && $data->{'airExtrasAmount'} !== null) {
            $object->setAirExtrasAmount($data->{'airExtrasAmount'});
        }
        if (property_exists($data, 'baseFareAmount') && $data->{'baseFareAmount'} !== null) {
            $object->setBaseFareAmount($data->{'baseFareAmount'});
        }
        if (property_exists($data, 'baseFareCurrency') && $data->{'baseFareCurrency'} !== null) {
            $object->setBaseFareCurrency($data->{'baseFareCurrency'});
        }
        if (property_exists($data, 'bookingFeeAmount') && $data->{'bookingFeeAmount'} !== null) {
            $object->setBookingFeeAmount($data->{'bookingFeeAmount'});
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
        if (property_exists($data, 'effectivePriceDeviation') && $data->{'effectivePriceDeviation'} !== null) {
            $object->setEffectivePriceDeviation($data->{'effectivePriceDeviation'});
        }
        if (property_exists($data, 'equivalentAmount') && $data->{'equivalentAmount'} !== null) {
            $object->setEquivalentAmount($data->{'equivalentAmount'});
        }
        if (property_exists($data, 'equivalentCurrency') && $data->{'equivalentCurrency'} !== null) {
            $object->setEquivalentCurrency($data->{'equivalentCurrency'});
        }
        if (property_exists($data, 'serviceFeeAmount') && $data->{'serviceFeeAmount'} !== null) {
            $object->setServiceFeeAmount($data->{'serviceFeeAmount'});
        }
        if (property_exists($data, 'serviceFeeTax') && $data->{'serviceFeeTax'} !== null) {
            $object->setServiceFeeTax($data->{'serviceFeeTax'});
        }
        if (property_exists($data, 'totalPrice') && $data->{'totalPrice'} !== null) {
            $object->setTotalPrice($data->{'totalPrice'});
        }
        if (property_exists($data, 'totalPriceWithAirExtras') && $data->{'totalPriceWithAirExtras'} !== null) {
            $object->setTotalPriceWithAirExtras($data->{'totalPriceWithAirExtras'});
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
        if (null !== $object->getAirExtrasAmount()) {
            $data->{'airExtrasAmount'} = $object->getAirExtrasAmount();
        }
        if (null !== $object->getBaseFareAmount()) {
            $data->{'baseFareAmount'} = $object->getBaseFareAmount();
        }
        if (null !== $object->getBaseFareCurrency()) {
            $data->{'baseFareCurrency'} = $object->getBaseFareCurrency();
        }
        if (null !== $object->getBookingFeeAmount()) {
            $data->{'bookingFeeAmount'} = $object->getBookingFeeAmount();
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
        if (null !== $object->getEffectivePriceDeviation()) {
            $data->{'effectivePriceDeviation'} = $object->getEffectivePriceDeviation();
        }
        if (null !== $object->getEquivalentAmount()) {
            $data->{'equivalentAmount'} = $object->getEquivalentAmount();
        }
        if (null !== $object->getEquivalentCurrency()) {
            $data->{'equivalentCurrency'} = $object->getEquivalentCurrency();
        }
        if (null !== $object->getServiceFeeAmount()) {
            $data->{'serviceFeeAmount'} = $object->getServiceFeeAmount();
        }
        if (null !== $object->getServiceFeeTax()) {
            $data->{'serviceFeeTax'} = $object->getServiceFeeTax();
        }
        if (null !== $object->getTotalPrice()) {
            $data->{'totalPrice'} = $object->getTotalPrice();
        }
        if (null !== $object->getTotalPriceWithAirExtras()) {
            $data->{'totalPriceWithAirExtras'} = $object->getTotalPriceWithAirExtras();
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
