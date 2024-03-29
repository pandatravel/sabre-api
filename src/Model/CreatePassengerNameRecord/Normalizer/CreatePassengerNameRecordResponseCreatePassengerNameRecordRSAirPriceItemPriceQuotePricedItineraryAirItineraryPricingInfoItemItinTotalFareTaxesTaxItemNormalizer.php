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

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTaxesTaxItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTaxesTaxItem';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTaxesTaxItem';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTaxesTaxItem();
        if (property_exists($data, 'Amount') && $data->{'Amount'} !== null) {
            $object->setAmount($data->{'Amount'});
        }
        if (property_exists($data, 'TaxCode') && $data->{'TaxCode'} !== null) {
            $object->setTaxCode($data->{'TaxCode'});
        }
        if (property_exists($data, 'TaxName') && $data->{'TaxName'} !== null) {
            $object->setTaxName($data->{'TaxName'});
        }
        if (property_exists($data, 'TicketingTaxCode') && $data->{'TicketingTaxCode'} !== null) {
            $object->setTicketingTaxCode($data->{'TicketingTaxCode'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'Amount'} = $object->getAmount();
        }
        if (null !== $object->getTaxCode()) {
            $data->{'TaxCode'} = $object->getTaxCode();
        }
        if (null !== $object->getTaxName()) {
            $data->{'TaxName'} = $object->getTaxName();
        }
        if (null !== $object->getTicketingTaxCode()) {
            $data->{'TicketingTaxCode'} = $object->getTicketingTaxCode();
        }

        return $data;
    }
}
