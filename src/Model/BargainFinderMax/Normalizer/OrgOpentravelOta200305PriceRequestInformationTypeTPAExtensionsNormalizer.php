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

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensions';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensions';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensions();
        if (property_exists($data, 'ApplyResidentDiscount') && $data->{'ApplyResidentDiscount'} !== null) {
            $object->setApplyResidentDiscount($this->denormalizer->denormalize($data->{'ApplyResidentDiscount'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305ApplyResidentDiscountType', 'json', $context));
        }
        if (property_exists($data, 'BrandedFareIndicators') && $data->{'BrandedFareIndicators'} !== null) {
            $object->setBrandedFareIndicators($this->denormalizer->denormalize($data->{'BrandedFareIndicators'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicators', 'json', $context));
        }
        if (property_exists($data, 'Currency') && $data->{'Currency'} !== null) {
            $object->setCurrency($this->denormalizer->denormalize($data->{'Currency'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCurrency', 'json', $context));
        }
        if (property_exists($data, 'CustomerType') && $data->{'CustomerType'} !== null) {
            $object->setCustomerType($this->denormalizer->denormalize($data->{'CustomerType'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCustomerType', 'json', $context));
        }
        if (property_exists($data, 'ETicketableOverride') && $data->{'ETicketableOverride'} !== null) {
            $object->setETicketableOverride($this->denormalizer->denormalize($data->{'ETicketableOverride'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsETicketableOverride', 'json', $context));
        }
        if (property_exists($data, 'FareAdjustment') && $data->{'FareAdjustment'} !== null) {
            $values = [];
            foreach ($data->{'FareAdjustment'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsFareAdjustment', 'json', $context);
            }
            $object->setFareAdjustment($values);
        }
        if (property_exists($data, 'FareBreaksAtLegs') && $data->{'FareBreaksAtLegs'} !== null) {
            $object->setFareBreaksAtLegs($this->denormalizer->denormalize($data->{'FareBreaksAtLegs'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsFareBreaksAtLegs', 'json', $context));
        }
        if (property_exists($data, 'ForceCompanion') && $data->{'ForceCompanion'} !== null) {
            $object->setForceCompanion($this->denormalizer->denormalize($data->{'ForceCompanion'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsForceCompanion', 'json', $context));
        }
        if (property_exists($data, 'IATAFare') && $data->{'IATAFare'} !== null) {
            $object->setIATAFare($this->denormalizer->denormalize($data->{'IATAFare'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIATAFare', 'json', $context));
        }
        if (property_exists($data, 'Indicators') && $data->{'Indicators'} !== null) {
            $object->setIndicators($this->denormalizer->denormalize($data->{'Indicators'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicators', 'json', $context));
        }
        if (property_exists($data, 'MultipleTravelerGroups') && $data->{'MultipleTravelerGroups'} !== null) {
            $object->setMultipleTravelerGroups($this->denormalizer->denormalize($data->{'MultipleTravelerGroups'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsMultipleTravelerGroups', 'json', $context));
        }
        if (property_exists($data, 'OBFees') && $data->{'OBFees'} !== null) {
            $object->setOBFees($this->denormalizer->denormalize($data->{'OBFees'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsOBFees', 'json', $context));
        }
        if (property_exists($data, 'PassengerPriceAdjustment') && $data->{'PassengerPriceAdjustment'} !== null) {
            $values_1 = [];
            foreach ($data->{'PassengerPriceAdjustment'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PassengerPriceAdjustmentType', 'json', $context);
            }
            $object->setPassengerPriceAdjustment($values_1);
        }
        if (property_exists($data, 'PassengerStatus') && $data->{'PassengerStatus'} !== null) {
            $object->setPassengerStatus($this->denormalizer->denormalize($data->{'PassengerStatus'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPassengerStatus', 'json', $context));
        }
        if (property_exists($data, 'PointOfSaleOverride') && $data->{'PointOfSaleOverride'} !== null) {
            $object->setPointOfSaleOverride($this->denormalizer->denormalize($data->{'PointOfSaleOverride'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PointOfSaleOverrideType', 'json', $context));
        }
        if (property_exists($data, 'PointOfTicketingOverride') && $data->{'PointOfTicketingOverride'} !== null) {
            $object->setPointOfTicketingOverride($this->denormalizer->denormalize($data->{'PointOfTicketingOverride'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PointOfTicketingOverrideType', 'json', $context));
        }
        if (property_exists($data, 'PriceAdjustment') && $data->{'PriceAdjustment'} !== null) {
            $object->setPriceAdjustment($this->denormalizer->denormalize($data->{'PriceAdjustment'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceAdjustmentType', 'json', $context));
        }
        if (property_exists($data, 'Priority') && $data->{'Priority'} !== null) {
            $object->setPriority($this->denormalizer->denormalize($data->{'Priority'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriority', 'json', $context));
        }
        if (property_exists($data, 'PrivateFare') && $data->{'PrivateFare'} !== null) {
            $object->setPrivateFare($this->denormalizer->denormalize($data->{'PrivateFare'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPrivateFare', 'json', $context));
        }
        if (property_exists($data, 'PromoID') && $data->{'PromoID'} !== null) {
            $object->setPromoID($data->{'PromoID'});
        }
        if (property_exists($data, 'PublicFare') && $data->{'PublicFare'} !== null) {
            $object->setPublicFare($this->denormalizer->denormalize($data->{'PublicFare'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPublicFare', 'json', $context));
        }
        if (property_exists($data, 'UseNegotiatedFares') && $data->{'UseNegotiatedFares'} !== null) {
            $object->setUseNegotiatedFares($this->denormalizer->denormalize($data->{'UseNegotiatedFares'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUseNegotiatedFares', 'json', $context));
        }
        if (property_exists($data, 'UsePassengerFares') && $data->{'UsePassengerFares'} !== null) {
            $object->setUsePassengerFares($this->denormalizer->denormalize($data->{'UsePassengerFares'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUsePassengerFares', 'json', $context));
        }
        if (property_exists($data, 'UseReducedConstructions') && $data->{'UseReducedConstructions'} !== null) {
            $object->setUseReducedConstructions($this->denormalizer->denormalize($data->{'UseReducedConstructions'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUseReducedConstructions', 'json', $context));
        }
        if (property_exists($data, 'WebFare') && $data->{'WebFare'} !== null) {
            $object->setWebFare($this->denormalizer->denormalize($data->{'WebFare'}, 'Ammonkc\\SabreApi\\Model\\BargainFinderMax\\OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsWebFare', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getApplyResidentDiscount()) {
            $data->{'ApplyResidentDiscount'} = $this->normalizer->normalize($object->getApplyResidentDiscount(), 'json', $context);
        }
        if (null !== $object->getBrandedFareIndicators()) {
            $data->{'BrandedFareIndicators'} = $this->normalizer->normalize($object->getBrandedFareIndicators(), 'json', $context);
        }
        if (null !== $object->getCurrency()) {
            $data->{'Currency'} = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
        }
        if (null !== $object->getCustomerType()) {
            $data->{'CustomerType'} = $this->normalizer->normalize($object->getCustomerType(), 'json', $context);
        }
        if (null !== $object->getETicketableOverride()) {
            $data->{'ETicketableOverride'} = $this->normalizer->normalize($object->getETicketableOverride(), 'json', $context);
        }
        if (null !== $object->getFareAdjustment()) {
            $values = [];
            foreach ($object->getFareAdjustment() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'FareAdjustment'} = $values;
        }
        if (null !== $object->getFareBreaksAtLegs()) {
            $data->{'FareBreaksAtLegs'} = $this->normalizer->normalize($object->getFareBreaksAtLegs(), 'json', $context);
        }
        if (null !== $object->getForceCompanion()) {
            $data->{'ForceCompanion'} = $this->normalizer->normalize($object->getForceCompanion(), 'json', $context);
        }
        if (null !== $object->getIATAFare()) {
            $data->{'IATAFare'} = $this->normalizer->normalize($object->getIATAFare(), 'json', $context);
        }
        if (null !== $object->getIndicators()) {
            $data->{'Indicators'} = $this->normalizer->normalize($object->getIndicators(), 'json', $context);
        }
        if (null !== $object->getMultipleTravelerGroups()) {
            $data->{'MultipleTravelerGroups'} = $this->normalizer->normalize($object->getMultipleTravelerGroups(), 'json', $context);
        }
        if (null !== $object->getOBFees()) {
            $data->{'OBFees'} = $this->normalizer->normalize($object->getOBFees(), 'json', $context);
        }
        if (null !== $object->getPassengerPriceAdjustment()) {
            $values_1 = [];
            foreach ($object->getPassengerPriceAdjustment() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'PassengerPriceAdjustment'} = $values_1;
        }
        if (null !== $object->getPassengerStatus()) {
            $data->{'PassengerStatus'} = $this->normalizer->normalize($object->getPassengerStatus(), 'json', $context);
        }
        if (null !== $object->getPointOfSaleOverride()) {
            $data->{'PointOfSaleOverride'} = $this->normalizer->normalize($object->getPointOfSaleOverride(), 'json', $context);
        }
        if (null !== $object->getPointOfTicketingOverride()) {
            $data->{'PointOfTicketingOverride'} = $this->normalizer->normalize($object->getPointOfTicketingOverride(), 'json', $context);
        }
        if (null !== $object->getPriceAdjustment()) {
            $data->{'PriceAdjustment'} = $this->normalizer->normalize($object->getPriceAdjustment(), 'json', $context);
        }
        if (null !== $object->getPriority()) {
            $data->{'Priority'} = $this->normalizer->normalize($object->getPriority(), 'json', $context);
        }
        if (null !== $object->getPrivateFare()) {
            $data->{'PrivateFare'} = $this->normalizer->normalize($object->getPrivateFare(), 'json', $context);
        }
        if (null !== $object->getPromoID()) {
            $data->{'PromoID'} = $object->getPromoID();
        }
        if (null !== $object->getPublicFare()) {
            $data->{'PublicFare'} = $this->normalizer->normalize($object->getPublicFare(), 'json', $context);
        }
        if (null !== $object->getUseNegotiatedFares()) {
            $data->{'UseNegotiatedFares'} = $this->normalizer->normalize($object->getUseNegotiatedFares(), 'json', $context);
        }
        if (null !== $object->getUsePassengerFares()) {
            $data->{'UsePassengerFares'} = $this->normalizer->normalize($object->getUsePassengerFares(), 'json', $context);
        }
        if (null !== $object->getUseReducedConstructions()) {
            $data->{'UseReducedConstructions'} = $this->normalizer->normalize($object->getUseReducedConstructions(), 'json', $context);
        }
        if (null !== $object->getWebFare()) {
            $data->{'WebFare'} = $this->normalizer->normalize($object->getWebFare(), 'json', $context);
        }

        return $data;
    }
}
