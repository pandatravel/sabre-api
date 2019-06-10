<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTaxItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\InstaFlightsSearch\\AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTaxItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\InstaFlightsSearch\AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTaxItem;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\InstaFlightsSearch\AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownPassengerFareTaxesTaxItem();
        if (property_exists($data, 'CurrencyCode')) {
            $object->setCurrencyCode($data->{'CurrencyCode'});
        }
        if (property_exists($data, 'DecimalPlaces')) {
            $object->setDecimalPlaces($data->{'DecimalPlaces'});
        }
        if (property_exists($data, 'TaxCode')) {
            $object->setTaxCode($data->{'TaxCode'});
        }
        if (property_exists($data, 'Amount')) {
            $object->setAmount($data->{'Amount'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCurrencyCode()) {
            $data->{'CurrencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getDecimalPlaces()) {
            $data->{'DecimalPlaces'} = $object->getDecimalPlaces();
        }
        if (null !== $object->getTaxCode()) {
            $data->{'TaxCode'} = $object->getTaxCode();
        }
        if (null !== $object->getAmount()) {
            $data->{'Amount'} = $object->getAmount();
        }

        return $data;
    }
}
