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

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOP';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOP';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOP();
        if (property_exists($data, 'Fare') && $data->{'Fare'} !== null) {
            $object->setFare($this->denormalizer->denormalize($data->{'Fare'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFare', 'json', $context));
        }
        if (property_exists($data, 'FOP_One') && $data->{'FOP_One'} !== null) {
            $object->setFOPOne($this->denormalizer->denormalize($data->{'FOP_One'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPOne', 'json', $context));
        }
        if (property_exists($data, 'FOP_Two') && $data->{'FOP_Two'} !== null) {
            $object->setFOPTwo($this->denormalizer->denormalize($data->{'FOP_Two'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwo', 'json', $context));
        }
        if (property_exists($data, 'Taxes') && $data->{'Taxes'} !== null) {
            $object->setTaxes($this->denormalizer->denormalize($data->{'Taxes'}, 'Ammonkc\\SabreApi\\Model\\CreatePassengerNameRecord\\CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPTaxes', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getFare()) {
            $data->{'Fare'} = $this->normalizer->normalize($object->getFare(), 'json', $context);
        }
        if (null !== $object->getFOPOne()) {
            $data->{'FOP_One'} = $this->normalizer->normalize($object->getFOPOne(), 'json', $context);
        }
        if (null !== $object->getFOPTwo()) {
            $data->{'FOP_Two'} = $this->normalizer->normalize($object->getFOPTwo(), 'json', $context);
        }
        if (null !== $object->getTaxes()) {
            $data->{'Taxes'} = $this->normalizer->normalize($object->getTaxes(), 'json', $context);
        }

        return $data;
    }
}
