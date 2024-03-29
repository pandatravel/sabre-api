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

class OrgOpentravelOta200305PriceRequestInformationTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationType';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationType';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305PriceRequestInformationType();
        if (property_exists($data, 'AccountCode') && $data->{'AccountCode'} !== null) {
            $values = [];
            foreach ($data->{'AccountCode'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeAccountCode', 'json', $context);
            }
            $object->setAccountCode($values);
        }
        if (property_exists($data, 'BypassAdvancePurchase') && $data->{'BypassAdvancePurchase'} !== null) {
            $object->setBypassAdvancePurchase($data->{'BypassAdvancePurchase'});
        }
        if (property_exists($data, 'CurrencyCode') && $data->{'CurrencyCode'} !== null) {
            $object->setCurrencyCode($data->{'CurrencyCode'});
        }
        if (property_exists($data, 'FareQualifier') && $data->{'FareQualifier'} !== null) {
            $object->setFareQualifier($data->{'FareQualifier'});
        }
        if (property_exists($data, 'NegotiatedFareCode') && $data->{'NegotiatedFareCode'} !== null) {
            $values_1 = [];
            foreach ($data->{'NegotiatedFareCode'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeNegotiatedFareCode', 'json', $context);
            }
            $object->setNegotiatedFareCode($values_1);
        }
        if (property_exists($data, 'NegotiatedFaresOnly') && $data->{'NegotiatedFaresOnly'} !== null) {
            $object->setNegotiatedFaresOnly($data->{'NegotiatedFaresOnly'});
        }
        if (property_exists($data, 'NetFaresUsed') && $data->{'NetFaresUsed'} !== null) {
            $object->setNetFaresUsed($data->{'NetFaresUsed'});
        }
        if (property_exists($data, 'PricingSource') && $data->{'PricingSource'} !== null) {
            $object->setPricingSource($data->{'PricingSource'});
        }
        if (property_exists($data, 'ProcessThruFaresOnly') && $data->{'ProcessThruFaresOnly'} !== null) {
            $object->setProcessThruFaresOnly($data->{'ProcessThruFaresOnly'});
        }
        if (property_exists($data, 'PurchaseDate') && $data->{'PurchaseDate'} !== null) {
            $object->setPurchaseDate($data->{'PurchaseDate'});
        }
        if (property_exists($data, 'PurchaseTime') && $data->{'PurchaseTime'} !== null) {
            $object->setPurchaseTime($data->{'PurchaseTime'});
        }
        if (property_exists($data, 'Reprice') && $data->{'Reprice'} !== null) {
            $object->setReprice($data->{'Reprice'});
        }
        if (property_exists($data, 'TPA_Extensions') && $data->{'TPA_Extensions'} !== null) {
            $object->setTPAExtensions($this->denormalizer->denormalize($data->{'TPA_Extensions'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensions', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAccountCode()) {
            $values = [];
            foreach ($object->getAccountCode() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'AccountCode'} = $values;
        }
        if (null !== $object->getBypassAdvancePurchase()) {
            $data->{'BypassAdvancePurchase'} = $object->getBypassAdvancePurchase();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'CurrencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getFareQualifier()) {
            $data->{'FareQualifier'} = $object->getFareQualifier();
        }
        if (null !== $object->getNegotiatedFareCode()) {
            $values_1 = [];
            foreach ($object->getNegotiatedFareCode() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'NegotiatedFareCode'} = $values_1;
        }
        if (null !== $object->getNegotiatedFaresOnly()) {
            $data->{'NegotiatedFaresOnly'} = $object->getNegotiatedFaresOnly();
        }
        if (null !== $object->getNetFaresUsed()) {
            $data->{'NetFaresUsed'} = $object->getNetFaresUsed();
        }
        if (null !== $object->getPricingSource()) {
            $data->{'PricingSource'} = $object->getPricingSource();
        }
        if (null !== $object->getProcessThruFaresOnly()) {
            $data->{'ProcessThruFaresOnly'} = $object->getProcessThruFaresOnly();
        }
        if (null !== $object->getPurchaseDate()) {
            $data->{'PurchaseDate'} = $object->getPurchaseDate();
        }
        if (null !== $object->getPurchaseTime()) {
            $data->{'PurchaseTime'} = $object->getPurchaseTime();
        }
        if (null !== $object->getReprice()) {
            $data->{'Reprice'} = $object->getReprice();
        }
        if (null !== $object->getTPAExtensions()) {
            $data->{'TPA_Extensions'} = $this->normalizer->normalize($object->getTPAExtensions(), 'json', $context);
        }

        return $data;
    }
}
