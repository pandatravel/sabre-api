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

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItinerary';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItinerary';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItinerary();
        if (property_exists($data, 'AirItineraryPricingInfo') && $data->{'AirItineraryPricingInfo'} !== null) {
            $values = [];
            foreach ($data->{'AirItineraryPricingInfo'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItem', 'json', $context);
            }
            $object->setAirItineraryPricingInfo($values);
        }
        if (property_exists($data, 'AlternativePricing') && $data->{'AlternativePricing'} !== null) {
            $object->setAlternativePricing($data->{'AlternativePricing'});
        }
        if (property_exists($data, 'CurrencyCode') && $data->{'CurrencyCode'} !== null) {
            $object->setCurrencyCode($data->{'CurrencyCode'});
        }
        if (property_exists($data, 'MultiTicket') && $data->{'MultiTicket'} !== null) {
            $object->setMultiTicket($data->{'MultiTicket'});
        }
        if (property_exists($data, 'MultiTicketShortText') && $data->{'MultiTicketShortText'} !== null) {
            $object->setMultiTicketShortText($data->{'MultiTicketShortText'});
        }
        if (property_exists($data, 'ServiceFeeAmount') && $data->{'ServiceFeeAmount'} !== null) {
            $object->setServiceFeeAmount($data->{'ServiceFeeAmount'});
        }
        if (property_exists($data, 'ServiceFeeCurrencyCode') && $data->{'ServiceFeeCurrencyCode'} !== null) {
            $object->setServiceFeeCurrencyCode($data->{'ServiceFeeCurrencyCode'});
        }
        if (property_exists($data, 'ServiceFeeTax') && $data->{'ServiceFeeTax'} !== null) {
            $object->setServiceFeeTax($data->{'ServiceFeeTax'});
        }
        if (property_exists($data, 'TotalAmount') && $data->{'TotalAmount'} !== null) {
            $object->setTotalAmount($data->{'TotalAmount'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAirItineraryPricingInfo()) {
            $values = [];
            foreach ($object->getAirItineraryPricingInfo() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'AirItineraryPricingInfo'} = $values;
        }
        if (null !== $object->getAlternativePricing()) {
            $data->{'AlternativePricing'} = $object->getAlternativePricing();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'CurrencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getMultiTicket()) {
            $data->{'MultiTicket'} = $object->getMultiTicket();
        }
        if (null !== $object->getMultiTicketShortText()) {
            $data->{'MultiTicketShortText'} = $object->getMultiTicketShortText();
        }
        if (null !== $object->getServiceFeeAmount()) {
            $data->{'ServiceFeeAmount'} = $object->getServiceFeeAmount();
        }
        if (null !== $object->getServiceFeeCurrencyCode()) {
            $data->{'ServiceFeeCurrencyCode'} = $object->getServiceFeeCurrencyCode();
        }
        if (null !== $object->getServiceFeeTax()) {
            $data->{'ServiceFeeTax'} = $object->getServiceFeeTax();
        }
        if (null !== $object->getTotalAmount()) {
            $data->{'TotalAmount'} = $object->getTotalAmount();
        }

        return $data;
    }
}
