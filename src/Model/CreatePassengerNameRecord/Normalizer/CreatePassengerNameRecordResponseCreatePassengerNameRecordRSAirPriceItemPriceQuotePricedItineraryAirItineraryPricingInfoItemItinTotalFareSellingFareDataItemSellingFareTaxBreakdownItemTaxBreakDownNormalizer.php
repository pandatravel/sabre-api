<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareSellingFareDataItemSellingFareTaxBreakdownItemTaxBreakDownNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareSellingFareDataItemSellingFareTaxBreakdownItemTaxBreakDown';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareSellingFareDataItemSellingFareTaxBreakdownItemTaxBreakDown;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareSellingFareDataItemSellingFareTaxBreakdownItemTaxBreakDown();
        if (property_exists($data, 'Code')) {
            $object->setCode($data->{'Code'});
        }
        if (property_exists($data, 'Description')) {
            $object->setDescription($data->{'Description'});
        }
        if (property_exists($data, 'Amount')) {
            $object->setAmount($data->{'Amount'});
        }
        if (property_exists($data, 'CurrencyCode')) {
            $object->setCurrencyCode($data->{'CurrencyCode'});
        }
        if (property_exists($data, 'AmountPublished')) {
            $object->setAmountPublished($data->{'AmountPublished'});
        }
        if (property_exists($data, 'PublishedCurrencyCode')) {
            $object->setPublishedCurrencyCode($data->{'PublishedCurrencyCode'});
        }
        if (property_exists($data, 'StationCode')) {
            $object->setStationCode($data->{'StationCode'});
        }
        if (property_exists($data, 'CountryCode')) {
            $object->setCountryCode($data->{'CountryCode'});
        }
        if (property_exists($data, 'GoodAndServicesInd')) {
            $object->setGoodAndServicesInd($data->{'GoodAndServicesInd'});
        }
        if (property_exists($data, 'AirlineCode')) {
            $object->setAirlineCode($data->{'AirlineCode'});
        }
        if (property_exists($data, 'TaxType')) {
            $object->setTaxType($data->{'TaxType'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCode()) {
            $data->{'Code'} = $object->getCode();
        }
        if (null !== $object->getDescription()) {
            $data->{'Description'} = $object->getDescription();
        }
        if (null !== $object->getAmount()) {
            $data->{'Amount'} = $object->getAmount();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'CurrencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getAmountPublished()) {
            $data->{'AmountPublished'} = $object->getAmountPublished();
        }
        if (null !== $object->getPublishedCurrencyCode()) {
            $data->{'PublishedCurrencyCode'} = $object->getPublishedCurrencyCode();
        }
        if (null !== $object->getStationCode()) {
            $data->{'StationCode'} = $object->getStationCode();
        }
        if (null !== $object->getCountryCode()) {
            $data->{'CountryCode'} = $object->getCountryCode();
        }
        if (null !== $object->getGoodAndServicesInd()) {
            $data->{'GoodAndServicesInd'} = $object->getGoodAndServicesInd();
        }
        if (null !== $object->getAirlineCode()) {
            $data->{'AirlineCode'} = $object->getAirlineCode();
        }
        if (null !== $object->getTaxType()) {
            $data->{'TaxType'} = $object->getTaxType();
        }

        return $data;
    }
}