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

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformation';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformation';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformation();
        if (property_exists($data, 'Base') && $data->{'Base'} !== null) {
            $object->setBase($this->denormalizer->denormalize($data->{'Base'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationBase', 'json', $context));
        }
        if (property_exists($data, 'Equiv') && $data->{'Equiv'} !== null) {
            $object->setEquiv($this->denormalizer->denormalize($data->{'Equiv'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationEquiv', 'json', $context));
        }
        if (property_exists($data, 'TaxIndicator') && $data->{'TaxIndicator'} !== null) {
            $object->setTaxIndicator($data->{'TaxIndicator'});
        }
        if (property_exists($data, 'Total') && $data->{'Total'} !== null) {
            $object->setTotal($data->{'Total'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBase()) {
            $data->{'Base'} = $this->normalizer->normalize($object->getBase(), 'json', $context);
        }
        if (null !== $object->getEquiv()) {
            $data->{'Equiv'} = $this->normalizer->normalize($object->getEquiv(), 'json', $context);
        }
        if (null !== $object->getTaxIndicator()) {
            $data->{'TaxIndicator'} = $object->getTaxIndicator();
        }
        if (null !== $object->getTotal()) {
            $data->{'Total'} = $object->getTotal();
        }

        return $data;
    }
}
